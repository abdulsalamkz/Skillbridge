<?php
//Template Name:contact
get_header()
?>

<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 mb-24 items-center ">
        <div>
            <h1 class="text-4xl font-bold text-gray-15 mb-4">
                Contact Us
            </h1>
        </div>
        <div>
            <p class="text-gray-35">
                Welcome to SkillBridge's Pricing Plan page, where we offer two comprehensive options to cater to your needs: Free and Pro. We believe in providing flexible and affordable pricing options for our services. Whether you're an individual looking to enhance your skills or a business seeking professional development solutions, we have a plan that suits you. Explore our pricing options below and choose the one that best fits your requirements.
            </p>
        </div>
    </div>
    <div class="bg-white-99 shadow-lg rounded-lg p-20 lg:flex lg:space-x-6">
        <div class="lg:w-2/3">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                <div class="">
                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-5">First Name</label>
                    <input type="text" id="first-name" placeholder="Enter First Name" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-white-95 w-full outline-none bg-white-97">
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-medium text-gray-700 mb-5">Last Name</label>
                    <input type="text" id="last-name" placeholder="Enter Last Name" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] border-white-95 w-full outline-none bg-white-97">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-5">Email</label>
                    <input type="email" id="email" placeholder="Enter your Email" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] border-white-95 w-full outline-none bg-white-97">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-5">Phone</label>
                    <input type="tel" id="phone" placeholder="Enter Phone Number" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] border-white-95 w-full outline-none bg-white-97">
                </div>
                <div class="col-span-2">
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-5">Subject</label>
                    <input type="text" id="subject" placeholder="Enter your Subject" class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] border-white-95 w-full outline-none bg-white-97">
                </div>
            </div>
            <div class="mb-10">
                <label for="message" class="block text-sm font-medium text-gray-700 mb-5">Message</label>
                <textarea id="message" rows="4" placeholder="Enter your Message here..." class="flex items-center gap-3 py-3 px-3 rounded-lg border border-[#F1F1F3] border-white-95 w-full outline-none bg-white-97 h-[170px]"></textarea>
            </div>
            <div class=" flex items-center justify-center">
                <button class=" w-full md:w-auto px-6 py-2  text-white-99 bg-orange-50 rounded-md hover:bg-orange-600">
                    Send Your Message
                </button>
            </div>
        </div>
        <div class="lg:w-1/3 mt-6 lg:mt-0 space-y-4">
            <div class="flex flex-col justify-center items-center p-7 self-stretch rounded-lg border  border-white-95 bg-white-99">
                <div class="bg-white-97 mb-3 h-12 w-12 flex items-center justify-center rounded-lg">
                    <i class="fa-solid fa-envelope text-gray-15"></i>
                </div>
                <span class="text-gray-30 text-lg">support@skillbridge.com</span>
            </div>
            <div class="flex flex-col justify-center items-center p-7 self-stretch rounded-lg border  border-white-95 bg-white-99">
                <div class="bg-white-97 mb-3 h-12 w-12 flex items-center justify-center rounded-lg">
                    <i class="fa-solid fa-phone text-gray-15"></i>
                </div>
                <span class="text-gray-30 text-lg">+91 00000 00000</span>
            </div>
            <div class="flex flex-col justify-center items-center p-7 self-stretch rounded-lg border  border-white-95 bg-white-99">
                <div class="bg-white-97 mb-3 h-12 w-12 flex items-center justify-center rounded-lg">
                    <i class="fa-solid fa-location-dot text-gray-15"></i>
                </div>
                <span class="text-gray-30 text-lg">Somewhere in the World</span>
            </div>
            <div class="flex flex-col justify-center items-center p-7 self-stretch rounded-lg border  border-white-95 bg-white-99">
                <div class="flex space-x-4 mb-3">
                    <a href="#" class="bg-white-97 h-12 w-12 flex items-center justify-center rounded-lg">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-white-97 h-12 w-12 flex items-center justify-center rounded-lg">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-white-97 h-12 w-12 flex items-center justify-center rounded-lg">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <span class="text-gray-30 text-lg">Social Profiles</span>
            </div>
        </div>
    </div>
</div>

<?php
get_footer()
?>