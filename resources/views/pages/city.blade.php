<!doctype html>
<html lang="ru">
@include('layouts.head')
<body>
@include('layouts.header')

<div class="container site-content">
  <div class="search__loader"></div>

  @include('pages.parts.aside_search')

  @include('pages.parts.sorting')

  <div class="col-md-8">
    <div class="sorting-fix"></div>

    <div class="search-items">
      <div class="search-items-res">
        <div class="s__item__title">
          <h1>Сервисные центры SONY</h1>
        </div>

        @yield('services')
      </div>

      <div style="position: relative">
          <div class="city__map__loader">loading...</div>
          <div id="cityMap"></div>
      </div>

      <br>
      <div class="city-title">
        {{--the_content()--}}
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')
</body>
</html>