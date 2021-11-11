<header class="banner">
  <div class="container d-flex justify-content-between align-items-center my-3">
    <a class="brand" href="{{ home_url('/') }}">
      {!! App::brandLogo() !!}
      <span class="ml-2">{{ get_bloginfo('name', 'display') }}</span>
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
