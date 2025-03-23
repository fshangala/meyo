<?php
/**
 * Title: Navigation
 * Slug: meyo/navigation
 * Categories: header
 * Block Types: core/navigation
 */
?>

<!-- wp:group {"tagName":"nav","className":"meyo-navigation"} -->
<nav class="meyo-navigation fixed top-0 right-0 left-0 z-50 p-4 text-white">
    <div class="container mx-auto flex items-center justify-between p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="Logo" class="h-10 w-auto">
            <span class="text-xl font-bold ml-2">Meyo</span>
        </a>

        <div class="primary-menu">
        <!-- Navigation Block -->
        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"right"}} /-->
        </div>
    </div>
    <div class="flex justify-end">
      <a href="#" class="login-btn">Connexion</a>
    </div>
</nav>
<!-- /wp:group -->
