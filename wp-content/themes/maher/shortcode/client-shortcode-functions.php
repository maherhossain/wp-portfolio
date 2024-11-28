<?php
function clients_shortcode($atts)
{
  $atts = shortcode_atts(
    array(
      'post_type' => 'client',
      'posts_per_page' => -1,
      'title' => 'I\'m Proud to Work with',
      'description' => 'As a freelance web developer in Bangladesh, I\'ve had the privilege of collaborating with a diverse range of clients. From small businesses to large corporations, I\'ve delivered top-notch web development solutions leveraging PHP, Laravel, WordPress, MERN and other cutting-edge technologies. My expertise in web design, web development, and digital marketing has enabled me to create innovative and effective solutions that meet the unique needs of each client. I\'m proud to have contributed to the success of these businesses and look forward to future collaborations.',
      'bg'  => 'bg-gray-200',
    ),
    $atts,
    'clients_shortcode'
  );

  $args = array(
    'post_type' => 'client',
    'posts_per_page' => (int) $atts['posts_per_page'],
  );
  $faqs = new WP_Query($args);

  ob_start();
?>
  <section id="clients-section" class="text-gray-600 <?php echo esc_html($atts['bg']); ?> body-font">
    <div
      class="container mx-auto flex sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 md:flex-row flex-col items-center p-2">
      <div class="lg:max-w-lg lg:w-1/3 md:w-full sm:w-full mb-10 md:mb-0">
        <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:mb-6 mb-4">
          <?php echo esc_html($atts['title']); ?>
        </h2>
        <p class="mx-auto leading-relaxed text-base text-justify">
          <?php echo esc_html($atts['description']); ?>
        </p>
      </div>
      <div
        class="lg:flex-grow lg:w-2/3 md:w-full sm:w-full lg:pl-6 md:pl-6 flex flex-col md:items-start md:text-left items-center text-center">
        <div class="flex flex-wrap w-full">

          <?php
          $args = array(
            'post_type' => 'client',
            'posts_per_page' => -1,
          );
          $clients = new WP_Query($args);
          if ($clients->have_posts()) :
            while ($clients->have_posts()) : $clients->the_post(); ?>
              <!-- Client -->
              <div class="md:p-1 p-1 lg:w-[14.2857143%] md:w-1/5 sm:w-1/4 w-1/3">
                <?php if (has_post_thumbnail()) : ?>
                  <img
                    alt="<?php the_title(); ?> - A website design and developed by Maher Hossain, Freelance Web Developer in Bangladesh"
                    class="w-full object-cover h-full object-center block border border-black-600 shadow-lg"
                    src="<?php echo get_the_post_thumbnail_url() ?>"
                    loading="lazy" />
                <?php endif; ?>
              </div>

          <?php endwhile;
            wp_reset_postdata();
          else :
            echo '<p>No Client found.</p>';
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>
<?php
  return ob_get_clean();
}
add_shortcode('clients_shortcode', 'clients_shortcode');
