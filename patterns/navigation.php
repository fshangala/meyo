<?php
/**
 * Title: Navigation
 * Slug: meyo/navigation
 * Categories: header
 * Block Types: core/navigation
 */
?>

<!-- wp:group {"tagName":"nav","className":"meyo-navigation"} -->
<nav class="meyo-navigation">
    <div class="container mx-auto flex items-center justify-between p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/logo.png')); ?>" alt="Logo" class="h-10 w-auto">
            <span class="text-xl font-bold ml-2">Meyo</span>
        </a>

        <!-- Navigation Block -->
        <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"right"}} /-->
    </div>
    <div class="flex justify-end">
      <button class="bg-blue-500 text-white px-4 py-2 rounded">Connexion</button>
    </div>
</nav>
<!-- /wp:group -->
