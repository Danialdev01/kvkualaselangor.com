<?php
function parse_menu($html, $type) {
    // Early return for empty HTML
    if (empty($html) || !is_string($html)) {
        error_log("parse_menu: Empty or invalid HTML provided for menu type: " . $type);
        return [];
    }

    try {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        
        // Ensure proper HTML structure
        $wrapped_html = '<!DOCTYPE html><html><body><div id="menu-container">' . $html . '</div></body></html>';
        
        if (!$dom->loadHTML($wrapped_html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD)) {
            error_log("parse_menu: Failed to load HTML for menu type: " . $type);
            return [];
        }
        
        libxml_clear_errors();

        $menu = [];
        
        // Try multiple ways to find the menu
        $menu_container = $dom->getElementById($type);
        
        if (!$menu_container) {
            $menu_container = $dom->getElementById('menu-container');
        }
        
        if (!$menu_container) {
            // Try to find any UL element
            $uls = $dom->getElementsByTagName('ul');
            if ($uls->length > 0) {
                $menu_container = $uls->item(0);
            }
        }

        if (!$menu_container) {
            error_log("parse_menu: No menu container found for type: " . $type);
            return [];
        }

        $menu_items = $menu_container->getElementsByTagName('li');
        
        if ($menu_items->length === 0) {
            error_log("parse_menu: No menu items found in container for type: " . $type);
            return [];
        }

        $unique_menu_items = [];

        foreach ($menu_items as $item) {
            $links = $item->getElementsByTagName('a');
            if ($links->length === 0) {
                continue;
            }
            
            $link = $links->item(0);
            $title = trim($link->textContent);
            $url = $link->getAttribute('href');

            if (empty($title)) {
                continue;
            }

            $main_key = $title . '|' . $url;

            if (!isset($unique_menu_items[$main_key])) {
                $menu_item = [
                    'title' => $title,
                    'url' => $url,
                    'sub_menu' => []
                ];

                // Look for submenus
                $sub_menus = $item->getElementsByTagName('ul');
                if ($sub_menus->length > 0) {
                    $sub_items = $sub_menus->item(0)->getElementsByTagName('li');
                    
                    foreach ($sub_items as $sub_item) {
                        $sub_links = $sub_item->getElementsByTagName('a');
                        if ($sub_links->length > 0) {
                            $sub_link = $sub_links->item(0);
                            $sub_title = trim($sub_link->textContent);
                            $sub_url = $sub_link->getAttribute('href');

                            if (!empty($sub_title)) {
                                $sub_key = $sub_title . '|' . $sub_url;
                                
                                if (!isset($unique_menu_items[$sub_key])) {
                                    $menu_item['sub_menu'][] = [
                                        'title' => $sub_title,
                                        'url' => $sub_url
                                    ];
                                    $unique_menu_items[$sub_key] = true;
                                }
                            }
                        }
                    }
                }

                $unique_menu_items[$main_key] = $menu_item;
                $menu[] = $menu_item;
            }
        }

        return $menu;

    } catch (Exception $e) {
        error_log("parse_menu: Exception occurred for menu type " . $type . ": " . $e->getMessage());
        return [];
    }
}

// Keep the remove_duplicate_parents function as is
function remove_duplicate_parents($menu) {
    $unique_menu = [];
    $submenu_as_parent = [];

    foreach ($menu as $item) {
        if (!empty($item['sub_menu'])) {
            foreach ($item['sub_menu'] as $sub_item) {
                $sub_key = $sub_item['title'] . '|' . $sub_item['url'];
                $submenu_as_parent[$sub_key] = true;
            }
        }
    }

    foreach ($menu as $item) {
        $parent_key = $item['title'] . '|' . $item['url'];
        if (!isset($submenu_as_parent[$parent_key])) {
            $unique_menu[] = $item;
        }
    }

    return $unique_menu;
}
?>