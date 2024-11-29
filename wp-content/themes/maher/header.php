<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="Content-Language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags -->
  <meta name="description" content="<?php
                                    if (get_field('meta_description')) {
                                      the_field('meta_description');
                                    } else {
                                      echo wp_trim_words(get_the_content(), 150, '...');
                                    }
                                    ?>
  ">
  <meta name="keywords" content="<?php the_field('meta_keywords'); ?>">
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
  <!-- Handle Title  -->
  <title><?php
          if (get_field('meta_title')) {
            the_field('meta_title');
          } else {
            the_title();
          }
          ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Header -->
  <header class="text-gray-600 body-font">
    <nav
      class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
      <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3 gap-1">
        <a
          href="<?php echo site_url() ?>"
          class="flex items-center space-x-3 rtl:space-x-reverse">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/maher-hossain-logo.jpg"
            class="h-8"
            alt="Logo of Maher Hossain website - Web Developer in Bangladesh" />
        </a>
        <div
          class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
          <a href="<?php echo site_url('/contact'); ?>" class="mx-auto flex items-center gap-1 text-white bg-indigo-500 border-0 py-1 px-4 sm:py-2 sm:px-6 focus:outline-none hover:bg-indigo-600 rounded text-sm sm:text-base"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.22 19.63 19.63 0 0 1-6-6A19.86 19.86 0 0 1 2.08 4.18 2 2 0 0 1 4 2h3a2 2 0 0 1 2 1.72 12.11 12.11 0 0 0 .56 2.57 2 2 0 0 1-.45 2l-1.27 1.27a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2-.45 12.11 12.11 0 0 0 2.57.56A2 2 0 0 1 22 16.92z" />
            </svg> 01799664170</a>
        </div>
        <div class="flex flex-wrap justify-center px-10 py-3 relative">
          <div id="toggleOpen" class="flex ml-auto lg:hidden">
            <button>
              <svg
                class="w-7 h-7"
                fill="#000"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </div>
          <div
            id="collapseMenu"
            class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50"
            style="display: none">
            <button
              id="toggleClose"
              class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-4 fill-black"
                viewBox="0 0 320.591 320.591">
                <path
                  d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                  data-original="#000000" />
                <path
                  d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                  data-original="#000000" />
              </svg>
            </button>

            <ul
              class="lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
              <li class="max-lg:border-b max-lg:pb-4 px-3 lg:hidden">
                <a href="javascript:void(0)"><img
                    class="h-8"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/maher-hossain-logo.jpg"
                    alt="Logo of Maher Hossain website - Web Developer in Bangladesh" /></a>
              </li>
              <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                <a
                  href="<?php echo site_url() ?>"
                  class="hover:text-[#007bff] text-[#007bff] font-semibold block text-[15px]">Home</a>
              </li>
              <li
                class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                <a
                  href="<?php echo site_url('/about') ?>"
                  class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">About<svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16px"
                    height="16px"
                    class="ml-1 inline-block"
                    viewBox="0 0 24 24">
                    <path
                      d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                      data-name="16"
                      data-original="#000000" />
                  </svg>
                </a>
                <ul
                  class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[250px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500">
                  <li class="border-b py-3">
                    <a
                      href="<?php echo site_url('/about') ?>"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">About
                    </a>
                  </li>
                  <li class="border-b py-3">
                    <a
                      href="<?php echo site_url('/my-team') ?>"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">My Team
                    </a>
                  </li>
                  <li class="border-b py-3">
                    <a
                      href="<?php echo site_url('/testimonials') ?>"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">Testimonials
                    </a>
                  </li>
                </ul>
              </li>
              <li
                class="group max-lg:border-b max-lg:px-3 max-lg:py-3 relative">
                <a
                  href="<?php echo site_url('/services') ?>"
                  class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">Services<svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16px"
                    height="16px"
                    class="ml-1 inline-block"
                    viewBox="0 0 24 24">
                    <path
                      d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                      data-name="16"
                      data-original="#000000" />
                  </svg>
                </a>
                <ul
                  class="absolute top-5 max-lg:top-8 left-0 z-50 block space-y-2 shadow-lg bg-white max-h-0 overflow-hidden min-w-[250px] group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500">
                  <li class="border-b py-3">
                    <a
                      href="<?php echo site_url('/services/web-application-development') ?>"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">Web Application Development
                    </a>
                  </li>
                  <li class="border-b py-3">
                    <a
                      href="<?php echo site_url('/services/ecommerce-development') ?>"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">Ecommerce Development
                    </a>
                  </li>
                  <li class="border-b py-3">
                    <a
                      href="<?php echo site_url('/services/wordpress-development/') ?>"
                      class="hover:text-[#007bff] hover:fill-[#007bff] text-gray-600 font-semibold text-[15px] block">WordPress Development
                    </a>
                  </li>
                </ul>
              </li>
              <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                <a
                  href="<?php echo site_url('/blog') ?>"
                  class="hover:text-[#007bff] text-gray-600 font-semibold text-[15px] block">Blog</a>
              </li>
              <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                <a
                  href="<?php echo site_url('/portfolios') ?>"
                  class="hover:text-[#007bff] text-gray-600 font-semibold text-[15px] block">Portfolios</a>
              </li>
              <li class="max-lg:border-b max-lg:px-3 max-lg:py-3">
                <a
                  href="<?php echo site_url('/contact') ?>"
                  class="hover:text-[#007bff] text-gray-600 font-semibold text-[15px] block">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>