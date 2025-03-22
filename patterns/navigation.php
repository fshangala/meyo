<?php
/**
 * Title: Navigation
 * Slug: meyo/navigation
 * Categories: header
 * Block Types: core/navigation
 */
?>

<nav class="bg-white shadow-md">
  <div class="container mx-auto flex items-center justify-between p-4">
    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center">
      <img src="<?php echo get_theme_file_uri('/assets/logo.png'); ?>" alt="Logo" class="h-10 w-auto">
      <span class="text-xl font-bold ml-2">Meyo</span>
    </a>

    <!-- Navigation -->
    <div class="hidden md:flex space-x-6">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary_menu',
          'container'      => false,
          'menu_class'     => 'flex space-x-6',
          'fallback_cb'    => false,
          'depth'          => 1,
          'walker'         => new Meyo_Nav_Walker(),
      ]);
      ?>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-toggle" class="md:hidden text-gray-700">
      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white shadow-md p-4">
    <?php
    wp_nav_menu([
        'theme_location' => 'primary_menu',
        'container'      => false,
        'menu_class'     => 'block space-y-2',
        'fallback_cb'    => false,
        'depth'          => 1,
        'walker'         => new Meyo_Nav_Walker(),
    ]);
    ?>
  </div>
</nav>

