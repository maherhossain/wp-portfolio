<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
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
<div
  class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-12 sm:py-8 py-5 p-2">
  <div class="flex flex-col lg:flex-row gap-4">
    <!-- Main Section (75% on large screens) -->
    <main class="w-full lg:w-3/4 lg:my-0 my-2">
      <div class="bg-white">
        <div class="mx-auto max-w-screen-xl">
          <?php the_content(); ?>
        </div>
      </div>

    </main>
    <!-- Aside Section (25% on large screens) -->
    <aside
      class="w-full lg:w-1/4 py-6 sm:py-8 lg:py-4 px-2 sm:px-2 lg:px-2 bg-gray-100">

      <!-- Recent Blogs -->
      <section id="blog-section" class="text-gray-600 body-font">
        <div
          class="container mx-auto sm:px-2 md:px-2 lg:px-2 lg:py-4 sm:py-4 py-4 p-2">
          <h2 class="text-xl sm:text-xl font-medium title-font mb-4 text-gray-900">
            Latest Post
          </h2>
          <div class="flex flex-wrap -m-4">

            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            );
            $blogs = new WP_Query($args);
            if ($blogs->have_posts()) :
              while ($blogs->have_posts()) : $blogs->the_post(); ?>

                <!-- Card Item 1 -->
                <article class="md:w-full p-2">
                  <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">

                    <img itemprop="image"
                      src="<?php echo get_the_post_thumbnail_url() ?>"
                      loading="lazy"
                      alt="<?php the_title(); ?>"
                      class="lg:h-48 md:h-36 w-full object-cover object-center" />


                    <div class="p-6">
                      <h3 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1"><?php echo get_the_category_list(', '); ?></h3>
                      <h2 class="title-font text-lg font-medium text-gray-900 mb-3"><?php the_title(); ?></h2>
                      <p class="leading-relaxed mb-3"><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                      <div class="flex items-center flex-wrap ">
                        <a href="<?php the_permalink(); ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="M12 5l7 7-7 7" />
                          </svg>
                        </a>
                        <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                            <circle cx="12" cy="12" r="3"></circle>
                          </svg><?php echo get_post_meta(get_the_ID(), 'visit_count', true); ?>K
                        </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                          <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z" />
                          </svg>6
                        </span>
                      </div>
                    </div>
                  </div>
                </article>

            <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<p>No services found.</p>';
            endif;
            ?>
            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">View All</a>
          </div>
        </div>
      </section>

    </aside>
  </div>
</div>

<?php get_footer(); ?>