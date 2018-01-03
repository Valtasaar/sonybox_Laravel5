@extends('pages.city')

@section('services')
  @foreach ($city_services as $service)
    <div class="s__item clearfix js-serv-items">
      <div class="col-md-4 s__item__img">
        <a href="{{ $service->url }}">
          <div class="s__item__img s__item__img__child" style="background-image: url({{ asset('storage/logos/'.$service->logo) }})"></div>
        </a>
      </div>

      <div class="s__item__img_fix col-md-4"></div>
      <div class="s__item__cont col-md-6">
        <!-- Название и тип -->
        <div class="s__item__name">
          <a href="{{ $service->url }}"><span class="s__item__name__title red_link_hover">{{ $service->name }}</span></a>
          <span class="s__item__name__type">{{ $service->sc_type }}</span>
        </div>
        <!-- График работы -->
        <div class="s__item__address clearfix">
          <span class="s__item__address_at">{{ $service->address }}</span>
          <span class="s__item__address_wt">
            пн.-пт. {{ isset(json_decode($service->work_time)->mon_fr) ? json_decode($service->work_time)->mon_fr : 'Выходной' }}<br>
            сб. {{ isset(json_decode($service->work_time)->sat) ? json_decode($service->work_time)->sat : 'Выходной' }}<br>
            вс. {{ isset(json_decode($service->work_time)->sun) ? json_decode($service->work_time)->sun : 'Выходной' }}<br>
          </span>
        </div>
        <!-- Телефоны -->
        <div class="s__item__tel clearfix">
          <button class="s__item__tel_butt red_hover">Показать телефон</button>
          <input type="text" name="show-tel" value="{{ json_decode($service->tel)[0] }}" hidden>
          <span class="s__item__tel_text">Пожалуйста,<br>  звоните перед визитом</span>
        </div>
      </div>

      <a href="/service-comments/">
        <div class="s__item__info col-md-2">
          <!-- Рейтинг -->
          <div class="s__item__rating ser_rating">
            <span class="s__item__rating_icon"></span>
            <span class="s__item__rating">{{ $service->rating or 'Оценок нет' }}</span>
          </div>
          <!-- Ссылка на отзывы -->
          <div class="s__item__rew">

            <input name="service_id" type="text" value="" hidden>
          </div>
        </div>
      </a>

      <div class="s__item__more">
        <a href="{{ $service->url }}" title="">Подробнее</a>
      </div>
    </div>
  @endforeach
@endsection