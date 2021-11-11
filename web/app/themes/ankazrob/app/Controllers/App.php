<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public static function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function brandLogo()
    {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_src = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (has_custom_logo()) {
            return '<img class="brand-logo" src="' . esc_url($logo_src[0]) . '" alt="' . self::siteName() . '">';
        }
        return;
    }
}
