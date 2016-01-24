<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
  <!-- meta -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header id="header" role="banner" onload="setWindowSize()">

    <div class="header-menu">

      <div class="logo">
        <?php if ( is_front_page() && is_home() ){ } else { ?>
          <a href="<?php echo home_url(); ?>">
            <?php  } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
            <?php if ( is_front_page() && is_home() ){
            } else { ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->

      <div class="social">
        <li><a href="<?php the_field('facebook'); ?>" rel="nofollow" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
        <li><a href="<?php the_field('youtube'); ?>" rel="nofollow" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
        <li><a href="<?php the_field('instagram'); ?>" rel="nofollow" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </div>

      <nav class="nav" role="navigation">
        <?php wpeHeadNav(); ?>
      </nav><!-- /nav -->

      <a href="#" class="btn btn-blue btn-head-order">Place your order</a>
      <span class="paypall"></span>
    </div><!-- /.header-menu -->

    <div class="stars"></div>
    <div class="earth"></div>
    <div class="twinkling"></div>

    <div class="inner">
      <div class="owl-carousel">

        <?php if( have_rows('slider') ): ?>
          <?php while( have_rows('slider') ): the_row();
            // vars
            $title = get_sub_field('slide_title');
            $content = get_sub_field('slide_content');
            $image = get_sub_field('slide_image');
          ?>
            <div class="item">
              <h6><?php echo $title; ?></h6>
              <p><?php echo $content; ?></p>
              <span class="container-img">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
              </span>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div><!-- owl-carousel -->
      <a href="#" class="btn btn-white btn-head-recall">Сall back</a>

      <div class="big-order-form">
        <?php echo do_shortcode( '[contact-form-7 id="63" title="bigforms"]' ); ?>
      </div><!-- /.big-order-form -->

    </div><!-- /.inner -->
  </header><!-- /header -->

  <section role="main">
