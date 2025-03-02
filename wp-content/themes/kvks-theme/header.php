<?php wp_head();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/src/assets/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/src/assets/css/output.css">
    <style>
        h1{
            font-size: 3rem;
        }
        h3{
            font-size: 2rem;
        }
    </style>

</head>

<?php 
    $menu_data = wp_nav_menu( 
        array(
            'theme_location' => 'top-menu', 
            'echo' => false
        )
    );

    require_once get_template_directory() . '/functions/menu.php';
    $menu = parse_menu($menu_data);

    // echo var_dump($menu);
    $menu_list = remove_duplicate_parents($menu);
?>


<header>
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="w-full flex flex-wrap justify-between items-center">
            <div class="px-4 lg:px-6 mb-2 flex flex-wrap justify-between w-full">
                <a href="https://kvkualaselangor.com" class="flex items-center">
                    <img src="<?php echo get_template_directory_uri()?>/src/assets/images/logo-banner.png" class="mt-3 mr-3 h-10 sm:h-12" alt="Kolej Vokasional Kuala Selangor Logo" />
                </a>
                <div class="flex lg:order-2">
                    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <header class="hidden lg:block header w-full mt-4" style="background-color:#203864;color:white">
                <nav class="navbar w-full">
                    <ul class="navbar-nav w-full">

                        <?php
                        $i = 0;
                        foreach ($menu_list as $item) {
                            $i++;    

                            if (!empty($item['sub_menu'])) {
                                ?>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><?php echo strtoupper($item['title'])?></a>
                                    <ul class="dropdown" style="background-color:#203864;color:white">
                                        <?php
                                            foreach ($item['sub_menu'] as $sub_item) {
                                                $sub_menu_items[] = $sub_item; // Add each submenu item to the array
                                                ?>
                                                    <li class="nav-item text-white">
                                                        <a href="<?php echo $sub_item['url']?>" class="nav-link">
                                                            <?php echo strtoupper($sub_item['title'])?>
                                                        </a>
                                                    </li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                </li>                                    
                                <?php
                            }
                            else{
                                ?>
                                <li class="nav-item">
                                    <a href="<?php echo $item['url']?>" class="nav-link">
                                        <?php echo strtoupper($item['title'])?>
                                    </a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </nav>
            </header>
        </div>
    </nav>
</header>

<br><br><br>
<div class="hidden lg:block">
    <br><br><br>
</div>
<?php 
// echo do_shortcode('[wpdreams_ajaxsearchlite]'); 
?>



<aside id="sidebar-multi-level-sidebar" class="lg:hidden fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0" aria-label="Sidebar">
<div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
        <li>
            <center>
                <br>
                <img src="<?php echo get_template_directory_uri()?>/src/assets/images/logo-banner.png" class="mt-3 mr-3 h-10 sm:h-12" alt="Kolej Vokasional Kuala Selangor Logo" />
                <br>
            </center>
        </li>
        <?php 
            $i = 0;
            foreach ($menu_list as $item) {
                $i++;
                
                if (!empty($item['sub_menu'])) {
                    
                    ?>
                        
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-<?php echo strtoupper($item['title'])?>" data-collapse-toggle="dropdown-<?php echo strtoupper($item['title'])?>">
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"><?php echo strtoupper($item['title'])?></span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-<?php echo strtoupper($item['title'])?>" class="hidden py-2 space-y-2">
                                <?php
                                    foreach ($item['sub_menu'] as $sub_item) {
                                        $sub_menu_items[] = $sub_item; // Add each submenu item to the array
                                        ?>
                                        <li>
                                            <a href="<?php echo $sub_item['url']?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                                <?php echo strtoupper($sub_item['title'])?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                ?>
                                
                            </ul>
                        </li>
                    <?php 

                    // foreach ($item['sub_menu'] as $sub_item) {
                    //     $sub_menu_items[] = $sub_item; // Add each submenu item to the array
                    // }
                }
                else{
                    ?>
                    <li>
                        <a href="<?php echo $item['url']?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <span class="ms-3"><?php echo strtoupper($item['title'])?></span>
                        </a>
                    </li>
                    <?php
                }
            }
        ?>
        
    </ul>
</div>
</aside>


<script>
    const navItems = document.querySelectorAll(".nav-item");

        navItems.forEach((item) => {
            const hasDropdowns = item.querySelector(".dropdown") !== null;
            if (hasDropdowns) {
                item.classList.add("icon");
            }
        });
</script>