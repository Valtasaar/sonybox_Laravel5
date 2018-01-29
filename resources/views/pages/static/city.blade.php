@extends('layouts.app')

@section('content')

  <div class="search__loader"></div>

  @include('includes.aside_search')

  <div class="col-md-9">
    <div class="panel panel-default mt">
      <div class="panel-heading">
        <div class="s__item__title">
          <h1>Сервисные центры SONY в Городе</h1>
        </div>
      </div>

      <div class="panel-body">
        <div class="search-items">
          <div class="search-items-res">
            @include('includes.services')
          </div>

          <div class="pos_rel">
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
  </div>

@endsection
