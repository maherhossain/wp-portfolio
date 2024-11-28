<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags -->
  <meta name="description" content="Maher Hossain, a freelance web developer in Bangladesh specializing in PHP, Laravel, and WordPress development.">
  <meta name="keywords" content="Web Developer in Bangladesh, PHP Developer, Laravel Developer, WordPress Developer, Freelance Web Developer Bangladesh, PHP Developer Bangladesh, Laravel Developer Bangladesh, WordPress Developer Bangladesh">
  <meta name="author" content="Maher Hossain">

  <!-- Handle canonical issues for entire website -->
  <?php
  switch (true) {
      // Case for the homepage
    case is_home() || is_front_page():
      echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '" />';
      break;

      // Case for paginated content
    case is_paged():
      echo '<link rel="canonical" href="' . esc_url(get_pagenum_link(1)) . '" />';
      break;

      // Case for single posts and pages
    case is_single() || is_page():
      echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '" />';
      break;

      // Case for category, tag, and archive pages
    case is_category() || is_tag() || is_archive():
      echo '<link rel="canonical" href="' . esc_url(get_term_link(get_queried_object())) . '" />';
      break;

      // Fallback case for any other type of page
    default:
      echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '" />';
      break;
  }
  ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Website Header -->
  <header>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg bg-dark d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 pb-4">
      <div class="container">
        <a class="navbar-brand text-light" href="<?php echo site_url() ?>">Maher Hossain</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <?php
          wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container' => false,
            'menu_class' => 'navbar-nav m-auto mb-2 mb-lg-0',
            'fallback_cb' => false,
            'depth' => 2,
            'walker' => new WP_Bootstrap_Navwalker(), // Using the custom Bootstrap walker
          ));
          ?>



          <!-- <ul class="navbar-nav m-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="<?php echo site_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Web Design & Development</a></li>
                <li><a class="dropdown-item" href="#">eCommerce Development</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Search Engine Optimization</a></li>
                <li><a class="dropdown-item" href="#">PPC Campaign</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Contact</a>
            </li>
          </ul> -->
        </div>

        <div class="text-end">
          <a href="tel:+8801799664170" class="btn btn-outline-primary me-2">
            +8801799664170</a>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div>
    </nav>