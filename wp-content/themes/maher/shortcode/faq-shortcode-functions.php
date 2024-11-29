<?php
function faq_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'post_type' => 'faq',
      'posts_per_page' => -1,
      'title' => 'Frequently Asked Questions',
      'description' => 'In this section, I\'ve compiled a list of frequently asked questions to help you better understand my web development services and how I can assist you. If you have any further queries, please don\'t hesitate to contact me.',
      'category' => get_field("faq_slag"),
      'bg'  => 'bg-gray-200',
    ),
    $atts,
    'faq_shortcode'
  );

  $args = array(
    'post_type' => 'faq',
    'posts_per_page' => (int) $atts['posts_per_page'],
  );

  if (!empty($atts['category'])) {
    $args['tax_query'] = array(
      array(
        'taxonomy' => 'faq-for',
        'field' => 'slug',
        'terms' => explode(',', $atts['category']),
      ),
    );
  }

  $faqs = new WP_Query($args);

  ob_start();
?>
  <section id="faq-section" itemscope itemtype="https://schema.org/FAQPage" class="text-gray-600 <?php echo esc_html($atts['bg']); ?> body-font my-16 md:my-4">
    <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
      <div class="flex flex-col text-left w-full sm:mb-16 mb-2">
        <h2 class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
          <?php echo esc_html($atts['title']); ?>
        </h2>
        <p class="leading-relaxed text-base lg:text-lg">
          <?php echo esc_html($atts['description']); ?>
        </p>
      </div>

      <div class="grid pt-4 text-left border-t border-gray-200 md:gap-8 dark:border-gray-700 md:grid-cols-2">
        <?php
        if ($faqs->have_posts()) :
          while ($faqs->have_posts()) : $faqs->the_post(); ?>
            <div class="my-4 md:my-2 faq-container" itemprop="mainEntity">
              <h3 itemprop="name" class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                </svg>
                <?php the_title(); ?>
              </h3>
              <p itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="text-gray-500 dark:text-gray-400">
                <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
              </p>
            </div>
        <?php endwhile;
          wp_reset_postdata();
        else :
          echo '<p>No FAQs found.</p>';
        endif;
        ?>
      </div>
    </div>
  </section>
<?php
  return ob_get_clean();
}
add_shortcode('faq_shortcode', 'faq_shortcode');
