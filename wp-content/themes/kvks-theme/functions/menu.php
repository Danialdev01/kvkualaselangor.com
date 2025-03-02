<?php
function parse_menu($html) {
    $dom = new DOMDocument();
    // Suppress errors due to malformed HTML
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();

    $menu = [];
    $menu_items = $dom->getElementById('menu-top-header')->getElementsByTagName('li');

    // Array to hold unique menu items globally
    $unique_menu_items = [];

    foreach ($menu_items as $item) {
        // Get the title and URL of the main menu item
        $link = $item->getElementsByTagName('a')->item(0);
        $title = $link->nodeValue;
        $url = $link->getAttribute('href');

        // Create a unique key for the main menu item
        $main_key = $title . '|' . $url;

        // Check if the main menu item is unique
        if (!isset($unique_menu_items[$main_key])) {
            // Initialize the menu item array
            $menu_item = [
                'title' => $title,
                'url' => $url,
                'sub_menu' => []
            ];

            // Add the main menu item to the unique menu items
            $unique_menu_items[$main_key] = $menu_item;

            // Check if the item has a sub-menu
            $sub_menu = $item->getElementsByTagName('ul');
            if ($sub_menu->length > 0) {
                // Get the sub-menu items
                foreach ($sub_menu->item(0)->getElementsByTagName('li') as $sub_item) {
                    $sub_link = $sub_item->getElementsByTagName('a')->item(0);
                    $sub_title = $sub_link->nodeValue;
                    $sub_url = $sub_link->getAttribute('href');

                    // Create a unique key for the submenu item
                    $sub_key = $sub_title . '|' . $sub_url;

                    // Check if the submenu item is unique
                    if (!isset($unique_menu_items[$sub_key])) {
                        // Add to unique menu items
                        $unique_menu_items[$sub_key] = [
                            'title' => $sub_title,
                            'url' => $sub_url
                        ];

                        // Add the submenu item to the current menu item
                        $menu_item['sub_menu'][] = $unique_menu_items[$sub_key];
                    }
                }
            }

            // Update the unique menu items with the current menu item
            $unique_menu_items[$main_key] = $menu_item;
        }
    }

    // Convert the unique menu items back to a simple array
    return array_values($unique_menu_items);
}


function remove_duplicate_parents($menu) {

    // Array to hold unique parent menu items

    $unique_menu = [];

    // Array to track submenu items that have been added as parents

    $submenu_as_parent = [];


    // First, we will collect all submenu items that are also parents

    foreach ($menu as $item) {

        if (!empty($item['sub_menu'])) {

            foreach ($item['sub_menu'] as $sub_item) {

                // Create a unique key for the submenu item

                $sub_key = $sub_item['title'] . '|' . $sub_item['url'];

                $submenu_as_parent[$sub_key] = true; // Mark this submenu as a parent

            }

        }

    }


    // Now, we will build the unique menu array

    foreach ($menu as $item) {

        // Create a unique key for the parent menu item

        $parent_key = $item['title'] . '|' . $item['url'];


        // Check if the parent item is not a submenu item

        if (!isset($submenu_as_parent[$parent_key])) {

            // If it's a unique parent, add it to the unique menu array

            $unique_menu[] = $item;

        }

    }


    return $unique_menu;

}
?>