@extends('layouts.app')

@section('content')
  <div class="col-md-8 mt">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1>Форма обратной связи</h1>
      </div>

      <div class="panel-body">
        <form method="post" action="/" class="form-horizontal">
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Ваш e-mail</label>

            <div class="col-sm-10">
              <input id="email" type="email"
                     class="form-control form-control_border"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="subject" class="col-sm-2 control-label">Тема сообщения</label>

            <div class="col-sm-10">
              <input id="subject"
                     class="form-control form-control_border"
                     type="text"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Сообщение</label>

            <div class="col-sm-10">
              <textarea id="message"
                        class="form-control form-control_border"
                        rows="4"
                        required>
              </textarea>
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