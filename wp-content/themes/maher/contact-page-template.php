<?php
/*
  Template Name: Contact Page
 */
get_header(); ?>
<!-- Banner -->
<section id="header-content" class="bg-slate-900 body-font">
  <div class="container mx-auto sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-5 px-2">
    <div class="flex flex-wrap -mx-4">
      <!-- Left Section -->
      <div class="w-full lg:w-wull px-4">
        <h2 class="mt-10 mb-8 text-3xl font-bold text-white sm:text-4xl md:mb-12 md:text-4xl">
          Get in Touch
        </h2>
      </div>
    </div>
  </div>
</section>
</header>


<section class="text-gray-600 body-font relative">
  <div class="container mx-auto my-12 sm:px-4 md:px-24 lg:px-32 lg:py-14 lg:pb-4 sm:py-8 py-12 px-2 flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0884147492075!2d90.35655007652672!3d23.744226334051593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa79ee653375a5aa7%3A0x360b6e741e449446!2sMH%20Digital%20Bangladesh!5e0!3m2!1sen!2sbd!4v1732201118220!5m2!1sen!2sbd" style="filter: grayscale(1) contrast(1.2) opacity(0.6);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">3rd Floor, House: 11/B, Road: 36, Gulshan-2, Dhaka. Bangladesh</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a href="mailto:info@maherhossain.com" class="text-indigo-500 leading-relaxed">info@maherhossain.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed"><a href="tel:01799664170" class="text-indigo-500 leading-relaxed">01799664170</a></p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Get in Touch</h2>
      <p class="leading-relaxed mb-5 text-gray-600 text-justify">Get in touch today for a free consultation, We are ready to start working on your project. For any queries, please contact us using the form below. You can also email us at <a class="text-indigo-500" href="mailto:info@maherhossain.com">info@maherhossain.com</a></p>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
    </div>
  </div>
</section>

<!-- Recent Works/ Portfolios -->
<?php echo do_shortcode('[portfolios_shortcode posts_per_page="6" bg="" title="Showcasing Excellence: Portfolio of a Freelance Web Developer in Bangladesh" description="Explore the portfolio of a seasoned Web Developer in Bangladesh, showcasing diverse projects in web development, WordPress customization, PHP, and Laravel. As a Freelance Web Developer in Bangladesh, I specialize in building responsive websites, custom WordPress themes, plugins, and e-commerce solutions. Whether you need a WordPress Developer in Bangladesh, a skilled PHP Developer, or a reliable Laravel Developer in Bangladesh, my portfolio highlights the quality and expertise I bring to every project."]'); ?>

<!-- Testimonials Section for Blog-->
<?php echo do_shortcode('[testimonials_shortcode posts_per_page="4" title="What My Clients Say" description="At the heart of my WordPress Development Services in Bangladesh is a commitment to delivering exceptional results and ensuring client satisfaction. Over the years, I have had the privilege of working with diverse clients, helping them turn their visions into fully functional, high-performing WordPress websites. Here’s what some of them have to say about their experience:" category="upwork, fiverr"]'); ?>



<!-- Clients section to showcase list of clients logo  -->
<?php echo do_shortcode('[clients_shortcode posts_per_page="-1" bg=""]'); ?>

<?php get_template_part('footer', 'custom'); ?>