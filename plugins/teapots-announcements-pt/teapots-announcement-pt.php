<?php

/**
 * Plugin Name: Teapots Announcements Post Type
 */

add_action( 'init', 'teapots_announcements_pt' );
function teapots_announcements_pt() {

$labels = array(
    'name'                     => __( 'Announcements', 'TEAPOTS' ),
    'singular_name'            => __( 'Announcement', 'TEAPOTS' ),
    'add_new'                  => __( 'Add New', 'TEAPOTS' ),
    'add_new_item'             => __( 'Add New Announcement', 'TEAPOTS' ),
    'edit_item'                => __( 'Edit Announcement', 'TEAPOTS' ),
    'new_item'                 => __( 'New Announcement', 'TEAPOTS' ),
    'view_item'                => __( 'View Announcement', 'TEAPOTS' ),
    'view_items'               => __( 'View Announcements', 'TEAPOTS' ),
    'search_items'             => __( 'Search Announcements', 'TEAPOTS' ),
    'not_found'                => __( 'No Announcements found.', 'TEAPOTS' ),
    'not_found_in_trash'       => __( 'No Announcements found in Trash.', 'TEAPOTS' ),
    'parent_item_colon'        => __( 'Parent Announcements:', 'TEAPOTS' ),
    'all_items'                => __( 'All Announcements', 'TEAPOTS' ),
    'archives'                 => __( 'Announcement Archives', 'TEAPOTS' ),
    'attributes'               => __( 'Announcement Attributes', 'TEAPOTS' ),
    'insert_into_item'         => __( 'Insert into Announcement', 'TEAPOTS' ),
    'uploaded_to_this_item'    => __( 'Uploaded to this Announcement', 'TEAPOTS' ),
    'featured_image'           => __( 'Featured Image', 'TEAPOTS' ),
    'set_featured_image'       => __( 'Set featured image', 'TEAPOTS' ),
    'remove_featured_image'    => __( 'Remove featured image', 'TEAPOTS' ),
    'use_featured_image'       => __( 'Use as featured image', 'TEAPOTS' ),
    'menu_name'                => __( 'Announcements', 'TEAPOTS' ),
    'filter_items_list'        => __( 'Filter Announcement list', 'TEAPOTS' ),
    'filter_by_date'           => __( 'Filter by date', 'TEAPOTS' ),
    'items_list_navigation'    => __( 'Announcements list navigation', 'TEAPOTS' ),
    'items_list'               => __( 'Announcements list', 'TEAPOTS' ),
    'item_published'           => __( 'Announcement published.', 'TEAPOTS' ),
    'item_published_privately' => __( 'Announcement published privately.', 'TEAPOTS' ),
    'item_reverted_to_draft'   => __( 'Announcement reverted to draft.', 'TEAPOTS' ),
    'item_scheduled'           => __( 'Announcement scheduled.', 'TEAPOTS' ),
    'item_updated'             => __( 'Announcement updated.', 'TEAPOTS' ),
    'item_link'                => __( 'Announcement Link', 'TEAPOTS' ),
    'item_link_description'    => __( 'A link to an announcement.', 'TEAPOTS' ),
);

$args = array(
    'labels'                => $labels,
    'description'           => __( 'organize and manage company announcements', 'TEAPOTS' ),
    'public'                => true,
    'hierarchical'          => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'show_in_nav_menus'     => false,
    'show_in_rest'          => true,
    'menu_icon'             => 'dashicons-megaphone',
    'capability_type'       => 'post',
    'supports'              => array( 'title', 'editor', 'revisions' ),
    'has_archive'           => true,
    'rewrite'               => array( 'slug' => 'announcement' ),
);

register_post_type( 'teapots_announcement', $args );

}