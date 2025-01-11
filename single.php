<?php get_header() ?>
<section class="container mx-auto px-4 py-12 lg:px-8">
    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 mb-16">
        <div>
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <h1 class="text-4xl font-bold text-gray-15 mb-4"><?php the_title() ?></h1>
        </div>
        <div>
            <p class="text-gray-35 "><?php the_excerpt() ?></p>
        </div>
    </div>
    <div>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="rounded-lg w-full">
    </div>
<?php    }
            }
?>
</section>
<section class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <?php
        $modules = get_posts(array(
            'numberposts' => 10,
            'post_type'   => 'module',
            'orderby' => 'menu_order',
        ));

        foreach ($modules as $module) { ?>
            <div class="p-5 bg-absolute-white rounded-lg">
                <h2 class="text-5xl font-bold text-end text-gray-800 mb-4"><?php echo get_post_meta($module->ID, 'module_number', true) ?></h2>
                <h3 class="text-lg font-semibold text-gray-700 mb-6"><?php echo get_post_meta($module->ID, 'module_title', true) ?></h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium"><?php echo get_post_meta($module->ID, 'lesson_title_1', true) ?></p>
                            <p class="text-sm text-gray-500"><?php echo get_post_meta($module->ID, 'lesson_number_1', true) ?></p>
                        </div>
                        <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                            <i class="fa-regular fa-clock"></i><?php echo get_post_meta($module->ID, 'duration_1', true) ?>
                        </div>
                    </div>
                    <div
                        class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium"><?php echo get_post_meta($module->ID, 'lesson_title_2', true) ?></p>
                            <p class="text-sm text-gray-500"><?php echo get_post_meta($module->ID, 'lesson_number_2', true) ?></p>
                        </div>
                        <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                            <i class="fa-regular fa-clock"></i><?php echo get_post_meta($module->ID, 'duration_2', true) ?>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                        <div>
                            <p class="text-gray-700 font-medium"><?php echo get_post_meta($module->ID, 'lesson_title_3', true) ?></p>
                            <p class="text-sm text-gray-500"><?php echo get_post_meta($module->ID, 'lesson_number_3', true) ?></p>
                        </div>
                        <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                            <i class="fa-regular fa-clock"></i><?php echo get_post_meta($module->ID, 'duration_3', true) ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
</section>

<?php get_footer() ?>