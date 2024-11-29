<?php
/*
  Template Name: FAQ Page
 */
get_header(); ?>
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


<!-- FAQ's -->
<section id="FAQs-section" class="text-gray-600 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
    <h2 class="text-2xl sm:text-3xl font-medium text-center title-font mb-4 text-gray-900 mb-8">Frequently asked questions
    </h2>
    <div class="grid pt-8 text-left border-t border-gray-200 md:gap-8 dark:border-gray-700 md:grid-cols-2">
      <?php
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'tax_query'      => array(
          array(
            'taxonomy' => 'faq-for',
            'field'    => 'slug',
            'terms'    =>
            array('wordpress-development', 'services-archive', 'portfolios-archive', 'web-design-development', 'ecommerce-development'),
          ),
        ),
      );
      $faqs = new WP_Query($args);
      if ($faqs->have_posts()) :
        while ($faqs->have_posts()) : $faqs->the_post(); ?>
          <div class="mb-0">
            <h2 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
              <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
              <?php the_title(); ?>
            </h2>
            <p class="text-gray-500 dark:text-gray-400"><?php echo strip_tags(apply_filters('the_content', get_the_content())); ?></p>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No FAQ\'s found.</p>';
      endif;
      ?>

    </div>
  </div>
</section>

<?php get_template_part('footer', 'custom'); ?>