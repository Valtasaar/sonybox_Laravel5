@extends('layouts.app')

@section('content')
  <div class="col-md-8 mt">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Добавить организацию</h1>
      </div>

      <div class="panel-body">
        <form method="post" action="/" class="form-horizontal">
          <div class="form-group">
            <label for="city" class="col-sm-2 control-label">Город</label>

            <div class="col-sm-10">
              <input id="city" type="text"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Название</label>

            <div class="col-sm-10">
              <input id="name" type="text"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Описание</label>

            <div class="col-sm-10">
              <textarea id="description"
                        class="form-control service-reply-form__field red_bord_hover_reply-form"
                        rows="4"
                        required>
              </textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="site" class="col-sm-2 control-label">Адрес сайта</label>

            <div class="col-sm-10">
              <input id="site" type="text"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="tel" class="col-sm-2 control-label">Телефон</label>

            <div class="col-sm-10">
              <input id="tel" type="text"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail</label>

            <div class="col-sm-10">
              <input id="email" type="text"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button class="btn site-btn btn-lg js-add-serv-btn">Отправить</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection