<?php
        function bingofy_post_types(){
            // Bingo Post Type
            register_post_type('bingo', array(
                'supports' => array('title', 'editor', 'excerpt'),
                'rewrite' => array('slug' => 'bingo'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => 'Bingo',
                    'add_new_item' => 'Add New Bingo',
                    'edit_item' => 'Edit Bingo',
                    'all_items' => 'All Bingos',
                    'singular_name' => 'Bingo'
                ),
                'menu_icon' => 'dashicons-grid-view'
            ));

            // Match Post Type
            register_post_type('match', array(
                'supports' => array('title', 'editor'),
                'rewrite' => array('slug' => 'matches'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => 'Matches',
                    'add_new_item' => 'Add New Match',
                    'edit_item' => 'Edit Match',
                    'all_items' => 'All Matches',
                    'singular_name' => 'Match'
                ),
                'menu_icon' => 'dashicons-games'
            ));
        }
        add_action('init', 'bingofy_post_types');
