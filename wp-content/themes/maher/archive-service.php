<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 pt-20 px-4">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h1 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          Web Development Services in Bangladesh
        </h1>
      </div>
    </div>
  </div>
</section>
</header>
<!-- services -->
<div id="service-section" class="text-gray-600 body-font mb-12">
  <div
    class="container sm:px-4 md:px-24 lg:px-32 lg:py-10 sm:py-8 py-5 mx-auto p-2">
    <!-- Header Section -->
    <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
      <h2 class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900 mb-8">Freelance Web Developer in Bangladesh | Expert WordPress, PHP & Laravel Services</h2>
      <p class="leading-relaxed text-base lg:text-lg">
        Looking for a Web Developer in Bangladesh? I offer professional web development services tailored to your needs. As a Freelance Web Developer in Bangladesh, I specialize in PHP Development, Laravel Development, and WordPress Development. Whether you need a custom-built PHP website, a robust Laravel application, or a responsive WordPress site, I provide high-quality solutions that drive business growth. With years of experience as a Freelance WordPress Developer in Bangladesh, I focus on delivering user-friendly, SEO-optimized websites that align with your business goals. Let’s work together to create a website that stands out online!
      </p>
    </div>

    <div class="flex flex-wrap -m-4">
      <?php
      $args = array(
        'post_type' => 'service',
        'posts_per_page' => -1,
      );
      $services = new WP_Query($args);
      if ($services->have_posts()) :
        while ($services->have_posts()) : $services->the_post(); ?>
          <!-- Service  -->
          <section class="px-3 py-4 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/3">
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
              <div class="flex items-center mb-3">
                <div
                  class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                  <svg
                    fill="none"
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    class="w-5 h-5"
                    viewBox="0 0 24 24"
                    aria-hidden="true">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                  </svg>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium">
                  <?php the_title(); ?>
                </h2>
              </div>
              <div class="flex-grow">
                <p class="leading-relaxed mb-5 text-justify">
                  <?php echo substr(get_the_content(), 0, 200) . '...'; ?>
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
      endif; ?>
    </div>
  </div>
</div>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Maher Hossain",
    "offers": {
      "@type": "OfferCatalog",
      "offers": [<?php
                  $args = array(
                    'post_type' => 'service',
                    'posts_per_page' => 4,
                  );
                  $services = new WP_Query($args);

                  $serviceCount = $services->post_count;
                  $i = 0;

                  if ($services->have_posts()) :
                    while ($services->have_posts()) : $services->the_post();
                      $i++; ?> {
              "@type": "Service",
              "name": "<?php the_title(); ?>",
              "description": "<?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>",
              "image": "<?php echo esc_url(get_post_thumbnail_id(get_the_ID()) ? wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) : ''); ?>",
              "url": "<?php the_permalink(); ?>"
            }
        <?php
                      if ($i < $serviceCount) {
                        echo ',';
                      }
                    endwhile;
                    wp_reset_postdata();
                  endif; ?>
      ]
    }
  }
</script>

<!-- Recent Works/ Portfolios -->
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg="bg-gray-200" title="Showcasing Excellence: Portfolio of a Freelance Web Developer in Bangladesh" description="Explore the portfolio of a seasoned Web Developer in Bangladesh, showcasing diverse projects in web development, WordPress customization, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I specialize in building responsive websites, custom WordPress themes, plugins, and e-commerce solutions. Whether you need a WordPress Developer in Bangladesh, a skilled PHP Developer, or a reliable Laravel Developer in Bangladesh, my portfolio highlights the quality and expertise I bring to every project."]'); ?>

<!-- FAQ's Section for Services Archive Page-->
<?php echo do_shortcode('[faq_shortcode posts_per_page="-1" bg="" title="Frequently Asked Questions" description="In this section, I\'ve compiled a list of frequently asked questions to help you better understand my web development services and how I can assist you. If you have any further queries, please don\'t hesitate to contact me." category="services-archive, web-design-development, wordpress-development, ecommerce-development"]'); ?>

<!-- Call to Action / Contact Section -->
<?php echo do_shortcode('[contact_shortcode]'); ?>

<?php get_template_part('footer', 'custom'); ?>