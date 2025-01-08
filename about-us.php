<?php get_header()
//Template Name:about us
?>
<div class="container mx-auto px-4 py-12 lg:px-8">
    <section>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 mb-24 items-center ">
            <div>
                <h1 class="text-4xl font-bold text-gray-15 mb-4">
                    About Skillbridge
                </h1>
            </div>
            <div>
                <p class="text-gray-35">
                    Welcome to our platform, where we are passionate about empowering individuals to master the world of design and development. We offer a wide range of online courses designed to equip learners with the skills and knowledge needed to succeed in the ever-evolving digital landscape.
                </p>
            </div>
        </div>
    </section>
    <section class="mb-32">
        <div>
            <div class="mb-16">
                <h2 class="font-medium text-4xl mb-2">Achievements</h2>
                <p class="text-base text-gray-35">Our commitment to excellence has led us to achieve significant milestones along our journey. Here are some of our notable achievements</p>
            </div>
            <div class="grid gap-5 md:grid-cols-2 grid-cols-1 mb-10">
                <?php
                $achievements = get_posts(array(
                    'numberposts' => 10,
                    'post_type'   => 'achievement',
                    'orderby' => 'menu_order',
                ));

                foreach ($achievements as $achievement) { ?>
                    <div class="p-6 bg-absolute-white rounded-lg">
                        <div class="text-orange-50 border border-orange-95 rounded-lg h-16 w-16 text-3xl flex justify-center items-center bg-orange-97 mb-5">
                            <?php echo get_post_meta($achievement->ID, 'icon', true) ?>
                        </div>
                        <div class="text-2xl mb-3 font-medium"><?php echo get_post_meta($achievement->ID, 'heading', true) ?></div>
                        <p class="text-gray-600 mb-4"><?php echo get_post_meta($achievement->ID, 'paragraph', true) ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="mb-24">
        <div>
            <div class="mb-16">
                <h2 class="font-medium text-4xl mb-2">Achievements</h2>
                <p class="text-base text-gray-35">Our commitment to excellence has led us to achieve significant milestones along our journey. Here are some of our notable achievements</p>
            </div>
            <div class="grid gap-5 md:grid-cols-2 grid-cols-1 mb-10">
                <?php
                $goals = get_posts(array(
                    'numberposts' => 10,
                    'post_type'   => 'goal',
                    'orderby' => 'menu_order',
                ));

                foreach ($goals as $goal) { ?>
                    <div class="p-6 bg-absolute-white rounded-lg">
                        <div class="text-orange-50 border border-orange-95 rounded-lg h-16 w-16 text-3xl flex justify-center items-center bg-orange-97 mb-5">
                            <?php echo get_post_meta($goal->ID, 'icon', true) ?>
                        </div>
                        <div class="text-2xl mb-3 font-medium"><?php echo get_post_meta($goal->ID, 'heading', true) ?></div>
                        <p class="text-gray-600 mb-4"><?php echo get_post_meta($goal->ID, 'paragraph', true) ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="mb-24">
        <div class="md:flex justify-between items-center p-16 bg-white-99 relative rounded-lg z-10">
            <div class="w-3/4">
                <h2 class="text-4xl font-medium">
                    <span class="text-orange-50 font-medium">Together</span>, let's shape the future of digital innovation
                </h2>
                <p class="text-gray-30">
                    Join us on this exciting learning journey and unlock your potential in design and development.
                </p>
            </div>
            <div>
                <button class="bg-orange-50 text-absolute-white font-bold flex mt-3 py-4 px-6 justify-center items-center gap-2 rounded-lg" type="submit">
                    Join Now    
                </button>
            </div>
            <div class="absolute right-44 top-0 hidden lg:block -z-10">
                <img class="h-[232px]" src="<?php echo get_template_directory_uri(); ?>/img/shape.png" alt="">
            </div>
        </div>
    </section>

</div>


<?php get_footer() ?>