<?php
function testimonials_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'post_type' => 'testimonial',
      'posts_per_page' => 4,
      'title' => 'Client Testimonials',
      'description' => 'Don\'t just take my word for it. See what my clients have to say about my exceptional web development services. I\'ve helped businesses of all sizes achieve their digital goals. Read their testimonials and see how I\'ve delivered innovative web solutions that drive results..',
      'category'  => 'upwork',
      'bg'  => 'bg-gray-200',
    ),
    $atts,
    'testimonials_shortcode'
  );

  $args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => (int) $atts['posts_per_page'],
  );

  if (!empty($atts['category'])) {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'platform',
        'field' => 'slug',
        'terms' => explode(',', $atts['category']),
      ),
    );
  }

  $faqs = new WP_Query($args);

  ob_start();
?>
  <section id="testimonial-section" class="text-gray-600 <?php echo esc_html($atts['bg']); ?> body-font">
    <div
      class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
      <!-- Header Section -->
      <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
        <h2
          class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
          <?php echo esc_html($atts['title']); ?>
        </h2>
        <p class="leading-relaxed text-base lg:text-lg">
          <?php echo esc_html($atts['description']); ?>
        </p>
      </div>
      <div class="flex flex-wrap -m-4">

        <?php
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

<?php
  return ob_get_clean();
}
add_shortcode('testimonials_shortcode', 'testimonials_shortcode');
