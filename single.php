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
        <div class="bg-absolute-white p-6 shadow rounded-lg">
            <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">01</h2>
            <h3 class="text-lg font-semibold text-gray-700 mb-6">Introduction to UI/UX Design</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Understanding UI/UX Design Principles</p>
                        <p class="text-sm text-gray-500">Lesson 01</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 45 Minutes
                    </div>
                </div>
                <div
                    class="flex justify-between items-center p-4 border  border-orange-50 shadow shadow-orange-50/40  rounded-lg ">
                    <div>
                        <p class="text-gray-700 font-medium">Importance of User-Centered Design</p>
                        <p class="text-sm text-gray-500">Lesson 02</p>
                    </div>
                    <div class="text-gray-30 bg-orange-90 px-3 py-1 text-sm rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">The Role of UI/UX Design in Product Development</p>
                        <p class="text-sm text-gray-500">Lesson 03</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 45 Minutes
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-absolute-white p-6 shadow rounded-lg">
            <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">02</h2>
            <h3 class="text-lg font-semibold text-gray-700 mb-6">User Research and Analysis</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Conducting User Research and Interviews</p>
                        <p class="text-sm text-gray-500">Lesson 01</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Analyzing User Needs and Behavior</p>
                        <p class="text-sm text-gray-500">Lesson 02</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Creating User Personas and Scenarios</p>
                        <p class="text-sm text-gray-500">Lesson 03</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 45 Minutes
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-absolute-white p-6 shadow rounded-lg">
            <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">03</h2>
            <h3 class="text-lg font-semibold text-gray-700 mb-6">Wireframing and Prototyping</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Introduction to Wireframing Tools and Techniques</p>
                        <p class="text-sm text-gray-500">Lesson 01</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Creating Low-Fidelity Wireframes</p>
                        <p class="text-sm text-gray-500">Lesson 02</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Prototyping and Interactive Mockups</p>
                        <p class="text-sm text-gray-500">Lesson 03</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-absolute-white p-6 shadow rounded-lg">
            <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">04</h2>
            <h3 class="text-lg font-semibold text-gray-700 mb-6">Visual Design and Branding</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Color Theory and Typography in UI Design</p>
                        <p class="text-sm text-gray-500">Lesson 01</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Visual Hierarchy and Layout Design</p>
                        <p class="text-sm text-gray-500">Lesson 02</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Creating a Strong Brand Identity</p>
                        <p class="text-sm text-gray-500">Lesson 03</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 45 Minutes
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-absolute-white p-6 shadow rounded-lg">
            <h2 class="text-5xl font-bold text-end text-gray-800 mb-4">05</h2>
            <h3 class="text-lg font-semibold text-gray-700 mb-6">Usability Testing and Iteration</h3>
            <div class="space-y-4">
                <div class="flex justify-between items-center p-4 border border-white-95  rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Usability Testing Methods and Techniques</p>
                        <p class="text-sm text-gray-500">Lesson 01</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 1 Hour
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Analyzing Usability Test Results</p>
                        <p class="text-sm text-gray-500">Lesson 02</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 45 Minutes
                    </div>
                </div>
                <div class="flex justify-between items-center p-4 border border-white-95 rounded-lg">
                    <div>
                        <p class="text-gray-700 font-medium">Iterating and Improving UX Designs</p>
                        <p class="text-sm text-gray-500">Lesson 03</p>
                    </div>
                    <div class="bg-white-97 text-gray-35 text-sm items-center px-3 py-1 rounded">
                        <i class="fa-regular fa-clock"></i> 45 Minutes
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>