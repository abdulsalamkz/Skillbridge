<?php
//Template Name:login
get_header();
?>

<section class="py-10">
    <div class="container mx-auto px-4 lg:px-32 gap-10 grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="mb-10 lg:mb-0 lg:mt-10 mt-0">
            <div class="mb-10 lg:mb-20">
                <h2 class="text-3xl lg:text-4xl font-medium mb-3">Students Testimonials</h2>
                <p class="text-gray-600 text-base lg:text-lg">
                    Lorem ipsum dolor sit amet consectetur. Tempus tincidunt etiam eget elit id imperdiet et. Cras eu sit dignissim lorem nibh et. Ac cum eget habitasse in velit fringilla feugiat senectus in.
                </p>
            </div>
            <div class="bg-white-99 border-0 rounded-b-none p-10 items-start gap-2 self-stretch ">
                <p class="text-grey-30  text-base normal-case font-normal leading-6">
                    The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!
                </p>
            </div>
            <div class="flex justify-between items-center p-3 bg-white-95 rounded-b-lg">
                <div class="flex items-center">
                    <img src="<?php echo get_template_directory_uri() ?> ./img/sarah.png" class="w-10 h-10 rounded-lg">
                    <span class="text-base font-normal font-semibold px-2 leading-6">Sarah L</span>
                </div>
                <div>
                    <button class="flex p-4 px-4 justify-center items-center gap-2 rounded-md border border-white-95 bg-white-97" type="button">Read Full Story</button>
                </div>
            </div>
        </div>

        <div class="w-full mx-auto lg:mx-0 bg-white-99  p-8 rounded-lg">
            <h2 class="text-5xl	 font-semibold text-center mb-6">Login</h2>
            <p class="text-center text-lg text-gray-30 mb-8">Welcome back! Please log in to access your account.</p>

            <form action="#" autocomplete="off">
                <div class="mb-4">
                    <label for="email" autocomplete="off" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white-97 focus:outline-none border-white-95 mt-2 px-3 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your Email" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password" autocomplete="new-password" name="password" class="w-full  border-white-95 mt-2 focus:outline-none border-none bg-white-97 px-3 py-2 border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500" placeholder="Enter your Password" required>
                        <button type="button" class="absolute inset-y-0 right-3 flex items-center">
                            <i class="fas fa-eye text-gray-400"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center mb-4">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 text-sm text-gray-900">Remember Me</label>
                </div>

                <div>
                    <button type="submit" class="w-full bg-orange-50 text-white-99 py-2 px-4 rounded-md hover:bg-orange-600 transition">Login</button>
                </div>

                <div class="mt-4 text-sm text-center">
                    <a href="#" class="text-orange-500 hover:underline">Forgot Password?</a>
                </div>

                <span class="flex justify-between mt-2">
                    <hr class="w-5/12 mt-3 text-white-90">
                    <span class="text-gray-30">OR</span>
                    <hr class="w-5/12 mt-3 text-white-90">
                </span>

                <div>
                    <button type="button" class="w-full flex items-center justify-center bg-white-97 border-white-95 mt-4 text-gray-700 py-2 px-4  border-gray-300 rounded-md shadow-sm hover:bg-gray-50 transition">
                        <i class="fab fa-google mr-2"></i>
                        Login with Google
                    </button>
                </div>

                <div class="mt-4 text-sm text-center mt-2">
                    <p>Don't have an account? <a href="#" class="text-orange-500  underline">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<?php 
get_footer() 
?>