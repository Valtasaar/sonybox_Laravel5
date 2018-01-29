@extends('layouts.app')

@section('content')
  <div class="panel panel-default mt">
    <div class="panel-heading">
      <h1>Контакты</h1>
    </div>

    <div class="panel-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem fugiat labore magnam optio quisquam repellat
        sint tempora voluptatem. Ad dolor dolorem eum illo iusto laborum non porro quos temporibus vero?</p>
      <p>Adipisci beatae debitis doloremque esse eum exercitationem explicabo facere fugiat hic nesciunt nisi odit
        officia quaerat quidem quis quod quos sapiente, similique sint tenetur. Architecto commodi fugit molestiae sit
        sunt.</p>

      <div class="col-md-8">
        <div class="ser__rew__title">
          <h2>Форма обратной связи</h2>
        </div>

        <form method="post" action="/" class="form-horizontal">
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">ВАШ E-MAIL</label>

            <div class="col-sm-10">
              <input id="email" type="email"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="subject" class="col-sm-2 control-label">ТЕМА СООБЩЕНИЯ</label>

            <div class="col-sm-10">
              <input id="subject"
                     class="form-control service-reply-form__field red_bord_hover_reply-form"
                     type="text"
                     required>
            </div>
          </div>

          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">СООБЩЕНИЕ</label>

            <div class="col-sm-10">
              <textarea id="message" maxlength="60"
                        class="form-control service-reply-form__field red_bord_hover_reply-form"
                        rows="4"
                        required>
              </textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button class="btn site-btn">Отправить</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection