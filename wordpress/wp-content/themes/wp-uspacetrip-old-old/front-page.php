<?php /* Template Name: Front Page */ get_header(); ?>

    <article id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h5><?php the_field('about_title'); ?></h5>
            <?php the_field('about_content'); ?>
          </div>
        </div><!-- row -->
        <div class="row">
          <div id="how-it-looks" class="how-it-looks col-md-12">
            <h4><span>how it looks</span></h4>
            <span class="iframe">
              <iframe src="https://www.youtube.com/embed/esCL6L-og9E?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </span>
          </div><!-- /#how-it-looks.how-it-looks -->
        </div><!-- /.row -->
      </div><!-- container -->
    </article><!-- about -->

    <article id="how-to-use-it" class="how-to-use-it">
      <div class="container">
        <div class="row">
          <h4 class="col-md-12">How to use it</h4>

          <div class="row tabs-header" id="tabs">
            <?php if( have_rows('tabs') ): ?>

              <?php while( have_rows('tabs') ): the_row();

                // vars
                $title = get_sub_field('tab_header_title');
                $id = get_sub_field('tab_id');
                $size = get_sub_field('tab_sized');
              ?>

                <div class="col-md-<?php echo $size; ?>">
                  <a href="#<?php echo $id; ?>" class="tab-link "><span><?php echo $title; ?></span></a>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>
          </div><!-- row tabs-header -->

          <div class="row tabs-container">

            <?php if( have_rows('tabs') ): ?>
              <?php while( have_rows('tabs') ): the_row();
                // vars
                $subtitle = get_sub_field('tab_subtitle');
                $id = get_sub_field('tab_id');
                $size = get_sub_field('tab_sized');
                $image = get_sub_field('tab_image');
                $content = get_sub_field('tab_content');
              ?>

              <div class="tabContent col-md-12" id="<?php echo $id; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <h5><?php echo $subtitle; ?></h5>
                <p><?php echo $content; ?></p>
                <a href="#" class="btn btn-blue">Place your order</a>
              </div><!-- tabContent col-md-12 <?php echo $id; ?> -->
              <?php endwhile; ?>
            <?php endif; ?>

          </div><!-- tabs-container -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /#how-to-use-it.how-to-use-it -->

    <article class="how-we-do-it" id="how-we-do-it">
      <div class="container">
        <div class="row">
          <h4 class="col-md-12">how we do it</h4>
          <ul class="col-md-12">

            <?php if( have_rows('how_we_do_it') ): ?>
              <?php while( have_rows('how_we_do_it') ): the_row();
                // vars
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $image = get_sub_field('ico');
              ?>

              <li>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <h5><?php echo $title; ?></h5>
                <?php echo $content; ?>
              </li>

              <?php endwhile; ?>
            <?php endif; ?>

          </ul>
          <h6>Do you have any questions?</h6>
          <a href="" class="btn btn-white btn-place-order">Place your order</a>
        </div><!-- row -->
      </div><!-- /.container -->
    </article><!-- /#how-we-do-it.how-we-do-it -->

    <article class="what-are-people-saying" id="what-are-people-saying">
      <div class="container">
        <div class="row">
          <h4 class="col-md-12">What are people saying about us</h4>

            <?php if( have_rows('reviews') ): ?>
              <?php while( have_rows('reviews') ): the_row();
                // vars
                $name = get_sub_field('author');
                $content = get_sub_field('review');
              ?>
                <div class="col-md-4 what-are-people-block">
                  <?php echo $content; ?>
                  <span class="author"><?php echo $name; ?></span>
                </div><!-- what-are-people-block -->
              <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /#what-are-people-saying.what-are-people-saying -->

    <article class="technical-specifications" id="technical-specifications">
      <div class="container">
        <div class="row">
          <h4 class="col-md-12">technical specifications</h4>
          <div class="technical-specifications-content">
            <?php the_field('tech_content'); ?>
          </div><!-- /.technical-specifications-content -->
        </div><!-- row -->
      </div><!-- /.container -->
    </article><!-- /#technical-specifications.technical-specifications -->

    <article class="find-uspacetrip">
      <div class="container">
        <div class="row">
          <h3 class="col-md-12">
            Find Out More About Stratospher Launch.<br><a href="#">#uspacetrip</a> community <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-official"></i></a> <a href="#"><i class="fa fa-youtube-square"></i></a> <a href="#"><i class="fa fa-instagram"></i></a>
          </h3>
        </div><!-- row -->
      </div><!-- /.container -->
    </article><!-- /.find-uspacetrip -->

    <article class="contact-us" id="contact-us">
      <div class="container container-contacts">
        <div class="row">
          <h4>Contact Us</h4>
          <?php echo do_shortcode( '[contact-form-7 id="29" title="home-contact-form"]' ); ?>
        </div><!-- /.row -->
      </div><!-- /.container container-contacts -->
      <div id="terms" class="container container-terms">
        <h5><span>Terms & Conditions</span></h5>
        <?php the_field('terms_content'); ?>
      </div><!-- /.container container-terms -->
    </article><!-- /#contact-us.contact-us -->

  </section><!-- /section -->
</div><!-- /wrapper -->

<footer role="contentinfo">
  <div class="inner">
    <div class="copyright">
      <ul>
        <li>uspacetrip</li>
        <li><a href="mailto:hello@uspacetrip.com">hello@uspacetrip.com</a></li>
      </ul>
      <p><?php the_field('footer_copy_text'); ?></p>
    </div><!-- /copyright -->

    <div class="paymathods">
      <p>Secure payments with 100% money back guarantee</p>
    </div><!-- /.paymathods -->

    <div class="maillist">
      <a class="btn order-free">
        Order Free Stratosphere<br>Launch Guide <span>By Mail</span>
      </a><!-- /.order-free -->
      <p>&copy; <?php echo date("Y"); ?> uspacetrip. All Rights Reserved.</p>
    </div><!-- /.maillist -->

  </div><!-- /.inner -->
</footer><!-- /footer -->

  <div class="modal-bg"></div><!-- /.modal-bg -->
  <div class="modal-container">
    <h6><span>Order free</span> stratosphere guide by mail</h6>
    <h5>Get Your FREE Copy Now</h5>
    <?php echo do_shortcode( '[contact-form-7 id="64" title="modal-form"]' ); ?>
    <p><i class="fa fa-lock"></i>Your information will never be shared with any other third party</p>
    <i class="fa fa-times"></i>
  </div><!-- /.modal-container -->

  <?php wp_footer(); ?>

</body>
</html>
