<!-- FAQ's -->
<section id="FAQs-section" class="text-gray-600 bg-gray-200 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
    <h3 class="text-2xl sm:text-3xl font-medium text-center title-font mb-4 text-gray-900 mb-8">FAQs About <?php the_title(); ?> Services
    </h3>
    <div class="grid pt-8 text-left border-t border-gray-200 md:gap-8 dark:border-gray-700 md:grid-cols-2">
      <?php
      $args = array(
        'post_type' => 'faq',
        'posts_per_page' => -1,
        'tax_query'      => array(
          array(
            'taxonomy' => 'faq-for',
            'field'    => 'slug',
            'terms'    => get_field("faq_slag")
          ),
        ),
      );
      $faqs = new WP_Query($args);
      if ($faqs->have_posts()) :
        while ($faqs->have_posts()) : $faqs->the_post(); ?>
          <div class="mb-0">
            <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
              <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
              <?php the_title(); ?>
            </h3>
            <p class="text-gray-500 dark:text-gray-400"><?php echo strip_tags(apply_filters('the_content', get_the_content())); ?></p>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No services found.</p>';
      endif;
      ?>

    </div>
  </div>
</section>



<!-- Testimonials -->
<section id="testimonial-section" class="text-gray-600 bg-gray-200 body-font">
  <div
    class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
    <!-- Header Section -->
    <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
      <h2
        class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
        Client Testimonials
      </h2>
      <p class="leading-relaxed text-base lg:text-lg">
        Don't just take my word for it. See what my clients have to say about my exceptional web development services. I've helped businesses of all sizes achieve their digital goals. Read their testimonials and see how I've delivered innovative web solutions that drive results.
      </p>
    </div>
    <div class="flex flex-wrap -m-4">

      <?php
      $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 4,
      );
      $testimonials = new WP_Query($args);
      if ($testimonials->have_posts()) :
        while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
          <!-- Testimonial -->
          <div class="p-4 lg:w-1/2 md:w-full w-full">
            <div class="h-full bg-gray-100 p-8 rounded-lg flex flex-col justify-between">
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                  <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z" />
                </svg>
                <p class="leading-relaxed">
                  <?php echo strip_tags(apply_filters('the_content', get_the_content())); ?>
                </p>
                <p class="leading-relaxed text-sm font-bold mb-2">Completed on - <?php the_field('project_complete_on'); ?>, with <?php the_field('rating'); ?> star rating on <?php the_field('date'); ?></p>
              </div>

              <a rel="nofollow" target="_blank" href="<?php the_field('website_url'); ?>" class="inline-flex items-center">
                <img
                  alt="testimonial"
                  src="https://dummyimage.com/150x150"
                  class="w-20 h-20 rounded-full object-cover" />
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900"><?php the_field('client_name'); ?></span>
                  <span class="text-gray-500 text-sm"><?php the_field('designation'); ?></span>
                </span>
              </a>
            </div>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No Testimonials found.</p>';
      endif;
      ?>
      <a href="<?php echo get_post_type_archive_link('testimonial'); ?>" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">View All</a>
    </div>
  </div>
</section>


<!-- Recent Works -->
<section id="portfolio-section" class="text-gray-600  body-font">
  <div
    class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
    <!-- Header Section -->
    <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
      <h2
        class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
        Recent Works
      </h2>
      <p class="leading-relaxed text-base lg:text-lg">
        As a skilled freelance web developer in Bangladesh, I've had the opportunity to work on a wide range of exciting projects. Check out some of my recent projects showcasing my expertise in web development, WordPress development, e-commerce,digital marketing and SEO.
      </p>
    </div>

    <!-- Gallery Section -->
    <div class="flex flex-wrap -m-4">

      <?php
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 3,
      );
      $portfolios = new WP_Query($args);
      if ($portfolios->have_posts()) :
        while ($portfolios->have_posts()) : $portfolios->the_post(); ?>

          <!-- Card Item 1 -->
          <div class="p-4 w-full sm:w-1/2 lg:w-1/3">
            <div class="relative flex">
              <img
                alt="<?php the_title(); ?> - by Maher Hossain"
                class="absolute inset-0 w-full h-full object-cover object-center"
                src="<?php echo get_the_post_thumbnail_url() ?>" />
              <div
                class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                <h2
                  class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">
                  THE SUBTITLE
                </h2>
                <h3 class="title-font text-lg font-medium text-gray-900 mb-3 h-14">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="leading-relaxed mb-5 text-justify">
                  <?php echo substr(get_the_content(), 0, 200) . '...'; ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">View details »</a>
              </div>
            </div>
          </div>
      <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No services found.</p>';
      endif;
      ?>
      <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">View All</a>
    </div>
  </div>
</section>