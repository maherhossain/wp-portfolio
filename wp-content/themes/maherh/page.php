<?php get_header(); ?>
<?php
while (have_posts()) {
  the_post(); ?>

  <section id="hero" class="bg-primary">
    <div class="container py-4">
      <div class="row pb-0 pe-lg-0 pt-lg-4 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis"><?php the_title(); ?></h1>
          <h4 class="lh-1 text-body-emphasis py-3">Freelance Web Developer in Bangladesh, Specializing in PHP, Laravel, WordPress and MERN Stack.</h4>
        </div>
      </div>
    </div>
  </section>


  <main class="py-5">
    <div class="container">
      <?php the_content(); ?>

    </div>

  </main>


<?php } ?>

<?php get_footer(); ?>