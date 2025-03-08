<?php wp_head();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title()?></title>
    <link rel="shortcut icon" href="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/logo/logo.png?raw=true" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://raw.githubusercontent.com/Danialdev01/kvkualaselangor.com/refs/heads/main/src/css/extra.css">
    <script type="module" src="https://raw.githubusercontent.com/Danialdev01/kvkualaselangor.com/refs/heads/main/src/js/extra.js"></script>
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

<header class="pb-20 md:pb-5 lg:pb-0 astro-3EF6KSR2">
	<div class="top-nav hidden md:block astro-3EF6KSR2">
		<div class="social-icon flex p-1 h-7 astro-3EF6KSR2">
			<div class="w-full astro-3EF6KSR2"></div>
			<p class="flex pr-20 astro-3EF6KSR2">

				<!-- top social icon -->
				<a class="px-3 astro-3EF6KSR2" style="width:45px" href="https://www.youtube.com/@kvkualaselangor_official8551"><img src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/icons/youtube.png?raw=true" alt="youtube" class="astro-3EF6KSR2"></a>
				<a class="px-3 astro-3EF6KSR2" style="width:45px" href="https://www.facebook.com/kvks.sel/"><img src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/icons/facebook.png?raw=true" alt="facebook" class="astro-3EF6KSR2"></a>
				<a class="px-3 astro-3EF6KSR2" style="width:45px" href="https://www.instagram.com/kvkualaselangor_official/"><img src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/icons/instagram.png?raw=true" alt="instagram" class="astro-3EF6KSR2"></a>
				<a class="px-3 astro-3EF6KSR2" style="width:43px" href="https://www.google.com/maps/dir/2.9229056,101.6929667/google+maps+kv+kuala+selangor/@3.1457593,101.3959934,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x31cc60db623bb93d:0x3c9391707e336109!2m2!1d101.3981924!2d3.3831747?entry=ttu"><img src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/icons/google-maps.png?raw=true" alt="googlemaps" class="astro-3EF6KSR2"></a>
			</p>
		</div>
		<hr class="astro-3EF6KSR2">
		<!-- top logo icon -->
		<div class="logo p-3 astro-3EF6KSR2" style="padding-left:4% !important">
			<img style="width:160px" src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/logo/banner.png?raw=true" alt="logo" class="astro-3EF6KSR2">
		</div>
	</div>

	<!-- navbar start -->
	<!-- logo for mobile -->
	<div class="mobMenu pt-2 flex md:hidden fixed z-50 astro-3EF6KSR2" style="background-color:#fcfcfc; width:100%;height:60px;padding-top:5px;padding-right:5%;padding-left:5%">

		<div class="md:hidden w-full astro-3EF6KSR2">
			<div class="logo-container p-1 bg-white astro-3EF6KSR2" style="width: fit-content;border-radius: 4px;">
				<img style="width:130px" src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/logo/banner.png?raw=true" alt="logo" class="astro-3EF6KSR2">
			</div>
		</div>
		<div class="menu-open astro-3EF6KSR2">
			<img class="w-10 astro-3EF6KSR2" src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/icons/ham-icon.png?raw=true" alt="ham-icon">
		</div>
	</div>

	<!-- navbar desk -->
	<!-- TODO buat navbar sticky -->
	<div class="mmenu mt-1 astro-3EF6KSR2">
		<!-- close ofcanvas icon -->
		<div class="menu-close astro-3EF6KSR2"><span class="close astro-3EF6KSR2"></span></div>

		<ul class="mmenu-nav px-10 astro-3EF6KSR2" style="background-color:#2B266D;">
			<!-- offcanvas logo -->
			<div class="offcanvas-logo md:hidden astro-3EF6KSR2" style="background-color:rgb(255, 255, 255);width:100%;padding:10px;border-radius: 4px;">
				<img class="md:hidden astro-3EF6KSR2" style="width:150px" src="https://github.com/Danialdev01/kvkualaselangor.com/blob/main/src/image/logo/banner.png?raw=true" alt="logo">
			</div>
			<br class="astro-3EF6KSR2">
            
            <?php
                $i = 0;
                foreach ($menu_list as $item) {
                    $i++;    

                    if (!empty($item['sub_menu'])) {
                        ?>
                        <!-- info koperat -->
                        <li class="item dropdownitem astro-3EF6KSR2">
                            <a href="#" class="nav-dropdown astro-3EF6KSR2"><?php echo htmlspecialchars($item['title'])?></a>
                            <div class="dropdown astro-3EF6KSR2">
                                <ul class="astro-3EF6KSR2">
                                    <?php
                                        foreach ($item['sub_menu'] as $sub_item) {
                                            $sub_menu_items[] = $sub_item; // Add each submenu item to the array
                                            ?>
                                                <li class="item astro-3EF6KSR2">
                                                    <a href="<?php echo $sub_item['url']?>" class="text-white astro-3EF6KSR2 astro-EIMMU3LG">
                                                        <?php echo htmlspecialchars($sub_item['title'])?>
                                                    </a>
                                                </li>
                                            <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </li>

                        <?php
                    }
                    else{
                        ?>
                        <li class="item astro-3EF6KSR2">
                            <a href="<?php echo $item['url']?>" class="text-white astro-3EF6KSR2 active astro-EIMMU3LG">
                                <?php echo htmlspecialchars($item['title'])?>
                            </a>
                        </li>
                        <?php
                    }
                }
            ?>

			<li class="item astro-3EF6KSR2"><a href="/" class="astro-3EF6KSR2"></a></li>
			
		</ul>
	</div>
</header>