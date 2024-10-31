<?php
/*
Plugin Name: Posts by GMT
Plugin URI: http://www.elsewhere.org/journal/posts-by-gmt/
Description: Changes the default sort order for posts from post_date to post_date_gmt.
Author: Josh Larios
Version: 1.0
Author URI: http://www.elsewhere.org/
*/ 

function posts_orderby_gmt($orderby) {
  global $wpdb;
  return preg_replace("/" . "$wpdb->posts.post_date" . "($|\s)/",  "$wpdb->posts.post_date_gmt" . "\\1", $orderby);
}

function activate_posts_orderby_gmt() {
  global $wpdb;
  $wpdb->get_results("SHOW INDEX FROM $wpdb->posts WHERE Key_name='post_date_gmt'");
  if (!$wpdb->num_rows) {
    $wpdb->query("CREATE INDEX 'post_date_gmt' ON $wpdb->posts ('post_date_gmt')");
  }
}

register_activation_hook(__FILE__,'activate_posts_orderby_gmt');
add_filter('posts_orderby', 'posts_orderby_gmt');
