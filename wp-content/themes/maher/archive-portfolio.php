<?php get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h1 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          Professional Web Development Portfolios
        </h1>
      </div>
    </div>
  </div>
</section>
</header>

<!-- Recent Works/ Portfolios -->
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg="" title="Showcasing Excellence: Portfolio of a Freelance Web Developer in Bangladesh" description="Explore the portfolio of a seasoned Web Developer in Bangladesh, showcasing diverse projects in web development, WordPress customization, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I specialize in building responsive websites, custom WordPress themes, plugins, and e-commerce solutions. Whether you need a WordPress Developer in Bangladesh, a skilled PHP Developer, or a reliable Laravel Developer in Bangladesh, my portfolio highlights the quality and expertise I bring to every project."]'); ?>

<!-- FAQ's Section for Portfolio Archive Page-->
<?php echo do_shortcode('[faq_shortcode posts_per_page="-1" category="portfolios-archive"]'); ?>

<?php get_footer(); ?>