<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-2/3 px-4">
        <h1 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php the_field('page_title'); ?>

        </h1>
        <h2 class="mb-6 text-xl text-white sm:text-xl md:mb-12 md:text-xl"><?php the_field('page_subtitle'); ?></h2>
      </div>
      <!-- Right Section -->
      <div class="w-full lg:w-1/3 px-4">
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-8">
          <form class="flex flex-col gap-4">
            <input
              type="text"
              placeholder="Name"
              name="name"
              class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
            <input
              type="email"
              placeholder="Email"
              name="email"
              class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
            <textarea
              placeholder="Message"
              name="message"
              class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
            <button
              class="block w-full rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</header>

<section class="text-gray-600 bg-gray-200 body-font">
  <div
    class="container mx-auto flex sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 md:flex-row flex-col items-center p-2">
    <div class="lg:flex-grow lg:w-7/12 md:w-full sm:w-full mb-10 md:mb-0 px-5">
      <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:mb-6 mb-4"><?php the_field('section_1_title'); ?>
      </h2>
      <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify">
        <?php the_field('section_1_details'); ?>
      </p>
    </div>
    <div
      class="lg:max-w-lg lg:w-5/12 md:w-full sm:w-full lg:pl-6 md:pl-6 flex flex-col md:items-start md:text-left items-center text-center">
      <div class="flex flex-wrap w-full">
        <figure>
          <img
            class="object-cover object-center rounded mx-auto"
            alt="Picture of Maher Hossain - A Freelance Web Developer in Bangladesh"
            src="<?php echo the_field('section_1_image'); ?>" />
          <figcaption class=" text-center italic">
            <?php the_field('section_1_title'); ?> - Maher Hossain
          </figcaption>
        </figure>

      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div
    class="container mx-auto flex sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 md:flex-row flex-col items-center p-2">

    <div
      class="lg:max-w-lg lg:w-5/12 md:w-full sm:w-full lg:pr-6 md:pr-6 flex flex-col md:items-start md:text-left items-center text-center">
      <div class="flex flex-wrap w-full">
        <figure>
          <img
            class="object-cover object-center rounded mx-auto"
            alt="Picture of Maher Hossain - A Freelance Web Developer in Bangladesh"
            src="<?php echo the_field('section_2_image'); ?>" />
          <figcaption class="text-center italic">
            <?php the_field('section_1_title'); ?> - Maher Hossain
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="lg:flex-grow lg:w-7/12 md:w-full sm:w-full mb-10 md:mb-0 px-5">
      <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:mb-6 mb-4"><?php the_field('section_2_title'); ?>
      </h2>
      <?php the_field('section_2_details'); ?>
    </div>

  </div>
</section>

<section class="text-gray-600 bg-gray-200 body-font">
  <div
    class="container mx-auto flex sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 md:flex-row flex-col items-center p-2">
    <div class="lg:w-1/2 md:w-full sm:w-full mb-10 md:mb-0 px-5">
      <?php the_field('section_3_content_1'); ?>
    </div>
    <div
      class="lg:w-1/2 md:w-full sm:w-full lg:pl-6 md:pl-6 flex flex-col md:items-start md:text-left items-center text-center px-5">
      <?php the_field('section_3_content_2'); ?>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 p-2">
    <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:mb-6 mb-4 text-center"><?php the_field('feature_section_-_title'); ?></h2>
    <?php if (get_field('feature_section_-_subtitle')): ?>
      <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify"><?php the_field('feature_section_-_subtitle'); ?></p>
    <?php endif; ?>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 mt-12">
      <!-- First Row - 3 Columns on Large Screens -->

      <div class="border-2 border-gray-200 rounded-lg p-5">
        <div class="md:w-full sm:w-full mb-10 md:mb-0 px-5">
          <h3 class="title-font font-medium text-gray-900 my-5 text-center"><?php the_field('feature_section_-_content_1'); ?></h3>
          <?php if (get_field('feature_section_1')) : ?>
            <figure>
              <img
                class="h-auto max-w-full object-cover object-center mx-auto rounded-full my-3"
                alt="<?php the_field('feature_section_-_content_1'); ?> - by Maher Hossain "
                src="<?php the_field('feature_section_1'); ?>" />
              <figcaption class=" text-center italic">
            </figure>
          <?php endif; ?>
          <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify"><?php the_field('feature_section_-_content_1_content'); ?></p>
        </div>
      </div>

      <div class="border-2 border-gray-200 rounded-lg p-5">
        <div class="md:w-full sm:w-full mb-10 md:mb-0 px-5">
          <h3 class="title-font font-medium text-gray-900 my-5 text-center"><?php the_field('feature_section_-_content_2'); ?></h3>
          <?php if (get_field('feature_section_2')) : ?>
            <figure>
              <img
                class="h-auto max-w-full object-cover object-center mx-auto rounded-full my-3"
                alt="<?php the_field('feature_section_-_content_2'); ?> - by Maher Hossain "
                src="<?php the_field('feature_section_2'); ?>" />
              <figcaption class=" text-center italic">
            </figure>
          <?php endif; ?>
          <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify">
            <?php the_field('feature_section_-_content_2_content'); ?>
          </p>
        </div>
      </div>

      <div class="border-2 border-gray-200 rounded-lg p-5">
        <div class="md:w-full sm:w-full mb-10 md:mb-0 px-5">
          <h3 class="title-font font-medium text-gray-900 my-5 text-center"><?php the_field('feature_section_-_content_3'); ?></h3>
          <?php if (get_field('feature_section_3')) : ?>
            <figure>
              <img
                class="h-auto max-w-full object-cover object-center mx-auto rounded-full my-3"
                alt="<?php the_field('feature_section_-_content_3'); ?> - by Maher Hossain "
                src="<?php the_field('feature_section_3'); ?>" />
              <figcaption class=" text-center italic">
            </figure>
          <?php endif; ?>
          <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify"><?php the_field('feature_section_-_content_3_content'); ?>
          </p>
        </div>
      </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 mt-6">
      <!-- Second Row - 2 Columns on Large Screens -->
      <div class="border-2 border-gray-200 rounded-lg p-5">
        <div class="md:w-full sm:w-full mb-10 md:mb-0 px-5">
          <h3 class="title-font font-medium text-gray-900 my-5 text-center"><?php the_field('feature_section_-_content_4'); ?></h3>
          <?php if (get_field('feature_section_4')) : ?>
            <figure>
              <img
                class="h-auto max-w-full object-cover object-center mx-auto rounded-full my-3"
                alt="<?php the_field('feature_section_-_content_4'); ?> - by Maher Hossain "
                src="<?php the_field('feature_section_4'); ?>" />
              <figcaption class=" text-center italic">
            </figure>
          <?php endif; ?>
          <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify">
            <?php the_field('feature_section_-_content_4_content'); ?>
          </p>
        </div>
      </div>

      <?php if (get_field('feature_section_-_content_5')) : ?>

        <div class="border-2 border-gray-200 rounded-lg p-5">
          <div class="md:w-full sm:w-full mb-10 md:mb-0 px-5">
            <h3 class="title-font font-medium text-gray-900 my-5 text-center"><?php the_field('feature_section_-_content_5'); ?></h3>
            <?php if (get_field('feature_section_5')) : ?>
              <figure>
                <img
                  class="h-auto max-w-full object-cover object-center mx-auto rounded-full my-3"
                  alt="<?php the_field('feature_section_-_content_5'); ?> - by Maher Hossain "
                  src="<?php the_field('feature_section_5'); ?>" />
                <figcaption class=" text-center italic">
              </figure>
            <?php endif; ?>
            <p class="mx-auto leading-relaxed text-base lg:text-lg text-justify">
              <?php the_field('feature_section_-_content_5_content'); ?>
            </p>
          </div>
        </div>
      <?php endif; ?>
    </div>













  </div>
</section>

<section class="text-gray-600 bg-indigo-100 body-font">
  <div
    class="container mx-auto flex sm:px-4 md:px-24 lg:px-32 lg:py-24 sm:py-8 py-5 md:flex-row flex-col items-center p-2">
    <div class="lg:w-full md:w-full sm:w-full mb-10 md:mb-0 px-5 text-center">
      <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:mb-6 mb-4">Get Started Today
      </h2>
      <p class="mx-auto leading-relaxed text-base lg:text-lg text-center mt-2">
        <?php the_field('section_5_content'); ?>
      </p>
      <a href="<?php echo site_url('/contact'); ?>" class="mx-auto inline-block mt-8 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Contact Me</a>
    </div>
  </div>
</section>

<!-- Recent Works/ Portfolios -->
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg="" title="Showcasing Excellence: Portfolio of a Freelance Web Developer in Bangladesh" description="Explore the portfolio of a seasoned Web Developer in Bangladesh, showcasing diverse projects in web development, WordPress customization, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I specialize in building responsive websites, custom WordPress themes, plugins, and e-commerce solutions. Whether you need a WordPress Developer in Bangladesh, a skilled PHP Developer, or a reliable Laravel Developer in Bangladesh, my portfolio highlights the quality and expertise I bring to every project."]'); ?>

<!-- Testimonials Section for single service page-->
<?php echo do_shortcode('[testimonials_shortcode posts_per_page="4" title="What My Clients Say" description="At the heart of my WordPress Development Services in Bangladesh is a commitment to delivering exceptional results and ensuring client satisfaction. Over the years, I have had the privilege of working with diverse clients, helping them turn their visions into fully functional, high-performing WordPress websites. Here’s what some of them have to say about their experience:" category="upwork, fiverr"]'); ?>

<!-- Clients section to showcase list of clients logo  -->
<?php echo do_shortcode('[clients_shortcode posts_per_page="-1" bg=""]'); ?>

<!-- FAQ's Section for Single Service Page -->
<?php echo do_shortcode('[faq_shortcode posts_per_page="-1"]'); ?>


<?php get_footer(); ?>