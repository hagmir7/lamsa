<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
    <a class="lynessa-menu-item-title" title="Pages" href="#">Catégories</a>
    <span class="toggle-submenu"></span>
    <ul role="menu" class="submenu">
        @foreach ($categories as $category)
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-987">
                <a class="lynessa-menu-item-title" title="{{ $category->name }}" href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</li>
