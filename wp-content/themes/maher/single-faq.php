<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 pt-20 px-4">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h1 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
</section>
</header>

<?php
$terms = wp_get_post_terms(get_the_ID(), 'faq-for');
if (!empty($terms)) {
  $term = $terms[0];
  if ($term->slug == 'fiverr-wordpress-test' || $term->slug == 'wordpress' || $term->slug == 'html' || $term->slug == 'css') {
    get_template_part('template-parts/single', 'faq-fiverr');
  } else {
    get_template_part('template-parts/single', 'faq-general');
  }
}
?>

<?php get_template_part('footer', 'custom'); ?>