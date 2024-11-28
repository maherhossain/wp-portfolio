<?php
function portfolios_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'post_type' => 'portfolio',
      'posts_per_page' => 4,
      'title' => 'Recent Works',
      'description' => 'As a skilled freelance web developer in Bangladesh, I\'ve had the opportunity to work on a wide range of exciting projects. Check out some of my recent projects showcasing my expertise in web development, WordPress development, e-commerce,digital marketing and SEO.',
      'category'  => 'digital-marketing-and-seo, wordpress-development, ecommerce-development, web-design-and-development',
      'bg'  => 'bg-gray-200',
    ),
    $atts,
    'portfolios_shortcode'
  );

  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => (int) $atts['posts_per_page'],
  );

  if (!empty($atts['category'])) {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'service-area',
        'field' => 'slug',
        'terms' => explode(',', $atts['category']),
      ),
    );
  }

  $faqs = new WP_Query($args);

  ob_start();
?>
  <section id="portfolio-section" class="text-gray-600 <?php echo esc_html($atts['bg']); ?> body-font">
    <div
      class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
      <!-- Title and Subtitle -->
      <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
        <h2
          class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
          <?php echo esc_html($atts['title']); ?>
        </h2>
        <p class="leading-relaxed text-base lg:text-lg">
          <?php echo esc_html($atts['description']); ?>
        </p>
      </div>

      <!-- Portfolios -->
      <div class="flex flex-wrap -m-4">
        <?php
        $counter = 1;
        $portfolios = new WP_Query($args);
        if ($portfolios->have_posts()) :
          while ($portfolios->have_posts()) : $portfolios->the_post(); ?>
            <!-- Portfolio Item  <?php echo $counter++; ?>-->
            <div class="p-4 w-full sm:w-1/2 lg:w-1/3">
              <div class="relative flex">
                <img
                  alt="<?php the_title(); ?> - by Maher Hossain"
                  class="absolute inset-0 w-full h-full object-cover object-center"
                  src="<?php echo get_the_post_thumbnail_url() ?>" />
                <div
                  class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                  <h4
                    class="tracking-widest text-sm title-font font-medium text-[#007bff] mb-1 h-10">
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'service-area');

                    if ($terms && !is_wp_error($terms)) {
                      echo implode(', ', wp_list_pluck($terms, 'name'));
                    } else {
                      echo 'No terms assigned.';
                    }
                    ?>
                  </h4>
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
<?php
  return ob_get_clean();
}
add_shortcode('portfolios_shortcode', 'portfolios_shortcode');
