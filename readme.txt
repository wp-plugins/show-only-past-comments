=== Show Only Past Comments ===
Contributors: apasionados, interactivate, netconsulting
Donate link: http://apasionados.es/
Tags: comment, comments
Requires at least: 3.9
Tested up to: 4.1.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Modifies the comment query and shows only comments that have a date and time in the past.

== Description ==

Show Only Past Comments modifies the comment query and shows only comments that have a date and time in the past. Normally WordPress doesn't filter the comment publishing date and shows also comments with a date and time in the future.

Comments with a date and time in the future will appear once the date and time of the comment is reached.

This can be useful to bulk import comments with [WP Ultimate CSV Importer](https://wordpress.org/plugins/wp-ultimate-csv-importer/) so that they appear on WordPress once their publishing date and time is reached.

= Further Reading =
You can access the description of the plugin in Spanish at: [Show Only Past Comments en castellano](http://apasionados.es/blog/mostrar-solo-comentarios-en-el-pasado-wordpress-plugin-6859/).

== Installation ==

1. Upload the `show_only_past_comments` folder to the `/wp-content/plugins/` directory (or to the directory where your WordPress plugins are located)
1. Activate the "Show Only Past Comments" plugin through the 'Plugins' menu in WordPress.
1. Plugin doesn't need any configuration.

== Frequently Asked Questions ==

= What is SHOW ONLY PAST COMMENTS good for? =
This plugin modifies the comment query and shows only comments that have a date and time in the past. Normally WordPress doesn't filter the comment publishing date and shows also comments with a date and time in the future.

= Does SHOW ONLY PAST COMMENTS make changes to the database? =
The plugin doesn't make any changes to the database. It only changes the comments_array of the comments of a post.

= How can I check out if the plugin works for me? =
Install and activate. Change date of a comment into the future. This comment will not be shown until the publishing date is reached. If you disable the plugin the comment will be shown.

= How can I remove SHOW ONLY PAST COMMENTS? =
You can simply activate, deactivate or delete it in your plugin management section.

= Are there any known incompatibilities? =
Please don't use it with *WordPress MultiSite*, as it has not been tested.
We are not aware of any incompatibilities.

= Do you make use of SHOW ONLY PAST COMMENTS yourself? = 
Of course we do. ;-)

== Changelog ==

= 1.0 =
* First release.
* Comments count ("get_comments_number") now only shows comments published in the past and not total count of comments.

= 0.5 =
* First beta release.

== Upgrade Notice ==

= 1.0 =
* First release.

== Contact ==

For further information please send us an [email](http://apasionados.es/contacto/index.php?desde=wordpress-org-showonlypastcomments-contact).
