const global_selector = "#tikTok";
const global_search = "#global-modal-search";
const global_toastr = "#global-toastr";
function dd(message) {
    console.log(message);
}

$(".select2").select2();

toastr.options = {
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "8000",
    timeOut: "8000",
    extendedTimeOut: "8000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
    isRtl: true,
};

function playSuccessSound() {
    // var audio = new Audio("/assets/sounds/success.mp3");
    // audio.play();
}

function playErrorSound() {
    // var audio = new Audio("/assets/sounds/error.mp3");
    // audio.play();
}
/* FUNCTIONS HELPERS STARTS HERE */
function alert_success(message) {

}

function alert_error(message) {
}

function alert_warning(message) {

}

function disconnected() {
    warning(
        "It looks like you are disconnected from the application, please refresh the page."
    );
}

function showLoader() {
    $.blockUI({
        message:
            '<div class="spinner-border text-primary" role="status"></div>',
        // timeout: 1000,
        css: {
            backgroundColor: "transparent",
            border: "0",
        },
        overlayCSS: {
            backgroundColor: "#fff",
            opacity: 0.8,
        },
    });
}

function hideLoader() {
    $.unblockUI();
}

function check_controller(controller) {
    try {
        if (!controller) {
            alert_error(
                "The controller is not found! You need to specify the controller name in attribute data-controller in the element. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
            );
            return false;
        }
        let validator = window[controller].getValidator();
        if (validator === undefined) {
            alert_error(
                "The controller " +
                    controller +
                    " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
            );
            return false;
        }
        return true;
    } catch (error) {
        alert_error(
            "The controller " +
                controller +
                " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
        );
        return false;
    }
}

/* FUNCTIONS HELPERS ENDS HERE */

/* EVENTS HELPERS STARS HERE */

// Show a modal on click on a link
$("body").off("click", ".anchor-modal");
$("body").on("click", ".anchor-modal", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);
    let modal_id = global_selector;
    let modal_size = "";
    let centred = "";

    if (current.data("modal-id")) {
        modal_id = current.data("modal-id");
    }
    if (current.data("modal-size")) {
        modal_size = current.data("modal-size");
    }
    if (current.data("modal-centred")) {
        centred = current.data("modal-centred");
    }
    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    let disableclick = current.data("disableclick");
    if (!current.data("href")) {
        alert_error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let orders = [];
    if (current.data("orders") !== undefined) {
        orders = current.data("orders");
    }
    headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: current.data("href"),
        headers: headers,
        data: {
            orders: orders,
        },
        success: function (data) {
            if (data.html === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            }
            if (disableclick) {
                $(modal_id).modal({
                    backdrop: "static",
                    keyboard: false,
                });
            }

            $(modal_id)
                .find(".modal-title")
                .empty()
                .text(current.data("modal-title"));
            $(modal_id)
                .find(".modal-description")
                .empty()
                .text(current.data("modal-description"));

            $(modal_id).find(".modal-content").find(".modal-data").empty();

            $(modal_id)
                .find(".modal-content")
                .find(".modal-data")
                .html(data.html);

            if (modal_size) {
                $(modal_id)
                    .find(".modal-dialog")
                    .removeClass("modal-lg")
                    .addClass(modal_size);
            }

            if (centred) {
                $(modal_id)
                    .find(".modal-dialog")
                    .addClass("modal-dialog-centered");
            }

            if (has_controller) {
                if (!window[controllerClass]) {
                    alert_error(
                        "The controller " +
                            controllerClass +
                            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                    );
                    hideLoader();
                    return false;
                } else {
                    window[controllerClass].init();
                    $(modal_id).modal("show");
                }
            } else {
                $(modal_id).modal("show");
            }
            hideLoader();
        },

        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        },
    });
});

var files = [];
$("body").off("change", ".file-input");
$("body").on("change", ".file-input", function (e) {
    if (!this.files) {
        return false;
    }
    files.push(this.files[0]);

    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (event) {
            reader.readAsDataURL(this.files[0]);
        };
    }
});

// Ajax add a new user after a form-store
$("body").off("submit", ".form-store");
$("body").on("submit", ".form-store", function (e) {
    e.preventDefault();

    let current = $(this);
    // let data = current.serializeArray();
    let action = current.attr("action");
    let container_id = current.data("container");
    let modal_id = global_selector;
    let has_controller = !current.data("no-controller");
    let has_DataCondition = current.data("hasdatacondition");
    let class_container = current.data("class-container");
    let data_cmi = current.data("cmi");

    let controllerClass = current.data("controller");
    var fd = new FormData(this);

    let has_wait_button = current.data("waitbutton");

    // params_query = data.split('&');
    // for (var i = 0; i < params_query.length; i++) {

    //     fd.append(params_query[i].split('=')[0], decodeURIComponent(params_query[i].split('=')[1]));
    // }
    if (has_wait_button) {
        var button = document.querySelector(has_wait_button);
        // Activate indicator
        button.setAttribute("data-kt-indicator", "on");
        button.disabled = true;
    }
    $.each(files, function (i, value) {
        fd.append("file[" + i + "]", value); // change this to value
    });

    function sendAjax() {
        showLoader();
        headers = {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        };
        let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        $.ajax({
            method: current.attr("method"),
            url: action,
            data: fd,
            contentType: false,
            processData: false,
            dataType: "json",
            headers: headers,
            success: function (response) {
                //clear all inputs
                hideLoader();

                console.log(response.cmi);
                if (current.data("clear")) {
                    current.find("input[type=text], textarea").val("");
                }

                if (response.cmi == true) {
                    let form = "";
                    // open in new tab
                    form +=
                        '<form id="cmi_form" action="' +
                        response.url +
                        '" method="post">';
                    //token
                    form +=
                        '<input type="hidden" name="_token" value="' +
                        $('meta[name="csrf-token"]').attr("content") +
                        '">';
                    form += "</form>";
                    $("body").append(form);
                    //submit form
                    $("#cmi_form").submit();
                }

                if (response.cmi == false) {
                    hideLoader();
                    setTimeout(function () {
                        window.location = response.url_thankyou;
                    }, 2000);
                }

                if (response.message) {
                    playSuccessSound();
                    toastr.info(response.message);
                }

                if (response.target == "_blank") {
                    if (response.URL) {
                        window.open(response.URL, "_blank");
                    }
                }
                if (current.data("go-top")) {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                }

                if (response.custom_notif == true) {
                    $("#custom_alert").html(response.html_notif);
                }

                if (container_id) {
                    if (has_DataCondition) {
                        $("#container_of_list_container").css(
                            "display",
                            "block"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: none !important"
                        );
                    }

                    $(container_id).html(response.html);

                    //find form

                    // Reinitialize all KT Menues

                    $(".select_2").select2();
                }

                if (class_container) {
                    $(class_container).html(response.html);
                }
                $(modal_id).modal("hide").hide();
                files = [];
                if (response.redirect) {
                    setTimeout(function () {
                        window.location = response.redirect;
                    }, 2000);
                } else {
                    if (has_wait_button) {
                        button.removeAttribute("data-kt-indicator");
                        button.disabled = false;
                    }
                }
            },
            error: function (response) {
                hideLoader();
                playErrorSound();

                toastr.error(response.responseJSON.message);

                if (response.responseJSON.errors) {
                    let errors = response.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        toastr.error(value);
                    });
                }
                if (has_wait_button) {
                    button.removeAttribute("data-kt-indicator");
                    button.disabled = false;
                }
            },
        });
    }
    if (has_controller) {
        if (check_controller(controllerClass)) {
            let validator = window[controllerClass].getValidator();
            validator.validate().then(function (status) {
                if (status == "Valid") {
                    sendAjax();
                } else {
                    playErrorSound();
                    if (!current.data("valid-inputs")) {
                        toastr.error(i18next.t("form.required"));
                    }
                    if (has_wait_button) {
                        button.removeAttribute("data-kt-indicator");
                        button.disabled = false;
                    }
                }
            });
        } else {
            sendAjax();
        }
        return false;
    } else {
        sendAjax();
        return false;
    }
});

$("body").off("click", ".anchor-delete");
$("body").on("click", ".anchor-delete", function (e) {
    e.preventDefault();
    let = text = $(this).data("message") ?? "You can't go back!";
});

var price_plan = null;
$("input[name='plan']").change(function () {
    price_plan = $(this).data("price");
});
$("body").off("click", ".anchor-target");
$("body").on("click", ".anchor-target", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);
    let container_id = current.data("container");
    let container_id2 = current.data("container2");
    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    let class_container = current.data("class-container");
    if (!current.data("href")) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );

        hideLoader();
        return;
    }
    function sendAjaxTarget() {
        let headers = {};
        let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        $.ajax({
            type: "GET",
            headers: headers,
            url: current.data("href"),
            success: function (data) {
                if (data.message) {
                    playSuccessSound();
                    toastr.info(data.message);
                }

                if (data.redirect) {
                    setTimeout(function () {
                        window.location = data.redirect;
                    }, 20);
                }
                if (data.html === undefined) {
                    playErrorSound();
                    toastr.error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    hideLoader();
                    return;
                }

                if (has_controller) {
                    if (!window[controllerClass]) {
                        playErrorSound();
                        toastr.error(
                            "The controller " +
                                controllerClass +
                                " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );
                        hideLoader();
                        return false;
                    } else {
                        $(container_id).html(data.html);
                        window[controllerClass].init();
                    }
                } else {
                    if (class_container) {
                        $(class_container).html(data.html);
                    }
                    if (data.html) {
                        $(container_id).html(data.html);
                    }
                    if (data.html2) {
                        $(container_id2).html(data.html2);
                    }
                }
                if (data.page_display) {
                    $("#page_display").html(data.page_display);
                }
                hideLoader();

                $(".select2").select2();
            },

            error: function (xhr) {
                hideLoader();
                let response = xhr.responseJSON;
                playErrorSound();
                toastr.error(response.message);
            },
        });
    }

    if (current.data("has-confirm-message")) {
        hideLoader();
    } else {
        sendAjaxTarget();
    }
});

$("body").off("click", ".anchor-message");
$("body").on("click", ".anchor-message", function (e) {
    showLoader();
    e.preventDefault();
    let action = $(this).data("href");
    let method = $(this).data("method");

    if (!action) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let headers = {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    };
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: method,
        url: action,
        headers: headers,
        success: function (response) {
            if (response.message === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            } else {
                playSuccessSound();
                hideLoader();

                toastr.info(response.message);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        },
    });
});
$("body").off("change", ".select-target");
$("body").on("change", ".select-target", function (e) {
    e.preventDefault();

    let action = $(this).data("href");
    var current = $(this);
    action = action.replace("RPL", current.val());
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    showLoader();
    $.ajax({
        type: "get",
        url: action,
        headers: headers,
        success: function (response) {
            hideLoader();
            if (current.data("container") && response.html) {
                $("#" + current.data("container")).html(response.html);
                if (plugins.includes("validator") && KTModalNewTarget) {
                    KTModalNewTarget.init();
                }
            }
            if (response.message) {
                playSuccessSound();

                toastr.info(response.message);
            }

            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
        },
    });
});

$("body").off("click", ".upload-anchor");
$("body").on("click", ".upload-anchor", function (e) {
    e.preventDefault();
    $("#kt_modal_upload_target").modal("show");
    var current = $(this);
    var myDropzone = new Dropzone("#kt_dropzone_global", {
        url: current.attr("href"), // Set the url for your upload script location
        paramName: "file", // The name that will be used to transfer the file
        maxFilesize: 10, // MB
        addRemoveLinks: true,
        sending: function (file, xhr, formData) {
            formData.append(
                "_token",
                $('meta[name="csrf-token"]').attr("content")
            );
            // TODO : add the user proxy id
        },
        init: function () {
            thisDropzone = this;
            this.on("error", function (file, responseText) {
                $(".dz-preview:last .dz-error-message").text(
                    responseText.errors.file[0]
                );
            });
            this.on("success", function (file, responseText) {
                $(current.data("container")).html(responseText.html);
            });
        },
    });
});

$("body").off("change", ".toggle-recover");
$("body").on("change", ".toggle-recover", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    var current = $(this);
    let only_trashed = 0;
    if (current.is(":checked")) {
        only_trashed = 1;
    }
    action = action + "&only_trashed=" + only_trashed;
    showLoader();
    let headers = {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    };
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "POST",
        url: action,
        headers: headers,
        success: function (response) {
            hideLoader();
            if (current.data("container")) {
                $(current.data("container")).html(response.html);
            }
            //success(response.message);
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        },
    });
});

$("body").off("change", ".toggle-target");
$("body").on("change", ".toggle-target", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    var current = $(this);
    let data = {};

    if (current.data("value")) {
        data["param_type"] = current.data("value");
    }

    if (!action) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }

    showLoader();
    let headers = {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    };
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "POST",
        url: action,
        data: data,
        headers: headers,
        success: function (response) {
            hideLoader();
            if (current.data("container")) {
                $(current.data("container")).html(response.html);
            }
            if (response.message) {
                toastr.info(response.message);
            }
            //success(response.message);
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            alert_error(response.message);
            if (current.prop("checked")) {
                current.prop("checked", false);
            } else {
                current.prop("checked", true);
            }
        },
    });
});

$("body").off("click", ".anchor-modal-store");
$("body").on("click", ".anchor-modal-store", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);
    var dataClosest = current.data("closest");
    let modal_id = global_selector;
    if (current.data("modal-id")) {
        modal_id = current.data("modal-id");
    }

    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");

    if (!current.data("href")) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }

    $.ajax({
        type: "GET",
        headers: headers,
        url: current.data("href"),
        success: function (data) {
            if (data.html === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            }

            $(modal_id)
                .find(".modal-header")
                .find("h2")
                .find(".modal-icon")
                .empty()
                .html(current.data("modal-icon"));
            $(modal_id)
                .find(".modal-header")
                .find("h2")
                .find(".modal-title")
                .empty()
                .text(current.data("modal-title"));
            $(modal_id).find(".modal-content").find(".modal-body").empty();
            $(modal_id)
                .find(".modal-content")
                .find("#modal-kpitor-content")
                .html(data.html);

            if (has_controller) {
                if (!window[controllerClass]) {
                    playErrorSound();
                    toastr.error(
                        "The controller " +
                            controllerClass +
                            " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                    );
                    hideLoader();
                    return false;
                } else {
                    window[controllerClass].init();
                    $(modal_id).modal("show");
                }
            } else {
                $(modal_id).modal("show");
            }
            hideLoader();

            $(modal_id).on("submit", ".form-modal-store", function (e) {
                e.preventDefault();

                let current_form = $(this);
                let data = current_form.serializeArray();
                let action = current_form.attr("action");
                // let container_id = current_form.data("container");

                let has_controller = !current_form.data("no-controller");
                let controllerClass = current_form.data("controller");

                function sendAjax() {
                    let headers = {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    };
                    let XUSERID = $('meta[name="user-proxy-id"]').attr(
                        "content"
                    );
                    if (XUSERID) {
                        headers["X-USER-PROXY-ID"] = XUSERID;
                    }
                    showLoader();
                    $.ajax({
                        type: current_form.attr("method"),
                        url: action,
                        data: data,
                        headers: headers,
                        success: function (response) {
                            hideLoader();
                            current
                                .closest(dataClosest)
                                .replaceWith(response.html);

                            $(modal_id).modal("hide").hide();
                        },
                        error: function (response) {
                            hideLoader();
                            playErrorSound();

                            toastr.error(response.responseJSON.message);
                        },
                    });
                }

                if (has_controller) {
                    if (check_controller(controllerClass)) {
                        let validator = window[controllerClass].getValidator();
                        validator.validate().then(function (status) {
                            if (status == "Valid") {
                                sendAjax();
                            } else {
                                playErrorSound();

                                toastr.error(
                                    "veuillez remplir tous les champs obligatoires."
                                );
                            }
                        });
                    }
                    return false;
                } else {
                    sendAjax();
                    return false;
                }
            });
        },

        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();

            toastr.error(response.message);
        },
    });
});

$("body").off("click", ".anchor-search");
$("body").on("click", ".anchor-search", function (e) {
    e.preventDefault();
    showLoader();
    var current = $(this);

    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    if (!current.data("href")) {
        playErrorSound();

        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let modal_content = $("#global-modal-search")
        .find("#modal-search-content")
        .html();
    if ($.trim(modal_content) != "") {
        hideLoader();
        // $("#offcanvasEnd").addClass("show");
    } else {
        let headers = {};
        let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        $.ajax({
            type: "GET",
            url: current.data("href"),
            headers: headers,
            success: function (data) {
                console.log(data.html);
                if (data.html === undefined) {
                    playErrorSound();

                    toastr.error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    hideLoader();
                    return;
                }
                // $(".drawer-overlay").show();
                $("#global-modal-search")
                    .find(".offcanvas-header")
                    .find(".offcanvas-title")
                    .empty()
                    .text(
                        current.data("modal-title")
                            ? current.data("modal-title")
                            : "Advanced Search"
                    );
                $("#global-modal-search").find("#modal-search-content").empty();
                $("#global-modal-search")
                    .find("#modal-search-content")
                    .html(data.html);

                if (has_controller) {
                    if (!window[controllerClass]) {
                        playErrorSound();

                        toastr.error(
                            "The controller " +
                                controllerClass +
                                " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );
                        hideLoader();
                        return false;
                    } else {
                        window[controllerClass].init();
                    }
                }
                hideLoader();
            },

            error: function (xhr) {
                hideLoader();
                let response = xhr.responseJSON;
                playErrorSound();

                toastr.error(response.message);
            },
        });
    }
});

$("body").off("click", ".input-search");
$("body").on("keyup", ".input-search", function (e) {
    e.preventDefault();
    var current = $(this);
    let value = current.val();
    let container_id = current.data("container");
    let has_controller = !current.data("no-controller");
    let controllerClass = current.data("controller");
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }

    function sendAjax(value) {
        $.ajax({
            method: "get",
            url: current.data("href"),
            data: {
                value: value,
            },
            headers: headers,
            success: function (data) {
                if (data.html === undefined) {
                    alert_error(
                        "The data returned is not valid, please return a valid html in the data object"
                    );
                    return;
                }
                if (has_controller) {
                    if (!window[controllerClass]) {
                        alert_error(
                            "The controller " +
                                controllerClass +
                                " does not exist, or you didnt specify a controller. Othwerise, if this form doesnt need a controller, you can add attribute (data-no-controller=true) to the form."
                        );
                        return false;
                    } else {
                        if (!container_id) {
                            alert_error(
                                "You didnt specify a container , you can add attribute (data-container) to the form"
                            );
                            return;
                        }
                        $(container_id).html(data.html);
                        window[controllerClass].init();
                    }
                } else {
                    if (!container_id) {
                        alert_error(
                            "You didnt specify a container , you can add attribute (data-container) to the form"
                        );
                        return;
                    }
                    $(container_id).html(data.html);
                }
            },
            error: function (response) {},
        });
    }
    if (!current.data("href")) {
        alert_error(
            "Please specify the data-href attribute in the anchor element"
        );
        return;
    }
    // get data if value.length > 2
    if (value.length > 2) {
        $("#spinner").removeClass("d-none");
        setTimeout(function () {
            $("#spinner").addClass("d-none");
        }, 1000);
        sendAjax(value);
    }
    // get all if value.length < 2
    else {
        value = "";
        sendAjax(value);
    }
});
// start toggle search modal
$("#close_search").on("click", function () {
    $(".drawer-overlay").hide();
});
$("body").on("click", ".drawer-overlay", function () {
    $("#global-modal-search").removeClass("drawer-on");
    $(".drawer-overlay").hide();
});
// end toggle search modal

$("#kt_user_menu_dark_mode_toggle").change(function () {
    if ($(this).is(":checked")) {
        localStorage.setItem("darkMode", "enabled");
        $("#link-css").attr("href", "/assets/css/style.dark.bundle.css");
    } else {
        localStorage.setItem("darkMode", null);
        $("#link-css").attr("href", "/assets/css/style.bundle.css");
    }
});
$("body").on("change", ".change-status", function () {
    let status = $(this).val();

    let url = $(this).data("url");
    headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: url,
        headers: headers,
        data: {
            status: status,
        },
        success: function (response) {
            if (response.message) {
                toastr.info(response.message);
            }
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
            if (response.responseJSON.errors) {
                let errors = response.responseJSON.errors;
                $.each(errors, function (key, value) {
                    toastr.error(value);
                });
            }
        },
    });
});

$("body").off("submit", ".form-search");
$("body").on("submit", ".form-search", function (e) {
    e.preventDefault();
    let current = $(this);
    // let data = current.serializeArray();
    let action = current.attr("action");
    let container_id = current.data("container");
    let modal_id = global_selector;

    let has_controller = !current.data("no-controller");
    let has_DataCondition = current.data("hasdatacondition");

    let controllerClass = current.data("controller");
    var fd = current.serializeArray();

    function sendAjax() {
        showLoader();
        let headers = {};
        let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
        if (XUSERID) {
            headers["X-USER-PROXY-ID"] = XUSERID;
        }
        if (current.attr("method") == "post") {
            headers["X-CSRF-TOKEN"] = $('meta[name="csrf-token"]').attr(
                "content"
            );
        }
        $.ajax({
            method: current.attr("method"),
            url: action,
            headers: headers,
            data: fd,
            success: function (response) {
                hideLoader();
                if (response.message) {
                    playSuccessSound();
                    toastr.info(response.message);
                }
                if (response.redirect) {
                    setTimeout(function () {
                        window.location = response.redirect;
                    }, 2000);
                }
                if (container_id) {
                    if (has_DataCondition) {
                        $("#container_of_list_container").css(
                            "display",
                            "block"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: none !important"
                        );
                    }
                    $(container_id).html(response.html);

                    if (response.stats) {
                        $("#stats").html(response.stats);
                    }
                    if (response.extra_button) {
                        $("#extra-button").html(response.extra_button);
                    }
                    if (response.count != undefined) {
                        $("#paginate-count").text(response.count);
                    }
                    var rows = $("#table-list > tbody").children().length;
                    if (rows == 0) {
                        $("#container_of_list_container").css(
                            "display",
                            "none"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: flex !important"
                        );
                    } else {
                        $("#container_of_list_container").css(
                            "display",
                            "block"
                        );
                        $("#no_data_message").attr(
                            "style",
                            "display: none !important"
                        );
                    }

                    if (has_controller) {
                        window[controllerClass].init();
                    }
                }

                // Reinitialize all KT Menues
                $(".select_2").select2();

                $(modal_id).modal("hide").hide();
                files = [];
            },
            error: function (response) {
                hideLoader();
                playErrorSound();
                toastr.error(response.responseJSON.message);
            },
        });
    }

    sendAjax();
    return false;
});

$("body").off("change", ".paginate_target");
$("body").on("change", ".paginate_target", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    let container_id = $(this).data("container");
    let perPage = $(this).val();
    showLoader();
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: action,
        headers: headers,
        data: {
            perPage: perPage,
        },
        success: function (response) {
            hideLoader();
            if (container_id) {
                $(container_id).html(response.html);

                $(".select_2").select2();
            }
            if (response.message) {
                toastr.info(response.message);
            }
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
        },
    });
});
// let userProxyId = document.querySelector('meta[name="user-proxy-id"]')?.content;
// axios.defaults.headers.common['X-USER-PROXY-ID'] = userProxyId;

$("body").off("change", ".switch-ad-account");
$("body").on("change", ".switch-ad-account", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    let container_id = $(this).data("container");
    let account = $(this).val();
    showLoader();
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: action,
        headers: headers,
        data: {
            account: account,
        },
        success: function (response) {
            hideLoader();
            if (container_id) {
                $(container_id).html(response.html);
            }

            if (response.message) {
                toastr.info(response.message);
            }
            if (response.spent_cap) {
                $(".spend_cap").text(response.spent_cap);
            }

            if (response.status) {
                $("#alert_account").removeClass("d-none");
                if (response.status != 1 || response.status != 0) {
                    $(".alert_title").text("Announcement");
                    $(".alert_content").text("Your Account Is active");
                    $("#alert_account").addClass("alert-primary");
                } else {
                    $(".alert_title").text("A=nnouncement");
                    $(".alert_content").text("Your Account Is Inactive");
                    $("#alert_account").addClass("alert-warning");
                }
            }
            if (response.total_invoice) {
                $(".total_invoice").text(response.total_invoice);
            }
            if (response.total_due_invoice) {
                $(".total_due_invoice").text(response.total_due_invoice);
            }

            if (response.total_overdue_invoice) {
                $(".total_overdue_invoice").text(
                    response.total_overdue_invoice
                );
            }
            if (response.budget) {
                $(".budget").text(response.budget);
            }
            if (response.redirect) {
                setTimeout(function () {
                    window.location = response.redirect;
                }, 2000);
            }

            //
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
        },
    });
});

$("body").off("click", ".form-bulk");
$("body").on("click", ".form-bulk", function (e) {
    showLoader();
    e.preventDefault();
    let action = $(this).data("href");
    let method = $(this).data("method");
    let name = $("#name_file").val();
    if (name == "") {
        hideLoader();
        toastr.error("Please enter file name");
        return false;
    }
    if (!action) {
        playErrorSound();
        toastr.error(
            "Please specify the data-href attribute in the anchor element"
        );
        hideLoader();
        return;
    }
    let headers = {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    };
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: method,
        url: action,
        data: {
            name_file: name,
        },
        headers: headers,
        success: function (response) {
            if (response.message === undefined) {
                playErrorSound();
                toastr.error(
                    "The data returned is not valid, please return a valid html in the data object"
                );
                hideLoader();
                return;
            } else {
                playSuccessSound();
                hideLoader();

                toastr.info(response.message);
            }
        },
        error: function (xhr) {
            hideLoader();
            let response = xhr.responseJSON;
            playErrorSound();
            toastr.error(response.message);
        },
    });
});

$("body").off("change", ".switch-plan");
$("body").on("change", ".switch-plan", function (e) {
    e.preventDefault();
    let action = $(this).data("href");
    let container_id = $(this).data("container");
    let plan = $(this).val();
    showLoader();
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: action,
        headers: headers,
        data: {
            plan: plan,
        },
        success: function (response) {
            hideLoader();
            if (container_id) {
                $(container_id).html(response.html);
            }

            if (response.message) {
                toastr.info(response.message);
            }
            //
        },
        error: function (response) {
            hideLoader();
            playErrorSound();
            toastr.error(response.responseJSON.message);
        },
    });
});

$("body").on("click", ".message", function (e) {
    var ct = $(".countCard").val();
    if (ct == 0) {
        e.preventDefault();
        toastr.error($(this).data("message"));
    }
});

$("body").on("click", ".overlay", function (e) {
    if ($("#template-customizer").hasClass("template-customizer-open")) {
        $("#template-customizer").removeClass("template-customizer-open");
    }
    if ($("#search-dev-back").hasClass("overlay")) {
        $("#search-dev-back").removeClass("overlay");
    }
});

$("body").on("change", ".orderStatus", function () {
    showLoader();
    var id_status = $(this).val();
    var url = $(this).attr("data-url");
    var id_order = $(this).attr("data-order");
    let container_id = $(this).data("container");

    if (!id_status || !url || !id_order) {
        return false;
    }
    let headers = {};
    let XUSERID = $('meta[name="user-proxy-id"]').attr("content");
    if (XUSERID) {
        headers["X-USER-PROXY-ID"] = XUSERID;
    }
    $.ajax({
        type: "GET",
        url: url,
        data: {
            id_status: id_status,
            id_order: id_order,
        },
        headers: headers,
        success: function (response) {
            if (response.html) {
                $(container_id).html(response.html);
                $(".orderStatus").select2();
                // KTMenu.createInstances();
                hideLoader();
                toastr.success(response.message);
            }
        },
        error: function (response) {
            hideLoader();
            toastr.error(response.responseJSON.message);
        },
    });
});

$("body").on("click", ".close_custom_alert", function () {
    $(".custom_alert_container").addClass("d-none");
});

$("body").on("click", function () {
    $(".close_custom_alert").trigger("click");
});
