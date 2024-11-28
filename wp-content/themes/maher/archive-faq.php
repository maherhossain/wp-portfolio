<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h2 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php if (is_archive()) {
            echo get_the_archive_title();
          } ?>
        </h2>
      </div>
    </div>
  </div>
</section>
</header>
<!-- Header -->

<?php

if (is_tax('faq-for', 'Fiverr WordPress Test')) {
  get_template_part('template-parts/archive', 'faq-fiverr');
} else {
  get_template_part('template-parts/archive', 'faq-general');
}
?>



<!-- Footer -->
<?php get_footer() ?>