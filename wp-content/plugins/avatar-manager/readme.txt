=== Plugin Name ===
Contributors: cdog
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=SMKJZHX7G3VQS
Tags: avatars, gravatar, profile, users, xml-rpc
Requires at least: 3.5
Tested up to: 4.3
Stable tag: 1.6.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Avatar Manager for WordPress is a sweet and simple plugin for storing avatars locally and more. Easily.

== Description ==

Avatar Manager for WordPress is a sweet and simple plugin for storing avatars
locally and more. Easily.

Enhance your WordPress website by letting your users choose between using
Gravatar or a self-hosted avatar image right from their profile screen. Improved
workflow, on-demand image generation and custom user permissions under a native
interface. Say hello to the Avatar Manager plugin.

= How It’s Made =

Want to find out how Avatar Manager is built? Make sure to read the following
resources.

**Tuts+ Code**

+ [How to Create a WordPress Avatar Management Plugin from Scratch](http://code.tutsplus.com/series/how-to-create-a-wordpress-avatar-management-plugin-from-scratch--wp-33866)

= Get Involved =

**Thank you for choosing to contribute to Avatar Manager!**

Have a bug or a feature request? Please [open a new
issue](https://github.com/resourcestream/avatar-manager/issues). Before opening
any issue, please search for existing issues and read the [Issue
Guidelines](https://github.com/necolas/issue-guidelines), written by [Nicolas
Gallagher](https://github.com/necolas/). Please submit all pull requests against
dev branches.

Avatar Manager is a user-driven project, and all developments and enhancements
depend on users like **you**!

+ [Avatar Manager on GitHub](https://github.com/resourcestream/avatar-manager)

= Authors =

**Cătălin Dogaru**

+ http://twitter.com/resourcestream
+ http://github.com/cdog

= Contributing Developers =

Avatar Manager is brought to you by these fine folks.

[Artem Frolov](https://profiles.wordpress.org/dikiy_forester),
[Brice Capobianco](https://profiles.wordpress.org/brikou),
[Guy Steyaert](https://profiles.wordpress.org/ideos),
[Johan Steen](https://profiles.wordpress.org/artstorm),
[Lucas Uzan](https://profiles.wordpress.org/wiiz83),
[Mateus Neves](https://profiles.wordpress.org/mateusneves),
[Pieter Goosen](https://profiles.wordpress.org/pietergoosen),
[Samantha Muthiah](https://profiles.wordpress.org/schm168),
[Snowboard Mommy](https://profiles.wordpress.org/snowboardmommy)

= Copyright and License =

Copyright © 2013-2015 Cătălin Dogaru

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program; if not, write to the Free Software Foundation, Inc., 51 Franklin
Street, Fifth Floor, Boston, MA 02110-1301, USA.

== Installation ==

Installation is simple as peas.

1. Install Avatar Manager either via the WordPress.org plugin directory, or by
   uploading the files to your server.
2. After activating Avatar Manager, you will be able to customize the plugin
   options under the [Settings Discussion
   Screen](http://codex.wordpress.org/Settings_Discussion_Screen).
3. That’s it. You’re ready to go!

== Frequently Asked Questions ==

= Can I choose between my Gravatar and my custom avatar? =

Yes, you can choose between your Gravatar and your custom avatar under the
[Users Your Profile
Screen](http://codex.wordpress.org/Users_Your_Profile_Screen).

= Can I choose a rating for my custom avatar? =

Yes, you can choose a rating for your custom avatar under the [Users Your
Profile Screen](http://codex.wordpress.org/Users_Your_Profile_Screen).

= Can low privileged users upload their own avatar? =

Yes, you can enable this feature under the [Settings Discussion
Screen](http://codex.wordpress.org/Settings_Discussion_Screen).

= Can I add the self-hosted avatars to my template files? =

Yes, you can add the self-hosted avatars to your template files by using the
WordPress built-in
[`get_avatar()`](http://codex.wordpress.org/Function_Reference/get_avatar)
function to retrieve the avatar for a user who provided a user ID or email
address.

= Can I create a default custom avatar? =

Yes, you can easily add your own by adding a filter to the `avatar_defaults`
hook. After uploading the new image to your theme files, add this to your
theme’s `function.php` file:

`
<?php
function custom_avatar_defaults ( $avatar_defaults ) {
	$avatar_url = get_bloginfo( 'template_directory' ) . '/images/avatar-default.png';
	$avatar_defaults[$avatar_url] = __( 'Custom Default Avatar', 'mytextdomain' );

	return $avatar_defaults;
}

add_filter( 'avatar_defaults', 'custom_avatar_defaults' );
?>
`

Now, go to [Settings Discussion
Screen](http://codex.wordpress.org/Settings_Discussion_Screen) and select your
new avatar from the list.

== Screenshots ==

1. Avatar Manager options under the [Settings Discussion
   Screen](http://codex.wordpress.org/Settings_Discussion_Screen).
2. Avatar Manager options under the [Users Your Profile
   Screen](http://codex.wordpress.org/Users_Your_Profile_Screen).
3. Avatar Manager options under the [Users Your Profile
   Screen](http://codex.wordpress.org/Users_Your_Profile_Screen).

== Changelog ==

= 1.6.0 =

+ Media Library support.
+ Action and filter hooks.
+ Brazilian Portuguese localization.
+ French localization.
+ Major bug fixes.

= 1.5.1 =

+ Minified script files.
+ Minor bug fixes.

= 1.5.0 =

+ Multisite support.
+ Dutch localization.
+ Afrikaans localization.

= 1.4.0 =

* Front-end support.
* Russian localization.
* Minor bug fixes.

= 1.3.0 =

* XML-RPC support.
* Minor bug fixes.

= 1.2.2 =

* Minor bug fixes.

= 1.2.1 =

* Action and filter hooks.

= 1.2.0 =

* Media states.

= 1.1.0 =

* Romanian localization.
* Minor bug fixes.

= 1.0.0 =

* Initial release.
