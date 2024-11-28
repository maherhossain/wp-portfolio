<div class="flex flex-wrap -m-4">
  <?php
  $current_term = get_queried_object();

  $args = array(
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'tax_query' => array(
      array(
        'taxonomy' => $current_term->taxonomy,
        'field'    => 'slug',
        'terms'    => $current_term->slug,
      ),
    ),
  );
  $faqs = new WP_Query($args);
  if ($faqs->have_posts()) :
    while ($faqs->have_posts()) : $faqs->the_post(); ?>

      <section class="px-3 py-4 sm:w-full md:w-full lg:w-full xl:w-full">
        <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
          <div class="flex items-center mb-3">
            <div
              class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full text-white flex-shrink-0">
              <svg class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </div>
            <a href="<?php the_permalink(); ?>">
              <h2 class="text-gray-900 text-lg title-font font-medium">
                <?php the_title(); ?>
              </h2>
            </a>
          </div>
          <div class="flex-grow">
            <p class="leading-relaxed mb-5 text-justify">
              <?php #echo substr(get_the_content(), 0, 200) . '...'; 
              ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="mt-3 text-indigo-500 inline-flex items-center">
              Learn More
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-4 h-4 ml-2"
                viewBox="0 0 24 24"
                aria-hidden="true">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </section>

  <?php endwhile;
    wp_reset_postdata();
  else :
    echo '<p>No services found.</p>';
  endif;
  ?>
</div>