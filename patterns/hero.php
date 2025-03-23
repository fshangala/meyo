<?php
/**
 * Title: Hero Section
 * Slug: meyo/hero
 * Categories: featured
 */

?>
<!-- wp:group {"tagName":"section","className":"hero bg-cover bg-center min-h-screen flex items-center justify-center","style":{"backgroundImage":"url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-bg.jpg' ); ?>')"}} -->
<section class="hero relative w-full min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-bg.jpg' ); ?>');">
    <div class="absolute inset-0 hero-bg"></div> <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Dark overlay -->

    <div class="relative z-10 text-center text-white max-w-5xl px-6">
        <!-- wp:heading {"textAlign":"center","level":1,"className":"text-4xl sm:text-5xl font-bold"} -->
        <h1 class="text-4xl sm:text-5xl font-bold">Centralisez, simplifiez, performez </h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"text-lg sm:text-xl mt-4"} -->
        <p class="text-lg sm:text-xl mt-4">La prospection réinventée par MEYO !</p>
        <!-- /wp:paragraph -->
    </div>
</section>
<!-- /wp:group -->
