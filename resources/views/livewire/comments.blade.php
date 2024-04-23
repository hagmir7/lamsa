<div class="lynessa-blog style-01">
    <div class="blog-list-grid row auto-clear equal-container better-height row">
        @foreach ($comments as $comment)
        <div class="col-md-4">
            <article>
                <div class="post-inner blog-grid">
                    <div class="post-thumb">
                        <img src="{{ Storage::url($comment->image) }}" class="img-responsive attachment-370x330 size-370x330 border"
                            alt="img" style="height: 400px; object-fit: cover;">
                    </div>
                    <div class="post-content">
                        <div class="post-info equal-elem mt-2" style="height: 136px;">
                            <h2 class="post-title">{{ $comment->full_name }}</h2>
                            {{ $comment->description }}
                        </div>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>
