<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ef6aec1100.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                colors: {
                    absolute: {
                        white: '#FFF',
                        black: '#000',
                    },
                    orange: {
                        50: '#FF9500',
                        70: '#FFBF66',
                        75: '#FFCA80',
                        80: '#FFD499',
                        90: '#FFEACC',
                        95: '#FFF4E5',
                        97: '#FFF9F0',
                        99: '#FFFDFA',
                    },
                    white: {
                        90: '#E4E4E7',
                        95: '#F1F1F3',
                        97: '#F7F7F8',
                        99: '#FCFCFD',
                    },
                    gray: {
                        10: '#191919',
                        15: '#262626',
                        20: '#333333',
                        30: '#4C4C4D',
                        35: '#59595A',
                        40: '#656567',
                        60: '#98989A',
                        70: '#B3B3B3',
                    },
                    primary: {
                        dark: '#FF9500',
                        light: '#FFF4E5',
                    }
                }
            }
        }
    </script>
    <!-- <style>
        .menu-item-2761 {
            background-color: #FF9500;
            padding: 14px 34px;
            border-radius: 8px;
            color: white;
        }

        nav .current-menu-item {
            background-color: #F1F1F3;
            border-radius: 8px;
        }

        nav li {
            padding: 7px 10px;
        }
    </style> -->
</head>

<body class="bg-white-97">

    <header class="container mx-auto">
        <div class="text-center py-2.5 mt-5 bg-orange-50 text-absolute-white lg:mx-7 md:mx-5 mx-4 rounded-md text-sm">
            Free Courses 🌟 Sale Ends Soon, Get It Now<i class="fa-solid ms-3 text-absolute-white fa-right-long"></i>
        </div>
        <div class="lg:px-32 px-10 my-5 flex lg:justify-normal justify-between items-center">
            <div class="flex items-center space-x-2">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } ?>
            </div>
            <div class="md:hidden">
                <input type="checkbox" id="menu-toggle" class="hidden peer">
                <label for="menu-toggle" class="cursor-pointer text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </label>
            </div>
            <nav class="hidden flex-col md:flex md:flex-row md:space-x-8 mr-auto ml-12">
                <?php
                // wp_nav_menu(array(
                //     'theme_location' => 'Primary-menu',
                //     'menu_class' => 'nav items-center flex',

                // ));
    
                 $menu_items =wp_get_nav_menu_items("main-menu");
                 echo '<ul class="flex">';
                 foreach ($menu_items as $menu_item) {
                  echo '<li class="py-3 px-3 rounded-md"><a href="'.$menu_item ->url.'">'.$menu_item->title .'</a></li>';
                 }
                 echo '</ul>';
                ?>
            </nav>
            <div class="hidden lg:flex md:block items-center">
                <?php
                 // wp_nav_menu(array(
                 //     'theme_location' => 'Side-menu',
                 //     'menu_class'=>'flex items-center p-5 gap-4'
                 // ));
                 $menu_items =wp_get_nav_menu_items("Form-menu");
                 // var_dump($menu_items[0]->title);
 
                 echo '<ul class="flex">';
                 foreach ($menu_items as $menu_item) {
                  echo '<li class="py-3 px-6"><a href="'.$menu_item ->url.'">'.$menu_item->title .'</a></li>';
                 }
                 echo '</ul>';

                ?>
            </div>
        </div>

    </header>