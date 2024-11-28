<!-- Call to Action / Contact Section -->
<?php echo do_shortcode('[contact_shortcode bg=""]'); ?>
<!-- Footer -->
<footer class="text-white bg-[#25272d] body-font">
  <div
    class="container sm:px-4 md:px-24 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div
      class="w-80 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a
        class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"
          viewBox="0 0 24 24">
          <path
            d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
        </svg>
        <span class="ml-3 text-xl text-white">Maher Hossain</span>
      </a>
      <p class="mt-2 text-sm text-white text-justify">
        I'm an experienced web developer based in Bangladesh, specialized in WordPress, I'm specializing in crafting dynamic and visually appealing websites. With 7 years of hands-on experience, I've honed my expertise in front-end and back-end development, utilizing the latest technologies and coding languages. My attention to detail, problem-solving abilities, and commitment to delivering high-quality projects have earned me a reputation for excellence. As a dedicated Freelance web Developer in Bangladesh, I'm committed to understanding my clients' unique needs and translating them into compelling online solutions that drive results.
      </p>
    </div>
    <div
      class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <!-- Footer 1 -->
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h4
          class="title-font font-medium text-white tracking-widest text-sm mb-3">
          SERVICES & RESOURCES
        </h4>
        <nav class="list-none mb-10">
          <li>
            <a href="<?php echo site_url('/services/web-application-development/') ?>" class="text-white hover:text-[#007bff]">Web Development</a>
          </li>
          <li>
            <a href="<?php echo site_url('/services/ecommerce-development/') ?>" class="text-white hover:text-[#007bff]">Ecommerce Development</a>
          </li>
          <li>
            <a href="<?php echo site_url('/services/wordpress-development/') ?>" class="text-white hover:text-[#007bff]">WordPress Development</a>
          </li>
          <li>
            <a href="<?php echo site_url('/about/') ?>" class="text-white hover:text-[#007bff]">About</a>
          </li>
          <li>
            <a href="<?php echo site_url('/my-team/') ?>" class="text-white hover:text-[#007bff]">My Team</a>
          </li>
          <li>
            <a href="<?php echo site_url('/testimonials/') ?>" class="text-white hover:text-[#007bff]">Testimonials</a>
          </li>
          <li>
            <a href="<?php echo site_url('/portfolios/') ?>" class="text-white hover:text-[#007bff]">Portfolios</a>
          </li>
          <li>
            <a href="<?php echo site_url('/frequently-asked-questions/') ?>" class="text-white hover:text-[#007bff]">Frequently Asked Questions</a>
          </li>
          <li>
            <a href="<?php echo site_url('/privacy-policy/') ?>" class="text-white hover:text-[#007bff]">Privacy Policy</a>
          </li>
          <li>
            <a href="<?php echo site_url('/terms-and-conditions/') ?>" class="text-white hover:text-[#007bff]">Terms and Conditions</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact/') ?>" class="text-white hover:text-[#007bff]">Contact</a>
          </li>
        </nav>
      </div>
      <!-- Footer 2 -->
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h4
          class="title-font font-medium text-white tracking-widest text-sm mb-3">
          QUICK NAVIGATION
        </h4>
        <nav class="list-none mb-10">
          <li>
            <a href="<?php echo site_url('/faq-for/wordpress/') ?>" class="text-white hover:text-[#007bff]">WordPress FAQ</a>
          </li>
          <li>
            <a href="<?php echo site_url('/fiverr-wordpress-test') ?>" class="text-white hover:text-[#007bff]">Fiverr WordPress Test</a>
          </li>
          <li>
            <a class="text-white hover:text-[#007bff]">Fiverr HTML-5 Test</a>
          </li>
          <li>
            <a class="text-white hover:text-[#007bff]">Fiverr CSS-3 Test</a>
          </li>
        </nav>
      </div>
      <!-- Footer 3 -->
      <div class="lg:w-2/4 md:w-1/2 w-full px-4">
        <h4 class="title-font font-medium text-white tracking-widest text-sm mb-3"> LATEST BLOG</h4>
        <nav class="list-none mb-10">
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order' => 'DESC',
            'orderby' => 'date'
          );

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <li>
                <a class="text-white hover:text-[#007bff]" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
            echo '<li>No   
 posts found.</li>';
          endif;
          ?>
        </nav>
      </div>



    </div>
  </div>
  <div class="bg-slate-900">
    <div
      class="container mx-auto py-4 sm:px-4 md:px-24 flex flex-wrap flex-col sm:flex-row">
      <p class="text-white text-sm text-center sm:text-left">
        Copyright © 2017 - <?php echo date('Y'); ?> - All right reserved by Maher Hossain
      </p>
      <span
        class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-white">
          <svg
            fill="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
          </svg>
        </a>
        <a class="ml-3 text-white">
          <svg
            fill="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
          </svg>
        </a>
        <a class="ml-3 text-white">
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-5 h-5"
            viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path
              d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01" />
          </svg>
        </a>
        <a class="ml-3 text-white">
          <svg
            fill="currentColor"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="0"
            class="w-5 h-5"
            viewBox="0 0 24 24">
            <path
              stroke="none"
              d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>
</body>

</html>