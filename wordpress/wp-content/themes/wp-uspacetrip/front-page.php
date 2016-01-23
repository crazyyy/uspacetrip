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
            <span class="iframe"></span>
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
          <div class="col-md-4 what-are-people-block">
            <p>You should have seen eyes of our boss when video started to play! At that moment our team realized that was exactly the present he want. Thanks Uspasetrip for possibility to amaze with a gift even a person who is so hard to please.</p>
            <span class="author">Nikol</span>
          </div><!-- what-are-people-block -->
          <div class="col-md-4 what-are-people-block">
            <p>Thanks for a good work, guys! Cool video, excelent shooting, nice team and great idea of such service for sure.</p>
            <span class="author">Brian R.</span>
          </div><!-- what-are-people-block -->
          <div class="col-md-4 what-are-people-block">
            <p>I am a member of a small team of IT professionals. Recently we launched an e-commerce start-up and we believe our product is a game changer! The statuette of our CEO proudly holding our logo while flying in the stratosphere was a bright beginning of our project! Thank you, Uspasetrip!</p>
            <span class="author">Alberto, Madrid.</span>
          </div><!-- what-are-people-block -->
          <div class="col-md-4 what-are-people-block">
            <p>This team has made a video for our company and coped with this task perfectly! Тhere were small offsets on terms, but such result worth the wait. Good quality and sociable team is a recipe for success.</p>
            <span class="author">Vladislav</span>
          </div><!-- what-are-people-block -->
          <div class="col-md-4 what-are-people-block">
            <p>It was my parents 30th wedding anniversary, I looked for a present for a couple of weeks but everything seemed so trivial, then I came across Uspacetrip! The video was absolutely mind blowing, I couldn't hope to find a better present! Thank you guys! Keep up the great work!</p>
            <span class="author">John, London</span>
          </div><!-- what-are-people-block -->
          <div class="col-md-4 what-are-people-block">
            <p>We decided to present such impression to our friends for their merriage. We translate video on a big screen when all guests were present. The reaction was amazing! Everyone liked, but the main thing that the newlyweds were happy too. Uspacetrip, don’t stop helping impress :)</p>
            <span class="author">Kira & Steve</span>
          </div><!-- what-are-people-block -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </article><!-- /#what-are-people-saying.what-are-people-saying -->

    <article class="technical-specifications" id="technical-specifications">
      <div class="container">
        <div class="row">
          <h4 class="col-md-12">technical specifications</h4>
          <div class="technical-specifications-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div><!-- /.technical-specifications-content -->
        </div><!-- row -->
      </div><!-- /.container -->
    </article><!-- /#technical-specifications.technical-specifications -->

    <article class="find-uspacetrip">
      <div class="container">
        <div class="row">
          <h3 class="col-md-12">
            Find Out More About Stratospher Launch.<br><a href="#">#uspacetrip</a> community <a href="#"><i class="fa fa-facebook-official"></i></a> <a href="#"><i class="fa fa-youtube-square"></i></a> <a href="#"><i class="fa fa-instagram"></i></a>
          </h3>
        </div><!-- row -->
      </div><!-- /.container -->
    </article><!-- /.find-uspacetrip -->

    <article class="contact-us" id="contact-us">
      <div class="container">
        <div class="row">
          <h4>Contact Us</h4>
          <form action="">
            <input type="text" name="name" placeholder="Your name">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="text" name="phone" placeholder="Mobile">
            <input type="text" name="messege" placeholder="Your message">
            <input type="submit" value="Send messege">
          </form>
        </div><!-- /.row -->
      </div><!-- /.container -->
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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id.</p>
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
  <?php wp_footer(); ?>
</body>
</html>
