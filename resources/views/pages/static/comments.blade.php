@extends('layouts.app')

@section('content')
  <div class="panel panel-default mt">
    <div class="panel-heading">
      <h1>
        Отзывы о
        <span>
            Сервис s
            <?php /*echo get_the_title($service_id) */?>
          </span>

        <span>
          Город
          <?php /*echo fw_get_db_post_option($service_id, 'city') */?>
        </span>

        <span>(3)</span>
      </h1>
    </div>

    <div class="panel-body">
      <div class="ser__rews__item clearfix">
        <div class="ser__rew__user col-md-3">
          <div class="ser__rew__user__img">
            <img src="/img/fotos/user.jpg">
          </div>

          <div class="ser__rew__user__name"><?php /*echo $comment->comment_author */?>User Name</div>
        </div>

        <div class="ser__rew__cont col-md-9">
          <div class="s__item__rating ser__rew__rat">
            <span class="s__item__rating_icon"></span>
            <span class="ser_rating__val s__item__rating">
            4.5
                <?php /*echo get_comment_meta($comment->comment_ID, 'comm_rat', true) */?>
          </span>
          </div>

          <div class="ser__rew__date">10 декабря
            2017<?php /*echo date("j ".$month[ date('n',strtotime($comment->comment_date)) - 1]." Y G:i", strtotime($comment->comment_date)); */?></div>

          <div class="ser__rew__text">
            <div class="ser__rew__text__adv js-comm-text-adv">
              <div class="ser__rew__text__subt">Достоинства:</div>
              <p class="js-adv-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla praesentium vel? Aliquid
                aspernatur cupiditate dolorum, eum, explicabo ipsa iure minus officia provident quidem quisquam, rem
                sunt totam veritatis voluptatum!
                  <?php /*echo get_comment_meta($comment->comment_ID, 'adv')[0] */?>
              </p>
            </div>

            <div class="ser__rew__text__disadv js-comm-text-disadv">
              <div class="ser__rew__text__subt">Недостатки:</div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid aspernatur assumenda at
                consequatur debitis distinctio fuga fugiat inventore ipsam minus nisi obcaecati, placeat ratione rem
                repudiandae sed similique sint.
                  <?php /*echo get_comment_meta($comment->comment_ID, 'dis-adv')[0] */?>
              </p>
            </div>
          </div>

          <div class="ser__rews__item__show js-show-comm-text">Показать полностью</div>
          <div class="ser__rews__item__show js-hide-comm-text">Свернуть</div>
        </div>
      </div>

      <div class="ser__rews__item clearfix">
        <div class="ser__rew__user col-md-3">
          <div class="ser__rew__user__img">
            <img src="/img/fotos/user.jpg">
          </div>

          <div class="ser__rew__user__name"><?php /*echo $comment->comment_author */?>User Name</div>
        </div>

        <div class="ser__rew__cont col-md-9">
          <div class="s__item__rating ser__rew__rat">
            <span class="s__item__rating_icon"></span>
            <span class="ser_rating__val s__item__rating">
            4.5
                <?php /*echo get_comment_meta($comment->comment_ID, 'comm_rat', true) */?>
          </span>
          </div>

          <div class="ser__rew__date">10 декабря
            2017<?php /*echo date("j ".$month[ date('n',strtotime($comment->comment_date)) - 1]." Y G:i", strtotime($comment->comment_date)); */?></div>

          <div class="ser__rew__text">
            <div class="ser__rew__text__adv js-comm-text-adv">
              <div class="ser__rew__text__subt">Достоинства:</div>
              <p class="js-adv-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla praesentium vel? Aliquid
                aspernatur cupiditate dolorum, eum, explicabo ipsa iure minus officia provident quidem quisquam, rem
                sunt totam veritatis voluptatum!
                  <?php /*echo get_comment_meta($comment->comment_ID, 'adv')[0] */?>
              </p>
            </div>

            <div class="ser__rew__text__disadv js-comm-text-disadv">
              <div class="ser__rew__text__subt">Недостатки:</div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid aspernatur assumenda at
                consequatur debitis distinctio fuga fugiat inventore ipsam minus nisi obcaecati, placeat ratione rem
                repudiandae sed similique sint.
                  <?php /*echo get_comment_meta($comment->comment_ID, 'dis-adv')[0] */?>
              </p>
            </div>
          </div>

          <div class="ser__rews__item__show js-show-comm-text">Показать полностью</div>
          <div class="ser__rews__item__show js-hide-comm-text">Свернуть</div>
        </div>
      </div>

      <div class="ser__rews__item clearfix">
        <div class="ser__rew__user col-md-3">
          <div class="ser__rew__user__img">
            <img src="/img/fotos/user.jpg">
          </div>

          <div class="ser__rew__user__name"><?php /*echo $comment->comment_author */?>User Name</div>
        </div>

        <div class="ser__rew__cont col-md-9">
          <div class="s__item__rating ser__rew__rat">
            <span class="s__item__rating_icon"></span>
            <span class="ser_rating__val s__item__rating">
            4.5
                <?php /*echo get_comment_meta($comment->comment_ID, 'comm_rat', true) */?>
          </span>
          </div>

          <div class="ser__rew__date">10 декабря
            2017<?php /*echo date("j ".$month[ date('n',strtotime($comment->comment_date)) - 1]." Y G:i", strtotime($comment->comment_date)); */?></div>

          <div class="ser__rew__text">
            <div class="ser__rew__text__adv js-comm-text-adv">
              <div class="ser__rew__text__subt">Достоинства:</div>
              <p class="js-adv-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nulla praesentium vel? Aliquid
                aspernatur cupiditate dolorum, eum, explicabo ipsa iure minus officia provident quidem quisquam, rem
                sunt totam veritatis voluptatum!
                  <?php /*echo get_comment_meta($comment->comment_ID, 'adv')[0] */?>
              </p>
            </div>

            <div class="ser__rew__text__disadv js-comm-text-disadv">
              <div class="ser__rew__text__subt">Недостатки:</div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid aspernatur assumenda at
                consequatur debitis distinctio fuga fugiat inventore ipsam minus nisi obcaecati, placeat ratione rem
                repudiandae sed similique sint.
                  <?php /*echo get_comment_meta($comment->comment_ID, 'dis-adv')[0] */?>
              </p>
            </div>
          </div>

          <div class="ser__rews__item__show js-show-comm-text">Показать полностью</div>
          <div class="ser__rews__item__show js-hide-comm-text">Свернуть</div>
        </div>
      </div>
      <input name="post_id" type="text" value="<?php /*echo $service_id */?>" hidden>
    </div>
  </div>


  <div class="row">
    <div class="col-md-8 mt">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2>
            <span>Оставить отзыв </span>

            <span>
                  Сервис
                <?php /*echo get_the_title($service_id) */?>
                </span>

            <span>
                  (
                  Город
                <?php /*echo fw_get_db_post_option($service_id, 'city') */?>
              )
                </span>
          </h2>
        </div>

        <div class="panel-body">
          <form method="post" action="/" class="form-horizontal">
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Ваше имя</label>

              <div class="col-sm-10">
                <input id="name" type="text"
                       class="form-control form-control_border"
                       required>
              </div>
            </div>

            <div class="form-group">
              <label for="tel" class="col-sm-2 control-label">Ваш телефон</label>

              <div class="col-sm-10">
                <input id="tel"
                       class="form-control form-control_border"
                       type="text"
                       required>
              </div>
            </div>

            <div class="form-group">
              <label for="adv" class="col-sm-2 control-label">Достоинства</label>

              <div class="col-sm-10">
                    <textarea id="adv"
                              class="form-control form-control_border"
                              rows="4"
                              required>
                    </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="disadv" class="col-sm-2 control-label">Недостатки</label>

              <div class="col-sm-10">
                    <textarea id="disadv"
                              class="form-control form-control_border"
                              rows="4"
                              required>
                    </textarea>
              </div>
            </div>

            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Качество ремонта</label>

              <div class="btn-group col-sm-10" data-toggle="buttons">
                <label class="btn">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked> 1
                </label>
                <label class="btn">
                  <input type="radio" name="options" id="option2" autocomplete="off"> 2
                </label>
                <label class="btn">
                  <input type="radio" name="options" id="option3" autocomplete="off"> 3
                </label>
                <label class="btn active">
                  <input type="radio" name="options" id="option3" autocomplete="off"> 4
                </label>
                <label class="btn">
                  <input type="radio" name="options" id="option3" autocomplete="off"> 5
                </label>
              </div>
            </div>

            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Отношение к клиенту</label>

              <div class="btn-group col-sm-10" data-toggle="buttons">
                <label class="btn">
                  <input type="radio" name="options" id="option1" autocomplete="off" checked> 1
                </label>
                <label class="btn">
                  <input type="radio" name="options" id="option2" autocomplete="off"> 2
                </label>
                <label class="btn">
                  <input type="radio" name="options" id="option3" autocomplete="off"> 3
                </label>
                <label class="btn active">
                  <input type="radio" name="options" id="option3" autocomplete="off"> 4
                </label>
                <label class="btn">
                  <input type="radio" name="options" id="option3" autocomplete="off"> 5
                </label>
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
  </div>

@endsection
