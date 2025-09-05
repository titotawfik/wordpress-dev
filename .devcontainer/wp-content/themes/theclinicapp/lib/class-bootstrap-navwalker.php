<?php

/**
 * Bootstrap Navwalker
 * 
 * @package TheClinicApp
 */

// class Bootstrap_Navwalker extends Walker_Nav_Menu
// {
//     // Start Level
//     function start_lvl(&$output, $depth = 0, $args = null)
//     {
//         $indent = str_repeat("\t", $depth);
//         $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
//     }

//     // Start Element
//     function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
//     {
//         $indent = ($depth) ? str_repeat("\t", $depth) : '';

//         $classes = empty($item->classes) ? array() : (array) $item->classes;

//         if ($depth === 0) {
//             $classes[] = 'nav-item';
//         }

//         if (in_array('menu-item-has-children', $classes)) {
//             $classes[] = 'dropdown';
//         }

//         $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
//         $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

//         $output .= $indent . '<li' . $class_names . '>';

//         $atts = array();
//         $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
//         $atts['target'] = !empty($item->target) ? $item->target : '';
//         $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
//         $atts['href'] = !empty($item->url) ? $item->url : '#';

//         if ($depth === 0) {
//             $atts['class'] = 'nav-link';
//         } else {
//             $atts['class'] = 'dropdown-item';
//         }

//         if (in_array('menu-item-has-children', $classes)) {
//             $atts['class'] .= ' dropdown-toggle';
//             $atts['data-bs-toggle'] = 'dropdown';
//             $atts['aria-expanded'] = 'false';
//             $atts['role'] = 'button';
//         }

//         $attributes = '';
//         foreach ($atts as $attr => $value) {
//             if (!empty($value)) {
//                 $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
//                 $attributes .= ' ' . $attr . '="' . $value . '"';
//             }
//         }

//         // Custom Title Logic
//         $title = apply_filters('the_title', $item->title, $item->ID);

//         // Check if this is the home link (by URL or by object_id matching front page ID)
//         if (trailingslashit($item->url) == trailingslashit(home_url('/'))) {
//             $title = '<span class="visually-hidden">Home</span><i class="fa fa-home" aria-hidden="true"></i>';
//         }

//         $output .= '<a' . $attributes . '>';
//         $output .= $title;
//         $output .= '</a>';
//     }
// }
class Bootstrap_Navwalker extends Walker_Nav_Menu
{
    // Start Level
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        if ($depth === 0) {
            // Start mega menu UL + row
            $output .= "\n$indent<ul class=\"dropdown-menu mega-menu p-4\"><div class=\"row\">\n";

            // Determine which image to load based on parent menu title
            if (!empty($args->menu_item) && isset($args->menu_item->title)) {
                $menu_title = strtolower($args->menu_item->title);
            } else {
                $menu_title = '';
            }

            if (strpos($menu_title, 'feature') !== false) {
                $img = get_template_directory_uri() . '/assets/images/features.jpg';
            } elseif (strpos($menu_title, 'service') !== false) {
                $img = get_template_directory_uri() . '/assets/images/services.jpg';
            } else {
                $img = get_template_directory_uri() . '/assets/images/default.jpg';
            }

            // Append image column right inside the row
            $output .= '<div class="col-md-6 img-content order-md-2"><img src="' . esc_url($img) . '" class="img-fluid" alt=""></div>';
            $output .= '<div class="col-md-6 order-md-1">';
        } else {
            $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
        }
    }

    // End Level
    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);

        if ($depth === 0) {
            $output .= "</div>$indent</div></ul>\n"; // close col + row + ul
        } else {
            $output .= "$indent</ul>\n";
        }
    }

    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? [] : (array) $item->classes;

        if ($depth === 0) $classes[] = 'nav-item';
        if (in_array('menu-item-has-children', $classes)) $classes[] = 'dropdown';

        $class_names = join(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = [
            'title'  => !empty($item->attr_title) ? $item->attr_title : '',
            'target' => !empty($item->target) ? $item->target : '',
            'rel'    => !empty($item->xfn) ? $item->xfn : '',
            'href'   => !empty($item->url) ? $item->url : '#',
        ];

        $atts['class'] = $depth === 0 ? 'nav-link' : 'dropdown-item';
        if (in_array('menu-item-has-children', $classes)) {
            $atts['class'] .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown';
            $atts['aria-expanded'] = 'false';
            $atts['role'] = 'button';
        }

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= " $attr=\"$value\"";
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        if (trailingslashit($item->url) == trailingslashit(home_url('/'))) {
            $title = '<span class="visually-hidden">Home</span><i class="fa fa-home" aria-hidden="true"></i>';
        }

        $output .= "<a$attributes>$title</a>";
    }

    // End Element
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}
