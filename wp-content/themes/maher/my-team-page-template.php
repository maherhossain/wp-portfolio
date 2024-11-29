<?php
/*
  Template Name: My Team
 */
get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 pt-20 px-4">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h2 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php the_title(); ?> - Your Digital Partner
        </h2>
      </div>
    </div>
  </div>
</section>

</header>

<!-- Testimonials -->
<section id="testimonial-section" class="text-gray-600 body-font">
  <div
    class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-4">
    <!-- Header Section -->
    <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
      <h2
        class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
        Meet My Team
      </h2>
      <p class="leading-relaxed text-base lg:text-lg">
        My team is a dedicated group of professionals with expertise in web development, WordPress solutions, and eCommerce development. With years of experience, we work together to create custom websites and scalable online stores that deliver exceptional results. Our focus is on providing high-quality, user-friendly digital solutions that help businesses succeed in the ever-evolving online landscape.</p>

    </div>
    <div class="flex flex-wrap -m-4">

      <?php
      $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
      );
      $teams = new WP_Query($args);
      if ($teams->have_posts()) :
        while ($teams->have_posts()) : $teams->the_post(); ?>
          <!-- Testimonial -->
          <div class="p-4 lg:w-1/3 md:w-full w-full">
            <div class="h-full bg-gray-100 p-8 rounded-lg">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z" />
              </svg>
              <p class="leading-relaxed mb-6 text-justify">
                <?php echo strip_tags(apply_filters('the_content', get_the_content())); ?>
              </p>
              <a class="inline-flex items-center">
                <img
                  alt="testimonial"
                  src="<?php echo get_the_post_thumbnail_url() ?>"
                  class="w-16 h-16 rounded-full object-cover" />
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900"><?php the_title(); ?></span>
                  <span class="text-gray-500 text-sm"><?php the_field('designation'); ?></span>
                </span>
              </a>
            </div>
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



<!-- Testimonials Section for Blog-->
<?php echo do_shortcode('[testimonials_shortcode posts_per_page="6" title="What My Clients Say" description="At the heart of my WordPress Development Services in Bangladesh is a commitment to delivering exceptional results and ensuring client satisfaction. Over the years, I have had the privilege of working with diverse clients, helping them turn their visions into fully functional, high-performing WordPress websites. Here’s what some of them have to say about their experience:" category="upwork, fiverr"]'); ?>

<!-- Recent Works/ Portfolios -->
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg="" title="Showcasing Excellence: Portfolio of a Freelance Web Developer in Bangladesh" description="Explore the portfolio of a seasoned Web Developer in Bangladesh, showcasing diverse projects in web development, WordPress customization, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I specialize in building responsive websites, custom WordPress themes, plugins, and e-commerce solutions. Whether you need a WordPress Developer in Bangladesh, a skilled PHP Developer, or a reliable Laravel Developer in Bangladesh, my portfolio highlights the quality and expertise I bring to every project."]'); ?>

<!-- Clients section to showcase list of clients logo  -->
<?php echo do_shortcode('[clients_shortcode posts_per_page="-1"]'); ?>

<?php get_footer(); ?>