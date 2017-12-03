<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo( 'name' );?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");

</script>
  </head>
  <body <?php body_class( );?>>
<!-- HEader slider -->
    <div class="container-fluid">
<div class="wraopper">
<?php get_template_part( 'slider', 'header' ); ?>
</div>
</div>


  <nav class="navbar sticky-top navbar-expand-xl navbar-dark bg-dark ">
    <a class="navbar-brand" href="#">
          <img src="<?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              echo $image[0];?>"
     class="d-inline-block align-top" alt="">

    </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label=
          <?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-center cl-effect-9" id="navbar-content">
              <?php
              wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'menu_id'        => 'primary-menu',
                  'container'      => false,
                  'depth'          => 2,
                  'menu_class'     => 'navbar-nav nav',
                  'walker'         => new Bootstrap_NavWalker(),
                  'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
              ) );
              ?>
          </div>
  </nav>
