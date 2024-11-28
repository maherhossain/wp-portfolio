<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
    <div class="flex flex-wrap -mx-4">
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
          <div class="">
            <figure>
              <img
                src="<?php echo get_the_post_thumbnail_url() ?>"
                loading="lazy"
                alt="<?php the_title(); ?>"
                class="w-full object-cover object-center transition duration-200 group-hover:scale-110" />

              <figcaption class="text-center italic text-gray-500">
                Caption - <?php the_title(); ?>
              </figcaption>
            </figure>

            <div class="my-3">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Schema for Single Blog Post -->
      <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "<?php the_title(); ?>",
          "description": "<?php echo wp_trim_words(get_the_excerpt(), 150); ?>",
          "articleBody": "<?php echo wp_trim_words(get_the_content(), 150); ?>",
          "image": "<?php echo get_the_post_thumbnail_url(null, 'large'); ?>",
          "author": {
            "@type": "Person",
            "name": "<?php global $post;
                      $author_id = $post->post_author;
                      echo get_the_author_meta('display_name', $author_id); ?>",
            "url": "https://maherhossain.com"
          },
          "publisher": {
            "@type": "Organization",
            "name": "<?php echo str_replace(array('http://', 'https://'), '', home_url()); ?>",
            "logo": {
              "@type": "ImageObject",
              "url": "https://maherhossain.com/images/logo.jpg"
            }
          },
          "datePublished": "<?php echo get_the_time('Y-m-d\TH:i:sP'); ?>",
          "dateModified": "<?php echo get_the_modified_date('Y-m-d\TH:i:sP', get_the_ID()); ?>",
          "keywords": "<?php echo wp_trim_words(get_the_category_list(', ')); ?>",
          "wordCount": "<?php echo str_word_count(strip_tags(get_post_field('post_content', $post->ID))); ?>",
          "commentCount": "<?php echo get_comments_number($post->ID); ?>",
          "interactionStatistic": {
            "@type": "InteractionCounter",
            "interactionType": {
              "@type": "CommentAction"
            },
            "userInteractionCount": "<?php echo get_post_meta(get_the_ID(), 'visit_count', true); ?>"
          },
          "inLanguage": "<?php echo get_bloginfo('language'); ?>",
          "isPartOf": {
            "@type": "Blog",
            "name": "<?php echo get_bloginfo('name'); ?>"
          }
        }
      </script>

    </main>

    <!-- Aside Section (25% on large screens) -->
    <aside
      class="w-full lg:w-1/4 py-6 sm:py-8 lg:py-12 px-2 sm:px-2 lg:px-4 bg-gray-300">
      <div class="bg-gray-100 p-6 rounded-lg shadow-md my-2">
        <h2 class="text-xl font-bold mb-4">Aside Content</h2>
        <p>
          This is the aside section. It takes up 100% width on small and
          medium devices and 25% on large screens.
        </p>
      </div>

      <div class="bg-gray-100 p-6 rounded-lg shadow-md my-2">
        <h2 class="text-xl font-bold mb-4">Aside Content</h2>
        <p>
          This is the aside section. It takes up 100% width on small and
          medium devices and 25% on large screens.
        </p>
      </div>

      <div class="bg-gray-100 p-6 rounded-lg shadow-md my-2">
        <h2 class="text-xl font-bold mb-4">Aside Content</h2>
        <p>
          This is the aside section. It takes up 100% width on small and
          medium devices and 25% on large screens.
        </p>
      </div>
    </aside>
  </div>
</div>

<?php get_footer(); ?>