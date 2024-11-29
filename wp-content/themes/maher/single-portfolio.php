<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 pt-20 px-4">
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
<!-- Banner -->
</header>
<div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-12 sm:py-8 py-5 p-2">
  <div class="flex flex-col lg:flex-row gap-4">
    <!-- Main Section (75% on large screens) -->
    <main class="w-full lg:w-4/6 lg:my-0 my-2">
      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Project Overview</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_the_content(); ?></p>

      <div class="my-5">
        <figure>
          <img
            class="w-full object-cover object-center rounded mx-auto"
            alt="<?php the_title(); ?>"
            src="<?php echo get_the_post_thumbnail_url() ?>" />
          <figcaption class="text-center italic">
            <?php the_title(); ?> - by <a href="<?php echo site_url(); ?>">Maher Hossain</a>, Freelance Web Developer in Bangladesh
          </figcaption>
        </figure>
      </div>


      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Client Overview</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('client_overview'); ?></p>
      <ul class="list-disc list-inside mt-4">
        <li class="leading-relaxed text-base lg:text-lg text-justify">Live URL: <a class="text-[#007bff]" target="_blank" href="<?php echo get_field('website_url'); ?>" rel="nofollow"><?php echo get_field('website_url'); ?></a></li>
        <li class="leading-relaxed text-base lg:text-lg text-justify">Contact Email: <a class="text-[#007bff]" href="mailto:<?php echo get_field('client_contact_info'); ?>"><?php echo get_field('client_contact_info'); ?></a></li>
      </ul>

      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Project Goals</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('project_goals'); ?></p>


      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Technologies Used</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify">To meet the project requirements and ensure top-notch performance, I utilized the following tools and technologies: <?php
                                                                                                                                                                                        $technologies_used = get_field('technologies_used');
                                                                                                                                                                                        if (!empty($technologies_used) && is_array($technologies_used)) {
                                                                                                                                                                                          echo  implode(', ', array_map('esc_html', $technologies_used));
                                                                                                                                                                                        } else {
                                                                                                                                                                                          echo 'No options selected.';
                                                                                                                                                                                        }
                                                                                                                                                                                        ?></p>

      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl"><?php the_field('work_process'); ?></h2>

      <h3 class="text-2xl my-3 title-font font-medium text-xl lg:text-2xl text-[#444]">1. <?php the_field('process_1_title'); ?></h3>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('planning_and_strategy'); ?></p>

      <h3 class="text-2xl my-3 title-font font-medium text-xl lg:text-2xl text-[#444]">2. <?php the_field('process_2_title'); ?></h3>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('design_and_development'); ?></p>

      <h3 class="text-2xl my-3 title-font font-medium text-xl lg:text-2xl text-[#444]">3. <?php the_field('process_3_title'); ?></h3>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('testing_and_deployment'); ?></p>

      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Features and Highlights</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('features_and_highlights'); ?></p>

      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Challenges and Solutions</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('challenges_and_solutions'); ?></p>

      <h2 class="my-5 text-3xl font-bold sm:text-5xl md:text-3xl">Results</h2>
      <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('results'); ?></p>


      <!-- Testimonial -->

      <section class="text-gray-600 body-font">
        <div class="container px-5 py-5 mx-auto">
          <div class="xl:w-full lg:w-full w-full mx-auto text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
              <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z" />
            </svg>
            <p class="leading-relaxed text-base lg:text-lg text-justify"><?php echo get_field('client_feedback'); ?></p>
            <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
            <h4 class="text-gray-900 font-medium title-font tracking-wider text-sm"><?php echo get_field('contact_person'); ?></h4>
            <p class="leading-relaxed text-base lg:text-lg text-center"><?php echo get_field('contact_person_designation'); ?></p>
          </div>
        </div>
      </section>

      <!-- CTA -->

      <section class="bg-[#f1f1f1] text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-full md:w-full md:pr-16 lg:pr-0 pr-0">
            <h2 class="title-font font-medium text-3xl text-gray-900 text-center">Looking to Build a Professional Website?</h2>
            <p class="leading-relaxed text-base lg:text-lg mt-4 text-center">If you’re in need of a web development expert to bring your vision to life, <a class="text-[#007bff]" href="<?php echo site_url('/contact') ?>">contact me today</a>. Let’s discuss your project and achieve outstanding results together!</p>
          </div>
        </div>
      </section>


    </main>

    <!-- Aside Section (25% on large screens) -->
    <aside class="w-full lg:w-2/6 lg:my-0 my-2">
      <div class="flex flex-wrap lg:w-full sm:mx-auto sm:mb-2 -mx-2 rounded-lg border p-4 md:sticky md:top-20">
        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Client: <?php echo get_field('client_name'); ?></span></div>
        </div>
        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Live URL: <a class="text-[#007bff]" target="_blank" href="<?php echo get_field('website_url'); ?>" rel="nofollow"><?php echo get_field('website_url'); ?></a></span></div>
        </div>
        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Contact: <a class="text-[#007bff]" href="mailto:<?php echo get_field('client_contact_info'); ?>"><?php echo get_field('client_contact_info'); ?></a></span></div>
        </div>
        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Tools & Stack: <?php
                                                                      $technologies_used = get_field('technologies_used');
                                                                      if (!empty($technologies_used) && is_array($technologies_used)) {
                                                                        echo implode(', ', array_map('esc_html', $technologies_used));
                                                                      } else {
                                                                        echo 'No options selected.';
                                                                      }
                                                                      ?>
            </span>
          </div>
        </div>

        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Duration: <?php echo get_field('project_start_date'); ?> – <?php echo get_field('project_end_date'); ?></span></div>
        </div>

        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Contact Person: <?php echo get_field('contact_person'); ?>,<?php echo get_field('contact_person_designation'); ?> </span></div>
        </div>

        <div class="p-1 sm:w-full w-full">
          <div class="bg-gray-100 rounded flex p-4 h-full items-center"><svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-indigo-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
              <path d="M22 4L12 14.01l-3-3" />
            </svg><span class="title-font font-medium">Completed On: <?php echo get_field('project_completed_on'); ?> – with 5 <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 inline" viewBox="0 0 20 20" fill="currentColor">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg> Rating</span></div>
        </div>
        <div class="p-1 sm:w-full w-full text-center ">
          <h3 class="text-center text-gray-900 text-lg title-font font-medium block py-5">Get in Touch</h3>
          <span class="p-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 inline text-indigo-500" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.83 19.83 0 0 1 3 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72 12.72 12.72 0 0 0 .57 2.57 2 2 0 0 1-.45 2.11L8.91 10.09a16 16 0 0 0 6 6l1.7-1.7a2 2 0 0 1 2.11-.45 12.72 12.72 0 0 0 2.57.57 2 2 0 0 1 1.72 2z" />
            </svg><a href="tel:01799664170"> 01799664170</a></span>
          <br>
          <span class="p-3">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 inline text-indigo-500" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M3 8l7.39 5.26a2 2 0 0 0 2.22 0L21 8" />
              <rect x="3" y="5" width="18" height="14" rx="2"></rect>
            </svg><a href="info@maherhossain.com"> info@maherhossain.com</a>
          </span>

        </div>
      </div>

    </aside>
  </div>
</div>

<?php get_footer(); ?>