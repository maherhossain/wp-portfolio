<?php get_header(); ?>
<!-- Banner -->
<section
  class="min-h-16 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden bg-slate-900 py-8 shadow-lg md:py-5 xl:py-5">
  <!-- text start -->
  <div class="relative flex flex-col items-center p-4 sm:max-w-xl">
    <h1
      class="mt-10 mb-8 text-center text-4xl font-bold text-white sm:text-5xl md:mb-12 md:text-5xl">
      <?php the_title(); ?>
    </h1>
  </div>
  <!-- text end -->
</section>
</header>
<div
  class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-12 sm:py-8 py-5 p-2">
  <div class="flex flex-col lg:flex-row gap-4">
    <!-- Main Section (75% on large screens) -->
    <main class="w-full lg:w-3/4 lg:my-0 my-2">
      <div class="bg-white">
        <div class="mx-auto max-w-screen-xl">
          content
        </div>
      </div>

    </main>

    <!-- Aside Section (25% on large screens) -->
    <aside
      class="w-full lg:w-1/4 py-6 sm:py-8 lg:py-12 px-2 sm:px-2 lg:px-4 bg-gray-300">
      side
    </aside>
  </div>
</div>

<?php get_footer(); ?>