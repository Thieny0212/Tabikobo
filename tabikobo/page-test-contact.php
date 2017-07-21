<?php /* Template Name: Test Contact */ ?>
<?php get_header(); ?>
<div id="contact">
  <div class="bg_contact">
    <div class="rowwidth">
      <div class="breadcrumb">
        <ul>
          <li><a href="<?php echo home_url(); ?>">トップ</a></li>
          <li><span><?php the_title(); ?></span></li>
        </ul>
      </div>
      <div class="title">
        <h1>CONTACT</h1>
        <h5>お問い合わせ</h5>
      </div>
    </div>
  </div>
  <div class="content">
    <?php 
      //global $post;
      if ( have_posts() ): while (have_posts()) : the_post(); 
      ?>
    <article id="content-<?php the_ID(); ?>" <?php post_class(); ?>>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/step-contactus.js"></script>
      <div class="article_page_content">
        <div class="article_page_content_box">
          <div class="contact_step">
            <img id="contact_step_1" src="<?php echo get_template_directory_uri(); ?>/images/step1.png">
            <img id="contact_step_2" style="display: none;" src="<?php echo get_template_directory_uri(); ?>/images/step2.png">
            <img id="contact_step_3" style="display: none;" src="<?php echo get_template_directory_uri(); ?>/images/step3.png">
          </div>
          <div id="content_form">
            <!-- Form Contact Form -->
            <?php the_content(); ?>
            <!-- Form Contact Confirm -->
            <div id="contact_confirm">
              <div class="confirm_row confirm_line">
                <div class="confirm_left"><span>必須</span>お名前</div>
                <div class="confirm_right">
                  <p id="infor1"></p>
                </div>
              </div>
              <div class="confirm_row confirm_line">
                <div class="confirm_left"><span style="visibility: hidden;">必須</span>御社名</div>
                <div class="confirm_right">
                  <p id="infor2"></p>
                </div>
              </div>
              <div class="confirm_row confirm_line">
                <div class="confirm_left"><span>必須</span>メールアドレス</div>
                <div class="confirm_right">
                  <p id="infor3"></p>
                </div>
              </div>
              <div class="confirm_row confirm_line">
                <div class="confirm_left"><span style="visibility: hidden;">必須</span>電話番号</div>
                <div class="confirm_right">
                  <p id="infor4"></p>
                </div>
              </div>
              <div class="confirm_row confirm_line">
                <div class="confirm_left"><span>必須</span>お問い合わせ内容</div>
                <div class="confirm_right">
                  <p id="infor5"></p>
                </div>
              </div>
            </div>
            <!-- Form Contact Complete -->
            <div id="contact_complete">
              <p class="title_complete">お問い合わせ完了</p>
              <p class="content_complete">この度はお問い合わせいただきありがとうございました。通常１〜２営業日以内に回答いたします。</p>
              <p class="content_complete">Hotmailなどのフリーメールサービスをご利用の場合、返信されたメールが迷惑メールフォルダに届いている場合がございますので、ご確認ください。
              </p>
            </div>

						<button id="btn_confirm" onclick="form_confirm();">入力内容を確認する &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
						<button id="btn_back" onclick="form_back();"><i class="fa fa-caret-left" aria-hidden="true"></i>&nbsp; 戻る</button>
            </button>
            <button id="btn_send">送信する &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
            </button>
            <a href="<?php echo home_url(); ?>"><button id="btn_complete"">トップページへ戻る &nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i>
            </button></a>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </article>
  </div>
</div>
<?php get_footer(); ?>