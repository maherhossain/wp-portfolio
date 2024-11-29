<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 pt-20 px-4">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h1 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php
          if (is_archive()) {
            echo get_the_archive_title();
          } else if (is_home()) {
            echo "Blog";
          }
          ?>
          <?php echo get_field('meta_title'); ?>
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- Banner -->
</header>
<!-- Header -->
<div
  class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
  <div class="flex flex-col lg:flex-row gap-4">
    <!-- Main Section (75% on large screens) -->
    <main class="w-full lg:w-full my-2 lg:my-0">
      <div class="bg-white py-6 sm:py-8 lg:py-0">
        <div class="mx-auto max-w-screen-xl">
          <div
            class="grid gap-2 sm:grid-cols-1 md:gap-2 lg:grid-cols-2 xl:grid-cols-2 xl:gap-4">

            <!-- article - start -->
            <?php while (have_posts()) {
              the_post(); ?>

              <article itemscope itemtype="http://schema.org/Article"
                class="flex flex-col items-center overflow-hidden rounded-lg border md:flex-row">
                <a
                  href="<?php the_permalink(); ?>"
                  class="group relative block h-48 w-full shrink-0 self-start overflow-hidden bg-gray-100 md:h-full md:w-32 lg:w-48">

                  <img itemprop="image"
                    src="<?php echo get_the_post_thumbnail_url() ?>"
                    loading="lazy"
                    alt="<?php the_title(); ?>"
                    class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-col gap-2 p-4 lg:p-6">
                  <sapn class="text-sm text-gray-400">By <span itemprop="author" itemscope itemtype="http://schema.org/Person"><a itemprop="url" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><span itemprop="name"><?php echo esc_html(get_the_author()); ?></span></a> - </span>
                    <span><span itemprop="datePublished" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></span> - <span itemprop="articleSection" itemscope itemtype="http://schema.org/Thing"><span itemprop="name"><?php echo get_the_category_list(', '); ?></span></span></span>
                  </sapn>

                  <a href="<?php the_permalink(); ?>"
                    class="transition duration-100 hover:text-indigo-500 active:text-indigo-600">
                    <h2 itemprop="headline" class="text-base font-bold text-gray-800">
                      <?php the_title(); ?>
                    </h2>
                  </a>

                  <div itemprop="articleBody" class="text-gray-500">
                    <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                  </div>

                  <div>
                    <a
                      href="<?php the_permalink(); ?>"
                      class="font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Read more &raquo;</a>
                  </div>
                </div>
              </article>

              <!-- article - end -->
            <?php } ?>
          </div>
          <p class="my-5"><?php echo paginate_links(); ?></p>
        </div>
      </div>
    </main>
  </div>
</div>

<!-- Testimonials Section for Blog-->
<?php echo do_shortcode('[testimonials_shortcode posts_per_page="4" title="What My Clients Say" description="At the heart of my WordPress Development Services in Bangladesh is a commitment to delivering exceptional results and ensuring client satisfaction. Over the years, I have had the privilege of working with diverse clients, helping them turn their visions into fully functional, high-performing WordPress websites. Here’s what some of them have to say about their experience:" category="upwork, fiverr"]'); ?>

<!-- Recent Works/ Portfolios -->
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg="" title="Showcasing Excellence: Portfolio of a Freelance Web Developer in Bangladesh" description="Explore the portfolio of a seasoned Web Developer in Bangladesh, showcasing diverse projects in web development, WordPress customization, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I specialize in building responsive websites, custom WordPress themes, plugins, and e-commerce solutions. Whether you need a WordPress Developer in Bangladesh, a skilled PHP Developer, or a reliable Laravel Developer in Bangladesh, my portfolio highlights the quality and expertise I bring to every project."]'); ?>


<!-- Clients section to showcase list of clients logo  -->
<?php echo do_shortcode('[clients_shortcode posts_per_page="-1"]'); ?>

<!-- Footer -->
<?php get_footer() ?>