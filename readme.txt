=== Remove Google Analytics (MonsterInsights) comments ===
Contributors: lowest
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2VYPRGME8QELC
Tags: google, analytics, monsterinsights, monster, insights, remove debug, remove html comments, remove ads
Requires at least: 1.2.0
Stable tag: 1.2.0
Tested up to: 4.7

Removes the Google Analytics advertisement HTML comments from your front-end source code. Only for the MonsterInsights plugin.

== Description ==

A light-weight plugin which will remove the advertisement HTML comments coming from the Google Analytics plugin created by MonsterInsights, such as:

`<!-- This site uses the Google Analytics by MonsterInsights plugin -->`

This is a must-have plugin if you have Google Analytics by MonsterInsights installed.

= Note =
This plugin requires [Google Analytics by MonsterInsights](http://wordpress.org/plugins/google-analytics-for-wordpress/). If you do not have Google Analytics by MonsterInsights activated, this plugin will not work. Also compatible with the pro version of the mentioned plugin.

= Like this plugin? =
If you like this plugin, make sure to rate it 5 stars. Also check out [Remove Yoast SEO comments](http://wordpress.org/plugins/remove-yoast-seo-comments/)!

== Installation ==

1. Upload the 'remove-google-analytics-comments' folder to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. All done! The HTML comments are now removed from your front-end source code.

== Frequently Asked Questions ==

= When Google Analytics by MonsterInsights updates their plugin, will the HTML comments stay removed? =

Yes, they will stay removed.

= Does this plugin add any configuration options? =

No, activate the plugin and you are done! This plugin will not add any extra tables or such to your database.

= Why does this plugin exist? =

The HTML comments coming from the Google Analytics by MonsterInsights plugin give out information such as plugin version and type. When there is a exploit in the Google Analytics by MonsterInsights plugin, hackers may take advantage of that exploit to hack your website. A good reason to remove them.

= Will this plugin modify any of my Google Analytics by MonsterInsights plugin files? =

No, this plugin will not modify any of your Google Analytics by MonsterInsights plugin files.

== Changelog ==

= 1.0.1 =
* Fixed an security vulnerability regarding `target="_blank"` ([read more](https://core.trac.wordpress.org/ticket/36809))
* Added support for WordPress 4.7

= 1.0 =
* Initial release