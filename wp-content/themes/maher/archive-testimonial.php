<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h2 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          <?php if (is_archive()) {
            echo get_the_archive_title();
          } ?>
        </h2>
      </div>
    </div>
  </div>
</section>
</header>
<!-- Header -->
<div class="container mx-auto md:px-24 sm:px-4">
  <div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 lg:gap-12">
        <!-- overview - start -->
        <aside>
          <div class="rounded-lg border p-4 md:sticky md:top-20">
            <h2 class="mb-3 text-lg font-bold text-gray-800 lg:text-xl">
              Customer Reviews
            </h2>

            <div class="mb-0.5 flex items-center gap-2">
              <!-- stars - start -->
              <div class="-ml-1 flex gap-0.5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6 text-yellow-400"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6 text-yellow-400"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6 text-yellow-400"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6 text-yellow-400"
                  viewBox="0 0 20 20"
                  fill="currentColor">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                  <defs>
                    <linearGradient id="half-fill" x1="0" x2="1" y1="0" y2="0">
                      <stop offset="70%" stop-color="#fbbf24" /> <!-- yellow for filled half -->
                      <stop offset="30%" stop-color="#d1d5db" /> <!-- gray for empty half -->
                    </linearGradient>
                  </defs>
                  <path fill="url(#half-fill)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>

              </div>
              <!-- stars - end -->

              <span class="text-sm font-semibold">4.9/5</span>
            </div>

            <span class="block text-sm text-gray-500">Bases on 356 reviews</span>

            <div class="my-5 flex flex-col gap-2 border-t border-b py-5">
              <!-- star - start -->
              <div class="flex items-center gap-3">
                <span
                  class="w-10 whitespace-nowrap text-right text-sm text-gray-600">5 Star</span>

                <div
                  class="flex h-4 flex-1 overflow-hidden rounded bg-gray-200">
                  <span class="h-full w-11/12 rounded bg-yellow-400"></span>
                </div>
              </div>
              <!-- star - end -->

              <!-- star - start -->
              <div class="flex items-center gap-3">
                <span
                  class="w-10 whitespace-nowrap text-right text-sm text-gray-600">4 Star</span>

                <div
                  class="flex h-4 flex-1 overflow-hidden rounded bg-gray-200">
                  <span class="h-full w-1/12 rounded bg-yellow-400"></span>
                </div>
              </div>
              <!-- star - end -->

              <!-- star - start -->
              <div class="flex items-center gap-3">
                <span
                  class="w-10 whitespace-nowrap text-right text-sm text-gray-600">3 Star</span>

                <div
                  class="flex h-4 flex-1 overflow-hidden rounded bg-gray-200">
                  <span class="h-full rounded bg-yellow-400"></span>
                </div>
              </div>
              <!-- star - end -->

              <!-- star - start -->
              <div class="flex items-center gap-3">
                <span
                  class="w-10 whitespace-nowrap text-right text-sm text-gray-600">2 Star</span>

                <div
                  class="flex h-4 flex-1 overflow-hidden rounded bg-gray-200">
                  <span class="h-full rounded bg-yellow-400"></span>
                </div>
              </div>
              <!-- star - end -->

              <!-- star - start -->
              <div class="flex items-center gap-3">
                <span
                  class="w-10 whitespace-nowrap text-right text-sm text-gray-600">1 Star</span>

                <div
                  class="flex h-4 flex-1 overflow-hidden rounded bg-gray-200">
                  <span class="h-full rounded bg-yellow-400"></span>
                </div>
              </div>
              <!-- star - end -->
            </div>

            <button
              class="block  mx-auto rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base" onclick="openModal()">Write a review</button>
          </div>
        </aside>
        <!-- overview - end -->

        <!-- reviews - start -->
        <main class="lg:col-span-2">
          <div class="border-b pb-4 md:pb-6">
            <h2 class="text-lg font-bold text-gray-800 lg:text-xl">
              Top Reviews
            </h2>
          </div>

          <div class="divide-y">
            <!-- review - start -->
            <?php
            $args = array(
              'post_type' => 'testimonial',
              'posts_per_page' => 20,
              'meta_key' => 'date',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'
            );
            $testimonials = new WP_Query($args);
            if ($testimonials->have_posts()) :
              while ($testimonials->have_posts()) : $testimonials->the_post(); ?>

                <div class="flex flex-col gap-3 py-4 md:py-8">
                  <div>
                    <span class="block text-sm font-bold"><?php the_field('client_name'); ?> - <span class="text-sm text-gray-500"><?php the_field('designation'); ?></span></span>
                    <span class="block text-sm text-gray-500">on <?php the_field('project_complete_on'); ?>, <?php the_field('date'); ?></span>
                  </div>


                  <div class="-ml-1 flex gap-0.5">

                    <?php
                    $rating = get_field('rating');
                    if ($rating == 5) {
                      for ($i = 0; $i < $rating; $i++) {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">';
                        echo '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />';
                        echo '</svg>';
                      }
                    } elseif ($rating == 4) {
                      for ($i = 0; $i < $rating; $i++) {
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">';
                        echo '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />';
                        echo '</svg>';
                      }
                      echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor">';
                      echo '<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />';
                      echo '</svg>';
                    }
                    ?>
                  </div>
                  <!-- stars - end -->

                  <p class="text-gray-600">
                    <?php echo strip_tags(apply_filters('the_content', get_the_content())); ?>
                  </p>
                </div>
            <?php endwhile;
              wp_reset_postdata();
            else :
              echo '<p>No services found.</p>';
            endif;
            ?>
          </div>

          <div class="border-t pt-6">
            <a
              href="#"
              class="flex items-center gap-0.5 font-semibold text-indigo-400 transition duration-100 hover:text-indigo-500 active:text-indigo-600">Read all reviews</a>
          </div>
        </main>
        <!-- reviews - end -->
      </div>
    </div>
  </div>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ReviewAggregateRating",
      "itemReviewed": {
        "@type": "WebPage",
        "@id": "https://maherhossain.com",
        "name": "Maher Hossain's Website"
      },
      "ratingValue": "4.8",
      "bestRating": "5",
      "reviewCount": 10,
      "reviews": [<?php
                  $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 4,
                  );
                  $testimonials = new WP_Query($args);

                  $testimonialCount = $testimonials->post_count;
                  $i = 0;

                  if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                      $i++; ?> {
              "@type": "Review",
              "reviewRating": {
                "@type": "Rating",
                "ratingValue": "<?php the_field('rating') ?>",
                "bestRating": "5"
              },
              "reviewBody": "<?php echo strip_tags(apply_filters('the_content', get_the_content())); ?>",
              "author": {
                "@type": "Person",
                "name": "<?php the_field('client_name'); ?>"
              }
            }
        <?php
                      if ($i < $testimonialCount) {
                        echo ',';
                      }
                    endwhile;
                    wp_reset_postdata();
                  endif; ?>
      ]
    }
  </script>





  <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-900 bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg max-w-sm p-6 md:w-3/4 lg:w-3/4 sm:w-full">
      <h2 class="text-lg font-semibold mb-4">Have Worked with me!</h2>


      <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-2 md:px-2">

          <form class="mx-auto max-w-lg rounded-lg border" id="review-form">
            <div class="flex flex-col gap-4 p-4 md:p-8">
              <div>
                <label for="name" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Name</label>
                <input type="text" name="name" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
              </div>
              <div>
                <label for="designation" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Designation</label>
                <input type="text" name="designation" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring" />
              </div>
              <div>
                <label for="review" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Review</label>
                <textarea type="text" name="review" class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"></textarea>
              </div>
              <div>
                <label for="review" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Rating</label>


                <div class="flex items-center">
                  <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                  </svg>
                  </svg>
                </div>
              </div>
            </div>
            <div class="flex items-center justify-center bg-gray-100 p-4">
              <button class="block rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">Submit your Rating</button>
            </div>
          </form>
        </div>
      </div>

      <div class="flex justify-end">
        <button onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded mr-2">Close</button>
      </div>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById("myModal").classList.remove("hidden");
    }

    function closeModal() {
      document.getElementById("myModal").classList.add("hidden");
    }
  </script>

</div>

<!-- Clients section to showcase list of clients logo  -->
<?php echo do_shortcode('[clients_shortcode posts_per_page="-1"]'); ?>

<!-- Footer -->
<?php get_footer() ?>