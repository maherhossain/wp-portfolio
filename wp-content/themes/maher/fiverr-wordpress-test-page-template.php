<?php
/*
  Template Name: Fiverr WordPress Test
 */
get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 pt-20 px-4">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h1 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php the_title(); ?> <?php the_time('Y'); ?>
        </h1>
      </div>
    </div>
  </div>
</section>
</header>
<div
  class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-12 sm:py-8 py-5 p-4">
  <div class="flex flex-col lg:flex-row gap-4">
    <!-- Main Section (75% on large screens) -->
    <main class="w-full lg:w-2/3 lg:my-0 my-2">
      <div class="bg-white">
        <div class="mx-auto max-w-screen-xl flex flex-col gap-2">
          <?php
          $counter = 1;
          $args = array(
            'post_type'       => 'faq',
            'posts_per_page'  => -1,
            'tax_query'       => array(
              array(
                'taxonomy'    => 'faq-for',
                'field'       => 'slug',
                'terms'       => 'fiverr-wordpress-test',
              ),
            ),
          );
          $faqs = new WP_Query($args);
          if ($faqs->have_posts()) :
            while ($faqs->have_posts()) : $faqs->the_post(); ?>
              <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-5">
                <h2 class="text-lg font-medium text-lg text-gray-900 py-4"><?php echo $counter++; ?> . <?php the_field('question') ?></h2>

                <?php if (get_field('code_block')) : ?>

                  <div class="leading-relaxed text-base text-gray-600 lg:text-lg py-4">
                    <code>
                      <?php the_field('code_block') ?>
                    </code>
                  </div>
                <?php endif; ?>
                <!-- Answer -->
                <?php
                // Retrieve all the answers
                $answers = array(
                  get_field('answers'),
                  get_field('answers_2'),
                  get_field('answers_3'),
                  get_field('answers_4'),
                  get_field('answers_5'),
                );
                // Get the selected correct answers
                $correct_answers = get_field('correct_answer');
                ?>
                <ul class="list-disc list-inside text-lg leading-relaxed py-5">
                  <?php foreach ($answers as $answer) : ?>
                    <?php if (!empty($answer)) : // Ensure the field is not empty 
                    ?>
                      <li<?php if (is_array($correct_answers) && in_array($answer, $correct_answers)) echo ' class="font-bold text-green-700"'; ?>>
                        <?php echo esc_html($answer); ?>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
              </div>
          <?php endwhile;
            wp_reset_postdata();
          else :
            echo '<p>No services found.</p>';
          endif;
          ?>

        </div>
      </div>
    </main>
    <!-- Aside Section (25% on large screens) -->
    <aside
      class="w-full lg:w-1/3 py-6 sm:py-8 lg:py-4 px-2 sm:px-2 lg:px-4">

      <!-- Recent Blogs -->
      <section id="fiverr-faq-section" class="text-gray-600 body-font">
        <div
          class="container mx-auto sm:px-4 md:px-2 lg:px-4 lg:py-4 sm:py-4 py-4 p-2">

          <div class="flex flex-wrap -m-4 gap-2">
            <?php
            $current_post_id = get_the_ID();
            $args = array(
              'post_type'       => 'faq',
              'posts_per_page'  => -1,
              'orderby'         => 'rand',
              'post__not_in'    => array($current_post_id),
              'tax_query'       => array(
                array(
                  'taxonomy'    => 'faq-for',
                  'field'       => 'slug',
                  'terms'       => 'fiverr-wordpress-test',
                ),
              ),
            );
            $faqs = new WP_Query($args);
            if ($faqs->have_posts()) :
              while ($faqs->have_posts()) : $faqs->the_post(); ?>

                <!-- Fiverr Question -->
                <div class="md:w-full px-2 py-4 bg-gray-600 h-full rounded-lg overflow-hidden">
                  <a class="text-[#fff] hover:text-[#007bff] flex flex-row justify-center items-center" href="<?php the_permalink(); ?>">
                    <svg class="flex-shrink-0 mr-2 w-5 h-5 text-[#fff] dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="text-xl sm:text-xl title-font"><?php the_title(); ?></h2>
                  </a>
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

    </aside>
  </div>
</div>

<?php get_template_part('footer', 'custom'); ?>