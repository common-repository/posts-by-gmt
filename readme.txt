=== Posts by GMT ===
Contributors: rjl20
Tags: gmt, orderby, sort order, posts, post_date, post_date_gmt, utc, time zone
Requires at least: 3.0
Tested up to: 3.2.1
Stable tag: trunk

Changes the default sort order for posts from post_date to post_date_gmt.

== Description ==

Most people don't need this plugin. Most wouldn't notice a difference
if they had it. All it does is change the default sort order of a
WP_Query from posts.post_date to posts.post_date_gmt -- that is, sort
on the GMT timestamp of a post rather than the local time zone.

Who needs this? People who switch time zones frequently. People
running a network installation of WordPress where they want to be able
to aggregate posts from all their network blogs easily, and in the
right order. I don't know. I wrote it for FreeThoughtBlogs.com, so
their "most recent posts" sidebar would stop showing only posts from
a few blogs in early time zones. If it works for you, great.

I have every hope that this plugin will be made obsolete by the
default sort order being changed in the WordPress core. I can think of
no good reason why comments are sorted by GMT but posts by local time.

For all I know, this plugin works with older versions than 3.0. I've
only tested it with 3.2.1.

== Installation ==

The same as with any other WordPress plugin:

1. Upload `posts-by-gmt.php` to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in Wordpress.
3. That's it. There are no configuration options.

== Frequently Asked Questions == 

= Are there any frequently asked questions? =

Not yet.

== Screenshots ==

== Changelog ==

= 1.0 = 
* Initial version.

== Upgrade Notice ==

= 1.0 = 
This is the first release.
