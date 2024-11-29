<?php get_header(); ?>
<!-- Banner -->
<section id="bannar-section" class="text-gray-600 bg-[#012730e6] body-font">
  <div
    class="container sm:px-4 md:px-24 lg:px-32 lg:pt-24 lg:pb-10 sm:py-8 py-8 mx-auto flex flex-row flex-wrap items-center  p-2">
    <!-- Text Section -->
    <div class="lg:w-2/3 sm:w-full flex flex-col sm:pr-10 mb-5 lg:mb-0">
      <div class="w-full mb-6 px-4">
        <sapn
          class="leading-relaxed text-base lg:text-lg text-center sm:text-left"></sapn>
        <h1
          class="title-font font-medium text-xl lg:text-2xl text-[#ffffff] mb-4 text-center sm:text-left sm:mt-0 mt-12">
          Experienced Web Developer in Bangladesh - Maher Hossain
        </h1>
        <p
          class="leading-relaxed text-base lg:text-lg text-center sm:text-left text-justify text-[#f1f1f1]">
          Looking for a skilled web developer in Bangladesh? I specialize
          in crafting stunning, high-performance websites using WordPress,
          Laravel, MERN and other cutting-edge technologies. With a focus
          on user experience and SEO, I deliver exceptional digital
          solutions. Let's build your online presence together!
        </p>
      </div>
      <!--  -->
      <div
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-2">
        <div class="p-3 text-center sm:text-left bg-gray-100">
          <h2 class="title-font font-medium text-3xl text-gray-900">
            7+
          </h2>
          <p class="leading-relaxed">Years of Experiences</p>
        </div>
        <div class="p-3 text-center sm:text-left bg-gray-100">
          <h2 class="title-font font-medium text-3xl text-gray-900">
            380+
          </h2>
          <p class="leading-relaxed">Project Completed</p>
        </div>
        <div class="p-3 text-center sm:text-left bg-gray-100">
          <h2 class="title-font font-medium text-3xl text-gray-900">
            24
          </h2>
          <p class="leading-relaxed">Country Served</p>
        </div>
        <div class="p-3 text-center sm:text-left bg-gray-100">
          <h2 class="title-font font-medium text-3xl text-gray-900">
            394
          </h2>
          <p class="leading-relaxed">Happy Clients</p>
        </div>
      </div>
      <!--  -->
    </div>
    <!-- Image Section -->
    <div
      class="lg:w-1/3 sm:w-full rounded-lg overflow-hidden mt-5 lg:mt-0">
      <figure>
        <img
          class="mx-auto object-cover object-center max-w-full"
          src="http://localhost/portfolio/wp-content/uploads/2024/11/Maher-Hossain-1.jpg"
          alt="Picture of Maher Hossain, An Experienced Web Developer in Bangladesh" />
        <figcaption class="text-center text-sm text-[#f5f5f5] italic py-2">
          Maher Hossain - An Experienced Web Developer in Bangladesh
        </figcaption>
      </figure>
    </div>
  </div>
</section>

</header>
<!-- services -->
<div id="service-section" class="text-gray-600 bg-gray-200 body-font">
  <div
    class="container sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 mx-auto p-2">
    <!-- services title -->
    <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
      <h2
        class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
        My Services
      </h2>
      <p class="leading-relaxed text-base lg:text-lg">
        From concept to completion, I provide top-notch web development services, leveraging PHP, Laravel, and WordPress. Let's build a website that not only looks great but also helps you achieve your business goals.
      </p>
    </div>

    <div class="flex flex-wrap -m-4">
      <?php
      $args = array(
        'post_type' => 'service',
        'posts_per_page' => 4,
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
                <p class="leading-relaxed text-base text-justify">
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
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg=""]'); ?>

<!-- Testimonials Section for Home Page-->
<?php echo do_shortcode('[testimonials_shortcode posts_per_page="4" category="upwork, fiverr"]'); ?>

<!-- About -->
<section id="about-maher-hossain-section" class="text-gray-600  body-font">
  <div
    class="container mx-auto flex flex-col-reverse sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 md:flex-row flex-col items-center p-2">
    <div class="lg:max-w-lg lg:w-full md:w-2/7 w-4/6 mb-10 md:mb-0 order-2">
      <figure>
        <img
          class="object-cover object-center rounded mx-auto"
          alt="Picture of Maher Hossain - A Freelance Web Developer in Bangladesh"
          src="http://localhost/portfolio/wp-content/uploads/2024/11/Maher-Hossain.jpg" />
        <figcaption class="text-center text-sm italic">
          Maher Hossain - Freelance Web Developer in Bangladesh
        </figcaption>
      </figure>
    </div>
    <div
      class="lg:flex-grow order-1 md:w-5/7 lg:pr-6 md:pl-6 flex flex-col md:items-start md:text-left items-center text-center">
      <h2
        class="title-font font-medium text-xl lg:text-2xl text-gray-900 mb-4 sm:text-left sm:mt-0 mt-12">
        Maher Hossain<br class="hidden lg:inline-block" />Freelance Web
        Developer in Bangladesh
      </h2>
      <p class="mb-4 leading-relaxed text-justify">
        As a skilled Web Developer in Bangladesh, I bring a diverse skill set and years of experience across various programming languages and frameworks to every project. My career as a Freelance Web Developer in Bangladesh has been built on a solid foundation of technical expertise, allowing me to deliver high-quality, tailored web solutions that help businesses achieve a strong digital presence. I am a certified Oracle Certified Professional Java SE 6 Programmer, which has enhanced my proficiency in Java, a skill that complements my advanced knowledge in PHP Development and the MERN stack.</p>

      <p class="mb-4 leading-relaxed text-justify">Throughout my career, I have worked with different organizations and contributed to numerous projects, allowing me to gain invaluable experience and insights. My expertise extends to Laravel Development in Bangladesh, where I use the Laravel framework to create secure, efficient, and scalable web applications. My role as a PHP Developer in Bangladesh involves crafting dynamic websites and applications that are not only functional but also optimized for performance and search engines.</p>

      <p class="mb-4 leading-relaxed text-justify">In addition to back-end technologies, I excel in WordPress Development and am known as a Freelance WordPress Developer in Bangladesh. I have developed custom WordPress themes and plugins, ensuring each site is fully optimized, responsive, and easy for clients to manage. With experience in front-end tools like HTML, CSS, JavaScript, Bootstrap, and Tailwind CSS, I design visually appealing websites that provide excellent user experiences across devices.</p>

      <p class="mb-4 leading-relaxed text-justify">I am also the founder of MH Digital, a digital agency focused on delivering innovative, high-quality web solutions for both local and international clients. Additionally, I co-founded CINTech Bangladesh Ltd, an ICT service provider company that specializes in communication, networking, and information technology services. These experiences have equipped me with the knowledge and skills to deliver reliable, professional web development and digital solutions.</p>

      <p class="mb-4 leading-relaxed text-justify">Whether you're looking for a WordPress Developer in Bangladesh, a PHP Developer, or a reliable Laravel Developer in Bangladesh, I am dedicated to bringing your vision to life. My blend of technical expertise, industry certifications, and practical experience makes me the ideal choice for businesses seeking top-tier web development services.
      </p>

      <div class="flex justify-center">
        <button
          class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg mt-4">
          About Me
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Clients section to showcase list of clients logo  -->
<?php echo do_shortcode('[clients_shortcode posts_per_page="-1"]'); ?>


<!-- Recent Blogs -->
<section id="portfolio-section" class="text-gray-600  body-font">
  <div
    class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
    <!-- Header Section -->
    <div class="flex flex-col text-left w-full sm:mb-20 mb-5">
      <h2
        class="text-2xl sm:text-3xl font-medium title-font mb-4 text-gray-900">
        Expert Tips from a Freelance Web Developer in Bangladesh
      </h2>
      <p class="leading-relaxed text-base lg:text-lg">
        Discover insights, trends, and practical guides from a professional Web Developer in Bangladesh, specializing in WordPress development, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I share strategies to help businesses succeed online with cutting-edge web solutions.
      </p>
    </div>

    <!-- Gallery Section -->
    <div class="flex flex-wrap -m-4">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
      );
      $blogs = new WP_Query($args);
      if ($blogs->have_posts()) :
        while ($blogs->have_posts()) : $blogs->the_post(); ?>

          <!-- Card Item 1 -->
          <article class="p-4 md:w-1/3">
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
                  <a href="<?php the_permalink(); ?>" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More »
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

<!-- FAQ's Section for Home Page-->
<?php echo do_shortcode('[faq_home_shortcode posts_per_page="-1" category="home-page-knowledge-base"]'); ?>



<!-- Footer -->
<?php get_footer() ?>