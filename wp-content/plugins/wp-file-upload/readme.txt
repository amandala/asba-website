=== Wordpress File Upload ===
Contributors: nickboss
Donate link: http://www.iptanus.com/support/wordpress-file-upload
Tags: ajax, captcha, filter, form, html5, notification, page, plugin, post, redirect, responsive, shortcode, sidebar, upload, widget
Requires at least: 2.9.2
Tested up to: 4.2.4
Stable tag: "trunk"
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple yet very powerful plugin to allow users to upload files to your website from any page and manage the uploaded files

== Description ==

With this plugin you or other users can upload files to your site from any page, easily and securely.

Simply put the shortcode [wordpress_file_upload] to the contents of any WordPress page and you will be able to upload files to any directory inside wp-contents of your WordPress site.

You can add custom fields to submit additional data together with the uploaded file.

The plugin includes a file browser to access and manage the uploaded files from the Dashboard (only for admins currently).

Several filters and actions before and after file upload enable extension of its capabilities.

The characteristics of the plugin are:

* It uses the latest HTML5 technology, however it will also work with old browsers and mobile phones.
* It can be added in posts, pages or sidebars (as a widget).
* It supports additional form fields (like checkboxes, text fields, email fields, dropdown lists etc).
* It produces notification messages and e-mails.
* It supports selection of destination folder from a list of subfolders.
* Upload progress can be monitored with a progress bar.
* It supports redirection to another url after successful upload.
* There can be more than one instances of the shortcode in the same page or post.
* Uploaded files can be added to Media or be attached to the current page.
* It is highly customizable with many (more than 50) options.
* It supports filters and actions before and after file upload.
* It contains a visual editor for customizing the plugin easily without any knowledge of shortcodes or programming
* It supports logging of upload events or management of files, which can be viewed by admins through the Dashboard.
* It includes a file browser in the Dashboard, from where admins can view the uploaded files and manage them.
* It supports multilingual characters and localization.

The plugin is translated in the following languages:

* German
* French, kindly provided by Thomas Bastide of http://www.omicronn.fr/
* Serbian, kindly provided by Andrijana Nikolic of http://webhostinggeeks.com/
* Greek

Please note that old desktop browsers or mobile browsers may not support all of the above functionalities. In order to get full functionality use the latest versions browsers, supporting HTML5, AJAX and CSS3.

For additional features, such as multiple file upload, very large file upload, drag and drop of files, captcha, detailed upload progress bars, list of uploaded files, image gallery and custom css please consider [Wordpress File Upload Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Wordpress File Upload support page").

Please visit the **Other Notes** section for customization options of this plugin.

== Installation ==

1. First install the plugin using Wordpress auto-installer or download the .zip file from wordpress.org and install it from the Plugins section of your Dashboard or copy wordpress_file_upload directory inside wp-contents/plugins directory of your wordpress site.
1. Activate the plugin from Plugins section of your Dashboard.
1. In order to use the plugin simply go to the Dashboard / Settings / Wordpress File Upload and follow the instructions in Plugin Instances or alternatively put the shortcode [wordpress_file_upload] in the contents of any page.
1. Open the page on your browser and you will see the upload form.
1. You can change the upload directory or any other settings easily by pressing the small edit button found at the left-top corner of the upload form. A new window (or tab) with pop up with plugin options. If you do not see the new window, adjust your browser settings to allow pop-up windows.
1. Full documentation about the plugin options can be found at https://wordpress.org/plugins/wp-file-upload/other_notes/ or at http://www.iptanus.com/wordpress-plugins/wordpress-file-upload/ (including the Pro version)

A getting started guide can be found at http://www.iptanus.com/getting-started-with-wordpress-file-upload-plugin/

== Frequently Asked Questions ==

= Will the plugin work in a mobile browser? =

Yes, the plugins will work in most mobile phones (has been tested in iOS, Android and Symbian browsers as well as Opera Mobile) 

= Do I need to have Flash to use then plugin? =

No, you do not need Flash to use the plugin.

= I get a SAFE MODE restriction error when I try to upload a file. Is there an alternative?  =

Your domain has probably turned SAFE MODE ON and you have restrictions uploading and accessing files. Wordpress File Upload includes an alternative way to upload files, using FTP access. Simply add the attribute **accessmethod="ftp"** inside the shortcode, together with FTP access information in **ftpinfo** attribute.

= Can I see the progress of the upload? =

Yes, you can see the progress of the upload. During uploading a progress bar will appear showing progress info, however this functionality functions only in browsers supporting HTML5 upload progress bar.

= Can I upload many files at the same time? =

Yes, but not in the free version. If you want to allow multiple file uploads, please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Wordpress File Upload support page") version.

= Where do files go after upload? =

Files by default are uploaded inside wp-content directory of your Wordpress website. To change it use attribute uploadpath.

= Can I see and download the uploaded files? =

Administrators can view all uploaded files together with associated field data from the plugin's Settings in Dashboard. The [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Wordpress File Upload support page") version of the plugin allows users to view their uploaded files, either from the Dashboard, or from a page or post.

= Are there filters to restrict uploaded content? =

Yes, you can control allowed file size and file extensions by using the appropriate attribute (see Other Notes section).

= Are there any upload file size limitations? =

Yes, there are file size limitations imposed by the web server or the host. If you want to upload very large files, please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Wordpress File Upload support page") version of the plugin, which surpasses size limitations.

= Who can upload files? =

By default all users can upload files. You can define which user roles are allowed to upload files. Even guests can be allowed to upload files. If you want to allow only specific users to upload files, then please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Wordpress File Upload support page") version of the plugin.

= What security is used for uploading files? =

The plugin is designed not to expose website sensitive information. It has been tested by experts and verified that protects against CSRF and XSS attacks. All parameters passing from server to client side are encoded and sanitized. For higher protection, like use of captcha, please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Wordpress File Upload support page") version of the plugin.

= What happens if connection is lost during a file upload? =

In the free version the upload will fail. However in the Pro version the upload will resume and will continue until the file is fully uploaded. This is especially useful when uploading very large files.

= The plugin does not look nice with my theme. What can I do? =

There is an option in plugin's settings in Dashboard to relax the CSS rules, so that buttons and text boxes inherit the theme's styles. If additional styling is required, this can be done using CSS. The Professional version of the plugin allows CSS rules to be embed in the shortcode.

== Screenshots ==

1. A screenshot of the plugin in its most simple form.
2. A screenshot of the plugin showing the progress bar.
3. A screenshot of the plugin showing the successful upload message.
4. A screenshot of the plugin with additional form fields.
5. A screenshot of the plugin with subfolder selection.
6. A screenshot of the plugin in a sidebar.
7. A screenshot of the shortcode composer.
8. A screenshot of the file browser.

== Changelog ==

= 3.4.0 =
* added fitmode attribute to make the plugin responsive
* added widget "Wordpress File Upload Form", so that the uploader can be installed in a sidebar
* changes to Shortcode Composer so that it can edit plugin instances existing in sidebars as widgets
* changes to Uploader Instances in plugin's area in Dashboard to show also instances existing inside sidebars
* added the ability to define dimensions (width and height) for the whole plugin
* dimensioning of plugin's elements improved when fitmode is set to "responsive"
* filter and non-object warnings of front-end file browser, appearing when DEBUG mode is ON, removed
* bug fixed to front-end file browser to hide Shortcode Composer button for non-admin users
* logic changed to front-end file browser to allow users to download files uploaded by other users
* code changed to front-end file browser to show a message when a user attempts to delete a file that was not uploaded by him/her

= 3.3.1 =
* bug corrected that was breaking plugin operation for php versions prior to 5.3
* added a "Maintenance Actions" section in plugin's Dashboard page
* added option in plugin's "Maintenance Actions" to completely clean the database log

= 3.3.0 =
* userdatalabel attribute changed to allow many field types
* added the following user data field types: simple text, multiline text, number, email, confirmation email, password, confirmation password, checkbox, radiobutton, date, time, datetime, listbox and dropdown list
* added several options to configure the new user data fields: label text (to define the label of the field), label position (to define the position of the label in relation to the field), required option (to define if the field needs to be filled before file upload), do-not-autocomplete option (to prevent the browsers for completing the field automatically), validate option (to perform validity checks of the field before file upload depending on its type), default text (to define a default value), group id (to group fields together such as multiple radio buttons), format text (to define field formatting depending on the field type), typehook option (to enable field validation during typing inside the field), hint position (to define the position of the message that will be shown to prompt the user that a required field is empty or is not validated) as well as an option to define additional data depending on the field type (e.g. define list of items of a listbox or dropdown list)
* Shortcode Composer changed to support the new user data fields and options
* placement attribute can accept more than one instances of userdata
* fixed bug not showing date selector of date fields in Shortcode Composer when working with Firefox or IE browsers
* in some cases required userdata input field will turn red if not populated
* shortcode_exists and wp_slash fixes for working before 3.6 Wordpress version
* minor bug fixes

= 3.2.1 =
* removed 'form-field' class from admin table tr elements
* corrected bug that was causing problems in uploadrole and uploaduser attributes when a username or role contained uppercase letters
* uploadrole and uploaduser attributes logic modified; guests are allowed only if 'guests' word is included in the attribute
* modifications to the download functionality script to be more robust
* corrected bug that was not showing options below a line item of admin tables in Internet Explorer
* several feature additions and bug fixes in Professional version

= 3.2.0 =
* added option in plugin's settings to relax CSS rules so that plugin inherits theme styling
* modifications in html and css of editable subfolders feature to look better
* modifications in html and css of prompt message when a required userdata field is empty
* PLUGINDIR was replaced by WP_PLUGIN_DIR so that the plugin can work for websites where the contents dir is other than wp-content
* fixed bug that was not allowing Shortcode Composer to launch when the shortcode was too big
* fixed bug that was causing front-end file list not to work properly when no instance of the plugin existed in the same page / post

= 3.1.2 =
* important bug detected and fixed that was stripping slashes from post or page content when updating the shortcode using the shortcode composer

= 3.1.1 =
* the previous version broke the easy creation of shortcodes through the plugin's settings in Dashboard and it has been corrected, together with some improvements

= 3.1.0 =
* an important feature (front-end file browser) has been added in professional version 3.1.0
* added port number support for uploads using ftp mode
* corrected bug that was not showing correctly in file browser files that were uploaded using ftp mode
* eliminated confirmbox warning showing in page when website's DEBUG mode is ON
* eliminated warning: "Invalid argument supplied for foreach() in ...plugins/wordpress-file-upload-pro/lib/wfu_admin.php on line 384"
* eliminated warning: "Notice: Undefined index: postmethod in /var/www/wordpress/wp-content/plugins/wordpress-file-upload-pro/lib/wfu_functions.php on line 1348"
* eliminated warnings in plugin's settings in Dashboard

= 3.0.0 =
* major version number has advanced because an important feature has been added in Pro version (logged users can browse their uploaded files through their Dashboard)
* several code modifications in file browser to make the plugin more secure against hacking, some functionalities in file browser have slightly changed
* new file browser cannot edit files that were not uploaded with the plugin and it cannot edit or create folders
* upload path cannot be outside the wordpress installation root
* files with extension php, js, pht, php3, php4, php5, phtml, htm, html and htaccess are forbidden for security reasons

= 2.7.6 =
* added functionality in Dashboard to add the plugin to a page automatically
* fixed bug that was not showing the Shortcode Composer because the plugin could not find the plugin instance when the shortcode was nested in other shortcodes

= 2.7.5 =
* added German and Greek translation

= 2.7.4 =
* added Serbian translation thanks to Andrijana Nikolic from http://webhostinggeeks.com/
* bug fix with %blogid%, %pageid% and %pagetitle% that where not implemented in notification emails
* in single button operation selected files are removed in case that a subfolder has not been previously selected or a required user field has not been populated
* bug fixed in single file operation that allowed selection of multiple files through drag-and-drop
* bug fixed with files over 1MB that got corrupted when maintaining files with same filename
* dummy (test) Shortcode Composer button removed from the plugin's Settings as it is no longer useful
* added support for empty (zero size) files
* many code optimizations and security enhancements
* fixed javascript errors in IE8 that were breaking upload operation
* code improvements to avoid display of session warnings
* added %username% in redirect link
* added option in plugin's Settings in Dashboard to select alternative POST Upload method, in order to resolve errors like "http:// wrapper is disabled in the server configuration by allow_url_fopen" or "Call to undefined function curl_init()"
* added filter action wfu_after_upload, where the admin can define additional javascript code to be executed on user's browser after each file is finished

= 2.7.3 =
* important bug fix in Pro version
* added wfu_before_email_notification filter
* corrected bug not showing correctly special characters (double quotes and braces) in email notifications

= 2.7.2 =
* important bug fix in Pro version, very slight changes in free version

= 2.7.1 =
* fixed bug with faulty plugin instances appearing when Woocommerce plugin is also installed
* Upload of javascript (.js) files is not allowed for avoiding security issues
* fixed bug with medialink and postlink attributes that were not working correctly
* when medialink or postlink is activated, the files will be uploaded to the upload folder of WP website
* when medialink or postlink is activated, subfolders will be deactivated
* added option in subfolders to enable the list to populate automatically
* added option in subfolders the user to be able to type the subfolder
* wfu_before_file_check filter can modify the target path (not only the file name)

= 2.7.0 =
* corrected bug when deleting plugin instance from the Dashboard
* corrected bug not finding "loading_icon.gif"

= 2.6.0 =
* full redesign of the upload algorithm to become more robust
* added improved server-side handling of large files
* plugin shortcodes can be edited using the Shortcode Composer
* added visual editor button on the plugin to enable administrators to change the plugin settings easily
* corrected bug causing sometimes database overloads
* slight improvements of subfolder option
* improvements to avoid code breaking in ajax calls when there are php warnings or echo from Wordpress environment or other plugins
* improvements and bug fixes in uploader when classic (no AJAX) upload is selected
* eliminated php warnings in shortcode composer
* corrected bug that was not correctly downloading files from the plugin's File Browser
* added better security when downloading files from the plugin's File Browser
* fixed bug not correctly showing the user that uploaded a file in the plugin's File Browser
* use of curl to perform server http requests was replaced by native php because some web servers do not have CURL installed
* corrected bug in shortcode composer where userdata fields were not shown in variables drop down
* added feature that prevents page closing if an upload is on progress
* added forcefilename attribute to avoid filename sanitization
* added ftppassivemode attribute for enabling FTP passive mode when FTP method is used for uploading
* added ftpfilepermissions attribute for defining the permissions of the uploaded file, when using FTP method
* javascript and css files are minified for faster loading

= 2.5.5 =
* fixed serious bug not uploading files when captcha is enabled
* fixed bug not redirecting files when email notification is enabled

= 2.5.4 =
* mitigated issue with "Session failed" errors appearing randomly in websites
* fixed bug not applying %filename% variable inside redirect link
* fixed bug not applying new filename, which has been modified with wfu_before_file_upload filter, in email notifications and redirects
* fixed bug where when 2 big files were uploaded at the same time and one failed due to failed chunk, then the progress bar would not go to 100% and the file would not be shown as cancelled

= 2.5.3 =
* fixed bug not allowing redirection to work
* fixed bug that was including failed files in email notifications on certain occasions
* default value for uploadrole changed to "all"

= 2.5.2 =
* fixed important bug in free version not correctly showing message after failed upload

= 2.5.1 =
* fixed important bug in free version giving the same name to all uploaded files
* fixed bug in free version not clearing completely the plugin cache from previous file upload

= 2.5.0 =
* major redesign of upload algorithm to address upload issues with Safari for Mac and Firefox
* files are first checked by server before actually uploaded, in order to avoid uploading of large files that are invalid
* modifications to progress bar code to make progress bar smoother
* restrict upload of .php files for security reasons
* fixed bug not showing correctly userdata fields inside email notifications when using ampersand or other special characters in userdata fields

= 2.4.6 =
* variables %blogid%, %pageid% and %pagetitle% added in email notifications and subject and %dq% in subject
* corrected bug that was breaking Shortcode Composer when using more than ten attributes
* corrected bug that was rejecting file uploads when uploadpattern attribute contained blank spaces
* several code corrections in order to eliminate PHP warning messages when DEBUG mode is on
* several code corrections in order to eliminate warning messages in Javascript

= 2.4.5 =
* correction of bug when using userfields inside notifyrecipients

= 2.4.4 =
* intermediate update to make the plugin more immune to hackers

= 2.4.3 =
* correction of bug to allow uploadpath to receive userdata as parameter

= 2.4.2 =
* intermediate update to address some vulnerability issues

= 2.4.1 =
* added filters and actions before and after each file upload - check below Filters/Actions section for instructions how to use them
* added storage of file info, including user data, in database
* added logging of file actions in database - admins can view the log from the Dashboard
* admins can automatically update the database to reflect the current status of files from the Dashboard
* file browser improvements so that more information about each file (including any user data) are shown
* file browser improvements so that files can be downloaded
* filelist improvements to display correctly long filenames (Pro version)
* filelist improvements to distinguish successful uploads from failed uploads (Pro version)
* improvements of chunked uploads so that files that are not allowed to be uploaded are cancelled faster (Pro version)
* corrected wrong check of file size limit for chunked files (Pro version)
* added postlink attribute so that uploaded files are linked to the current page (or post) as attachments
* added subfolderlabel attribute to define the label of the subfolder selection feature
* several improvements to subfolder selection feature
* default value added to subfolder selection feature
* definition of the subfoldertree attribute in the Shortcode Composer is now done visually
* %userid% variable added inside uploadpath attribute
* userdata variables added inside uploadpath and notifyrecipients attributes
* uploadfolder_label added to dimension items
* user fields feature improvements
* user fields label and input box dimensions are customizable
* captcha prompt label dimensions are customizable (Pro version)
* added gallery attribute to allow the uploaded files to be shown as image gallery below the plugin (Pro version)
* added galleryoptions attribute to define options of the image gallery (Pro version)
* added css attribute and a delicate css editor inside Shortcode Composer to allow better styling of the plugin using custom css (Pro version)
* email feature improved in conjunction with redirection
* improved interoperability with WP-Filebase plugin
* improved functionality of free text attributes (like notifymessage or css) by allowing double-quotes and brackets inside the text (using special variables), that were previously breaking the plugin

= 2.3.1 =
* added option to restore default value for each attribute in Shortcode Composer
* added support for multilingual characters
* correction of bug in Shortcode Composer that was not allowing attributes with singular and plural form to be saved
* correction of bug that was not changing errormessage attribute in some cases

= 2.2.3 =
* correction of bug that was freezing the Shortcode Composer in some cases
* correction of bug with successmessage attribute

= 2.2.2 =
* serious bug fixed that was breaking operation of Shortcode Composer and File Browser when the Wordpress website is in a subdirectory

= 2.2.1 =
* added file browser in Dashboard for admins
* added attribute medialink to allow uploaded files to be shown in Media
* serious bug fixed that was breaking the plugin because of preg_replace_callback function
* corrected error in first attempt to upload file when captcha is enabled

= 2.1.3 =
* variables %pagetitle% and %pageid% added in uploadpath.
* bug fixes when working with IE8.
* Shortcode Composer saves selected options
* Easier handling of userdata variables in Shortcode Composer
* correction of bug that allowed debugdata to be shown in non-admin users
* reset.css removed from plugin as it was causing breaks in theme's css
* correction of bug with WPFilebase Manager plugin

= 2.1.2 =
* Several bug fixes and code reconstruction.
* Code modifications so that the plugin can operate even when DEBUG mode is ON.
* New attribute debugmode added to allow better debugging of the plugin when there are errors.

= 2.1.1 =
* Bug fixes with broken images when Wordpress website is in a subdirectory.
* Replacement of glob function because is not allowed by some servers.

= 2.0.2 =
* Bug fixes in Dashboard Settings Shortcode Composer.
* Correction of important bug that was breaking page in some cases.
* Minor improvements of user data fields and notification email attributes.

= 2.0.1 =
This is the initial release of Wordpress File Upload. Since this plugin is the successor of Inline Upload, the whole changelog since the creation of the later is included.

* Name of the plugin changed to Wordpress File Upload.
* Plugin has been completely restructured to allow additional features.
* A new more advanced message box has been included showing information in a more structured way.
* Error detection and reporting has been improved.
* An administration page has been created in the Dashboard Settings, containing a Shortcode Composer.
* Some more options related to configuration of message showing upload results have been added.
* Several bug fixes.

= 1.7.14 =
* Userdata attribute changed to allow the creation of more fields and required ones.
* Spanish translation added thanks to Maria Ramos of WebHostingHub.

= 1.7.13 =
* Added notifyheaders attribute, in order to allow better control of notification email sent (e.g. allow to send HTML email).

= 1.7.12 =
* Added userdata attribute, in order to allow users to send additional text data along with the uploaded file.

= 1.7.11 =
* Added single button operation (file will be automatically uploaded when selected without pressing Upload Button).

= 1.7.10 =
* Fixed bug with functionality of attribute filebaselink for new versions of WP-Filebase plugin.

= 1.7.9 =
* Fixed problem with functionality of attribute filebaselink for new versions of WP-Filebase plugin.

= 1.7.8 =
* More than one roles can now be defined in attribute uploadrole, separated by comma (,).

= 1.7.7 =
* Variable %filename% now works also in redirectlink.

= 1.7.6 =
* Changes in ftp functionality, added useftpdomain attribute so that it can work with external ftp domains as well.
* Improvement of classic upload (used in IE or when setting forceclassic to true) messaging functionality.
* Minor bug fixes.

= 1.7.5 =
* Source modified so that it can work with Wordpress sites that are not installed in root.
* Added variable %blogid% for use with multi-site installations.
* Bug fixes related to showing of messages.

= 1.7.4 =
* Replacement of json2.js with another version.

= 1.7.3 =
* CSS style changes to resolve conflicts with various theme CSS styles.

= 1.7.2 =
* Added variable %useremail% used in notifyrecipients, notifysubject and notifymessage attributes.

= 1.7.1 =
* Added capability to upload files outside wp-content folder.
* Improved error reporting.

= 1.7 =
* Complete restructuring of plugin HTML code, in order to make it more configurable and customizable.
* Appearance of messages has been improved.
* Added option to put the plugin in testmode.
* Added option to configure the colors of success and fail messages.
* Added option to modify the dimensions of the individual objects of the plugin.
* Added option to change the placement of the individual objects of the plugin.
* Improved error reporting.
* Added localization for error messages.
* Minor bug fixes.

= 1.6.3 =
* Bug fixes to correct incompatibilities of the new ajax functionality when uploadrole is set to "all".

= 1.6.2 =
* Bug fixes to correct incompatibilities of the new ajax functionality with redirectlink, filebaselink and adminmessages.

= 1.6.1 =
* Correction of serious bug that prevented the normal operation of the plugin when the browser of the user supports HTML5 functionality.
* Tags added to the plugin Wordpress page.

= 1.6 =
* Major lifting of the whole code.
* Added ajax functionality so that file is uploaded without page reload (works in browsers supporting HTML5).
* Added upload progress bar (works in browsers supporting HTML5).
* Added option to allow user to select if wants to use the old form upload functionality.
* File will not be saved again if user presses the Refresh button (or F5) of the page.
* Translation strings updated.
* Bug fixes for problems when there are more than one instances of the plugin in a single page.

= 1.5 =
* Added option to notify user about upload directory.
* Added option to allow user to select a subfolder to upload the file.

= 1.4.1 =
* css corrections for bug fixes.

= 1.4 =
* Added option to attach uploaded file to notification email.
* Added option to customize message on successful upload (variables %filename% and %filepath% can be used).
* Added option to customize color of message on successful upload.
* "C:\fakepath\" problem resolved.
* warning message about function create_directory() resolved.
* css enhancements for compatibility with more themes.

= 1.3 =
* Additional variables added (%filename% and %filepath%).
* All variables can be used inside message subject and message text.
* Added option to determine how to treat duplicates (overwrite existing file, leave existing file, leave both).
* Added option to determine how to rename the uploaded file, when another file already exists in the target directory.
* Added option to create directories and upload files using ftp access, in order to overcome file owner and SAFE MODE restrictions.
* Added the capability to redirect to another web page when a file is uploaded successfully.
* Added the option to show to administrators additional messages about upload errors.
* Bug fixes related to interoperability with WP_Filebase

= 1.2 =
* Added notification by email when a file is uploaded.
* Added the ability to upload to a variable folder, based on the name of the user currently logged in.

= 1.1 =
Added the option to allow anyone to upload files, by setting the attribute uploadrole to "all".

= 1.0 =
Initial version.

== Upgrade Notice ==

= 3.4.0 =
Important upgrade to introduce some new features and fix some bugs.

= 3.3.1 =
Important upgrade to correct a bug of the previous version and introduce a new feature.

= 3.3.0 =
Major upgrade to add some new featuresand fix some minor bugs.

= 3.2.1 =
Upgrade to fix some bugs and add some features.

= 3.2.0 =
Upgrade to fix some bugs and add some features.

= 3.1.2 =
Upgrade to fix an important bug.

= 3.1.1 =
Upgrade to fix a minor bug.

= 3.1.0 =
Upgrade to fix some minor bugs.

= 3.0.0 =
Upgrade to increase protection against hacking.

= 2.7.6 =
Upgrade to add some new features and address some bugs.

= 2.7.5 =
Upgrade to add some new features.

= 2.7.4 =
Upgrade to add some new features and address some bugs.

= 2.7.3 =
Upgrade to add some new features and address some bugs.

= 2.7.2 =
Upgrade to address some bugs.

= 2.7.1 =
Upgrade to add some new features and address some bugs.

= 2.7.0 =
Upgrade to address some minor bugs.

= 2.6.0 =
Important upgrade to add new features and address some bugs.

= 2.5.5 =
Important upgrade to address some bugs.

= 2.5.4 =
Important upgrade to address some bugs.

= 2.5.3 =
Important upgrade to address some bugs.

= 2.5.2 =
Important upgrade to address some bugs.

= 2.5.1 =
Important upgrade to address some bugs.

= 2.5.0 =
Important upgrade to address some bugs.

= 2.4.6 =
Important upgrade to address some bugs.

= 2.4.5 =
Minor upgrade to address some bugs.

= 2.4.4 =
Important upgrade to address some vulnerability issues.

= 2.4.3 =
Upgrade to address some functionality issues.

= 2.4.2 =
Important upgrade to address some vulnerability issues.

= 2.4.1 =
Upgrade to add many features and address some minor bugs.

= 2.3.1 =
Upgrade to add some features and address some minor bugs.

= 2.2.3 =
Upgrade to address some minor bugs.

= 2.2.2 =
Important upgrade to address some serious bugs.

= 2.2.1 =
Important upgrade to address some serious bugs and include some new features.

= 2.1.3 =
Important upgrade to address some serious bugs.

= 2.1.2 =
Important upgrade to address some bugs.

= 2.1.1 =
Important upgrade to address some serious bugs.

= 2.0.2 =
Important upgrade to address some serious bugs.

= 2.0.1 =
Optional upgrade to add new features.

= 1.7.14 =
Optional upgrade to add new features.

= 1.7.13 =
Optional upgrade to add new features.

= 1.7.12 =
Optional upgrade to add new features.

= 1.7.11 =
Optional upgrade to add new features.

= 1.7.10 =
Important upgrade to correct bug with filebaselink attribute functionality.

= 1.7.9 =
Important upgrade to resolve issue with filebaselink attribute functionality.

= 1.7.8 =
Optional upgrade to add new features.

= 1.7.7 =
Optional upgrade to add new features.

= 1.7.6 =
Optional upgrade to add new features and make minor bug fixes.

= 1.7.5 =
Important upgrade to resolve issues with Wordpress sites not installed in root.

= 1.7.4 =
Important upgrade to resolve issues with json2 functionality.

= 1.7.3 =
Important upgrade to resolve issues with style incompatibilities.

= 1.7.2 =
Optional upgrade to add new features, related to variables.

= 1.7.1 =
Optional upgrade to add new features, related to uploadpath and error reporting.

= 1.7 =
Optional upgrade to add new features, related to appearance of the plugin and error reporting.

= 1.6.3 =
Important upgrade to correct bugs that prevented normal operation of the plugins in some cases.

= 1.6.2 =
Important upgrade to correct bugs that prevented normal operation of the plugins in some cases.

= 1.6.1 =
Important upgrade to correct bug that prevented normal operation of the plugins in some cases.

= 1.6 =
Optional upgrade to add new features, related to ajax functionality and minor bug fixes.

= 1.5 =
Optional upgrade to add new features, related to subfolders.

= 1.4.1 =
Important upgrade to correct a css problem with Firefox.

= 1.4 =
Important upgrade that introduces some bug fixes and some new capabilities.

= 1.3 =
Important upgrade that introduces some bug fixes and a lot of new capabilities.

= 1.2 =
Optional upgrade in order to set additional capabilities.

= 1.1 =
Optional upgrade in order to set additional capabilities.

= 1.0 =
Initial version.

== Attributes ==

The easiest way to use the plugin is to put the shortcode [wordpress_file_upload] in the page. In this case, the plugin will use the default functionality.

If you want to customize the plugin (define the upload path, use file filter, change title and button text etc.) then you can use attributes. Go to Dashboard / Settings / Wordpress File Upload and then press Shortcode Composer. By selecting the attributes of your choice, the shortcode will be automatically generated. Then you can copy and paste it in any page.

A detailed list of attributes, together with instructions is shown below:

**General Options**

*Basic Functionalities*

* **uploadid:** This is the ID of every instance of the plugin inside the same page. Valid values are 1,2,3... Please use a different value for every instance.
* **singlebutton:** If this attribute is set to "true", only Upload Button will be shown and file will be automatically uploaded when selected. Default value is "false".
* **uploadpath:** This is the path of the upload directory. The path must be relative to wp-content folder of your Wordpress website. For instance, if your upload directory is "wp-content/uploads/myuploaddir", then uploadpath must have the value "uploads/myuploaddir". The default value is "uploads", meaning that the files will be uploaded to wp-content/uploads dir. If you put the variable "%username%" inside the uploadpath string, then this variable will be replaced by the username of the user currently logged in. If you want to upload files outside wp-content folder, then put a double dot (..) at the beginning of your uploadpath value.
* **fitmode:** This attribute define how the plugin's elements will fit inside the page. If "fixed" is set then the plugin's elements will always keep their positions unchanged. If "responsive" is set then the plugin's elements positions will adjust to fit inside container page/post. Default value is "fixed".

*Filters*

* **uploadrole:** This is the roles that are allowed to upload files. Default role is "all". If you use other roles, like "editor", then only users of this role and also of role "administrator" will be able to upload files. You can set multiple roles, separated by comma, e.g. "editor, author". If you set uploadrole to "all" then all users, even guests, will be able to upload files.
* **uploadpatterns:** This is the filter of the uploaded files. Default value is "*.*", meaning that all files can be uploaded. Use this attribute to restrict the types of files that can be uploaded. For instance, in order to upload only pdf files put "\*.pdf". You can use more that one filters, separated by comma, for instance "\*.pdf,\*.doc".
* **maxsize:** This is the maximum size in MBytes of the uploaded files. Use this attribute to restrict the upload of files larger that this value. Default value is "10", meaning that you cannot upload files larger than 10MBytes.

*Upload Path and Files*

* **createpath:** If this attribute is set to "true", the upload directory, defined by uploadpath, will be created in case it does not exist. Default value is "false".
* **forcefilename:** The plugin by default will modify the filename if it contains invalid or non-english characters. By setting this attribute to "true" the plugin will not change the filename. Default value is "false".
* **accessmethod:** This attributes defines the method to create directories and upload files. Default value is "normal". If it is set to "ftp", then the plugin will attempt to create directories and upload files using ftp access. In order to do this, the attribute *ftpinfo* must also be filled with valid ftp access information. Use this attribute when you cannot upload files, access uploaded files or cannot copy or delete uploaded files because of SAFE MODE restrictions, or because the owner of the file is the domain administrator.
* **ftpinfo:** This attribute defines the ftp access information. It has the syntax *username:password@domain*. If username, password or domain contains the characters (:) or (@), then replace them with (\\:) and (\\@) in order to avoid misreading of the attribute.
* **useftpdomain:** This attribute is used when the ftp domain used to upload files is in different domain than Wordpress installation. If it is set to "true" (and also uploadmethod is "ftp"), then the domain that will be used to upload files will be the one defined in ftpinfo attribute. Default value is "false".
* **ftppassivemode:** If this attribute is set to "true", FTP passive mode will be used instead of active mode. It is used if files fail to upload when using FTP method. Default value is "false".
* **ftpfilepermissions:** Force the uploaded files to have specific permissions. This is a 4-digit octal number, e.g. 0777. If left empty, then the ftp server will define the permissions. Default value is "".
* **showtargetfolder:** This attribute defines if a message with the upload directory will be shown. Default value is "false".
* **askforsubfolders:** This attribute defines if the user can select a subfolder to upload the file. Default value is "false". If set to "true", then the user is able to select a subfolder of the path, defined by the attribute *uploadpath*, to upload a file through a drop down list. This attributed is used together with attribute *subfoldertree*, which defines the subfolders.
* **subfoldertree:** This attribute defines the structure of the subfolders that the user can select to upload a file. Default value is "". The format of this attribute is as follows: the subfolders are separated by commas (,), e.g. "subfolder1, subfolder2". It is possible to use nested subfolders (a folder inside another folder). To do this place stars (\*) before the name of the subfolder. The number of stars determines nesting level, e.g. "subfolder1, \*nested1, \*nested2, \*\*nested3". Please note that the first subfolder must be the name of the folder defined by attribute *uploadpath* (only the last part) without any stars, while all the next subfolders must have at least one star. The user has also the capability to use a different name (from the actual subfolder name) to be shown in the drop down list for every subfolder, by separating the actual and shown name using the slash (/) symbol, e.g. "subfolder1, \*subfolder2/shownname2, \*subfolder3/shownname3". For defining a default value that will be preselected use the (&) symbol before the item name (but after the stars, e.g. \*\*&nested3.
* **dublicatespolicy:** This attribute defines what to do when the upload file has the same name with another file inside target directory. If it is set to "overwrite" then the upload file will replace the existing file. If it is set to "reject" then the upload operation will be cancelled. If it is set to "maintain both" then the upload file will be saved inside the target directory with another name, in order to keep both files. Default value is "overwrite".
* **uniquepattern:** This attribute defines how to save the upload file when a file with the same name already exists inside the target directory. If it is set to "index" then the upload file will be saved with a numeric suffix, like (1), (2) etc. in order to keep the name of the uploaded file unique. If it is set to "datetimestamp", then the suffix will be an encoded datetime of the upload operation. The plugin ensures that the name of the uploaded file will be unique, in order to avoid accidental replacement of existing files. Default value is "index".

*Redirection*

* **redirect:** This attribute defines if the user will be redirected to another web page when the file is uploaded successfully. Default value is "false".
* **redirectlink:** This attribute defines the url of the redirection page. Please use the prefix "http://" if the redirection page is in another domain, otherwise the server will assume that the url is relative to the server path.

*Other Administrator Options*

* **adminmessages:** This attribute offers the option to administrator users to receive additional information about upload errors. These messages will be visible only to administrators. Default value is "false".
* **forceclassic:** This attribute defines if the plugin will use the old classic functionality to upload files (using forms) or ajax functionality (supported in HTML5). Default value is "false". Please note that if your browser does not support HTML ajax functionality, then the plugin will automatically switch to classic one.
* **testmode:** This attribute defines if the plugin will be shown in test mode. Default value is "false". If it is set to "true", then the plugin will obtain a "dummy" functionality (it will not be able to upload files) and it will appear showing all of its objects (the selection of subfolders, progress bar, a test message), while the buttons will show a "Test Mode" message when pressed. This option can be used to configure the dimensions of the individual objects of the plugin more easily.
* **debugmode:** This attribute defines if the plugin will show debug information. Default value is "false". If it is set to "true", then the plugin will show in the message box any warnings and errors generated by PHP during the upload process. It can be used by administrators for deep debugging. For generation of PHP warnings and errors, global Wordpress WP_DEBUG constant must be enabled.


**Placements**

*Plugin Component Positions*

* **placements:** This attribute can be used to change the placement of the objects of the plugin. Default value is "title/filename+selectbutton+uploadbutton/subfolders/userdata/progressbar/message". Every line is separated by a slash (/). To put more than one objects to the same line, separate them with a plus (+). The objects supported are: title, filename, selectbutton, uploadbutton, subfolders, progressbar, userdata and message. You can have more than one instances of userdata inside placements.

**Labels**

*Title*

* **uploadtitle:** The title of the plugin. Default value is "Upload a file".

*Buttons*

* **selectbutton:** The title of the select button. Default value is "Select File".
* **uploadbutton:** The title of the upload button. Default value is "Upload File".

*Upload Folder*

* **targetfolderlabel:** This attribute defines the text for the message for the upload directory. Default value is "Upload Directory".

*Upload Messages*

* **successmessage:** This attribute defines the message to be shown upon successful upload. Default value is "File %filename% uploaded successfully". You can use the variables %filename% and %filepath% inside the message, as explained below.
* **warningmessage:** This attribute defines the message to be shown upon successful upload but with warnings. Default value is "File %filename% uploaded successfully but with warnings". You can use the variables %filename% and %filepath% inside the message, as explained below.
* **errormessage:** This attribute defines the message to be shown upon upload failure. Default value is "File %filename% not uploaded". You can use the variables %filename% and %filepath% inside the message, as explained below.
* **waitmessage:** This attribute defines the message to be shown while uploading. Default value is "File %filename% is being uploaded". You can use the variables %filename% and %filepath% inside the message, as explained below.

**Notifications**

*Email Notifications*

* **notify:** If this attribute is set to "true", then an email will be sent to the addresses defined by the attribute *notifyrecipients* to inform them that a new file has been uploaded.
* **notifyrecipients:** This attribute defines the list of email addresses to receive the notification message that a new file has been uploaded. More that one address can be defined, separated by comma (,). You can use variables inside this attribute, as explained below.
* **notifyheaders:** This attribute defines additional headers to be included in the notification email (e.g. set "From", "Cc" and "Bcc" parameters or use HTML code instead of text). Default value is "". For example, in order to send HTML email please set this attribute to "Content-type: text/html".
* **notifysubject:** This attribute defines the subject for the notification message. Default value is "File Upload Notification". You can use variables inside this attribute, as explained below.
* **notifymessage:** This attribute defines the body text for the notification message. Default value is "Dear Recipient, this is an automatic delivery message to notify you that a new file has been uploaded. Best Regards". You can use variables inside this attribute, as explained below.
* **attachfile:** This attribute defines if the uploaded file will be attached to the notification email. Default value is "false".

**Colors**

*Upload Message Colors*

* **successmessagecolor:** This attribute defines the color of the message shown upon successful upload. Default value is "green". This attribute is no longer used but is maintained for backward compatibility. Please use successmessagecolors instead.
* **successmessagecolors:** This attribute defines the colors of the message shown upon successful upload. Default value is "#006600,#EEFFEE,#006666". The first value is the text color, the second the background color and the third the border color.
* **warningmessagecolors:** This attribute defines the colors of the message shown upon successful upload but with warnings. Default value is "#F88017,#FEF2E7,#633309". The first value is the text color, the second the background color and the third the border color.
* **failmessagecolors:** This attribute defines the colors of the message shown upon upload failure. Default value is "#660000,#FFEEEE,#666600". The first value is the text color, the second the background color and the third the border color.
* **waitmessagecolors:** This attribute defines the colors of the message shown while file uploading. Default value is "#666666,#EEEEEE,#333333". The first value is the text color, the second the background color and the third the border color.

**Dimensions**

*Plugin Component Widths*

* **widths:** This attribute can be used to define the width of every individual object of the plugin. Default value is "". To define the width of an individual object, simply put the name of the object and the width, separated by the (:) character (e.g. "title:100px"). To define more than one objects separate them with comma (,).

*Plugin Component Heights*

* **heights:** This attribute can be used to define the height of every individual object of the plugin. Default value is "". To define the height of an individual object, simply put the name of the object and the height, separated by the (:) character (e.g. "title:20px"). To define more than one objects separate them with comma (,).

**Additional Fields**

*Additional Data Fields*

* **userdata:** This attribute defines if additional text information will be requested by the user. If set to "true", then an additional textbox will appear, prompting the user to put text data. These data will be sent to email recipients, if email notification has been activated and %userdata% variable exists inside notifymessage attribute. Default value is "false".
* **userdatalabel:** This attribute defines the userdata fields. Separate each field definition with slash "/". The most simple is to define the field's label (text field will be assumed), e.g. Name/Email will define two text fields, one with label "Name" and one with label "Email". Additional options can be defined for each field, appended after the label using a "|" separator, an option designator (a single character plus ":" sign) and an option value. The available options are described below. Default value is "Your message|t:text|s:left|r:0|a:0|p:inline|d:".
    - **t:** field type, can take the values: text, multitext, number, email, confirmemail, password, confirmpassword, checkbox, radiobutton, date, time, datetime, list, dropdown
    - **s:** label position relative to the field, can take the values: none, top, right, bottom, left
    - **r:** is field required, can take the values: 0, 1
    - **a:** do not allow browser to auto-complete the field, can take the values: 0, 1
    - **v:** validate the field, can take the values: 0, 1
    - **d:** default field value
    - **l:** custom field data, this option depends on the field type; for checkbox it is the description shown next to the check box, for radiobutton it is a comma-separated list of radio button labels, for list and dropdown it is a comma-separated list of items
    - **g:** a group value used to group together relevant fields; it is used for grouping email with confirmemail, password with confirmpassword and radiobutton fields together
    - **p:** the position of the hint that is shown to the user when a required field is empty or its validation fails; it can have the values: none, inline, top, right, bottom, left
    - **h:** validate the field during typing, can take the values: 0, 1
    - **f:** define field format; it depends on the field type; for number field it can take the value d (for integer numbers) or f (for floating-point numbers), for checkbox it defines the location of the description in relation to the checkbox (top, right, bottom, left), for radiobutton it defines the location of the label in relation to its radio button (top, right, bottom, left) and placement of the radio buttons (vertical, horizontal), for date, time and datetime fields it defines the format of the date (or time) as shown below:
        
		date formats:
        - **d** - day of month (no leading zero)
        - **dd** - day of month (two digit)
        - **o** - day of the year (no leading zeros)
        - **oo** - day of the year (three digit)
        - **D** - day name short
        - **DD** - day name long
        - **m** - month of year (no leading zero)
        - **mm** - month of year (two digit)
        - **M** - month name short
        - **MM** - month name long
        - **y** - year (two digit)
        - **yy** - year (four digit)
        - **@** - Unix timestamp (ms since 01/01/1970)
        - **!** - Windows ticks (100ns since 01/01/0001)
        - **'...'** - literal text
        - **''** - single quote
        - anything else - literal text
        
		time formats:
        - **H** - hour with no leading 0 (24 hour)
        - **HH** - hour with leading 0 (24 hour)
        - **h** - hour with no leading 0 (12 hour)
        - **hh** - hour with leading 0 (12 hour)
        - **m** - minute with no leading 0
        - **mm** - minute with leading 0
        - **s** - second with no leading 0
        - **ss** - second with leading 0
        - **l** - milliseconds always with leading 0
        - **c** - microseconds always with leading 0
        - **t** - a or p for AM/PM
        - **T** - A or P for AM/PM
        - **tt** - am or pm for AM/PM
        - **TT** - AM or PM for AM/PM
        - **z** - timezone as defined by timezoneList
        - **Z** - timezone in Iso 8601 format (+04:45)	

**Interoperability**

*Connection With Other Plugins*

* **filebaselink:** This attribute defines if this plugin will be linked to wp-filebase plugin. Wp-filebase is another plugin with which you can upload files and then show them in your pages in a customizable way. If you set this attribute to "true", then you can upload files inside wp-filebase directories using wordpress_file_upload and then update the databases of wp-filebase, so that it is informed about the new uploads. The default value is "false". Please note that this attribute does not check to see if wp-filebase is installed and active, so be sure to have wp-filebase active if you want to use it.

*Connection With Other Wordpress Features*

* **medialink:** This attribute defines that uploaded files will be added to Media of the Wordpress website when set to "true". Default value is "false". Credits for this functionality to Aaron Olin.
* **postlink:** This attribute defines that uploaded files will be added to the current page (or post) as attachments when set to "true". Default value is "false".

You can use any of these attributes to customize the plugin. The way to use these attributes is the following:

`
[wordpress_file_upload attribute1=value1 attribute2=value2]
`

Here are some examples:

`
[wordpress_file_upload uploadtitle="Upload files to the Upload dir"]
[wordpress_file_upload uploadtitle="Upload files to the Upload dir" uploadpath="uploads/myuploaddir"]
[wordpress_file_upload uploadid="1" uploadpath="../myuploaddir"]
[wordpress_file_upload uploadpath="uploads/users/%username%" createpath="true"]
[wordpress_file_upload uploadpath="uploads/myuploaddir" notify="true" notifyrecipients="name1@address1.com, name2@address2.com"]
[wordpress_file_upload uploadpath="/uploads/myuploaddir" askforsubfolders="true" subfoldertree="myuploaddir/My Upload Directory,*subfolder1/Subfolder1 Inside myuploaddir,**inner/2nd Level Nested Dir, *reports/Reports"]
[wordpress_file_upload uploadrole="all" uploadpath="/uploads/filebase/%username%" createpath="false" notify="true" notifyrecipients="myname@domain.com" notifysubject="A new file has been uploaded!" attachfile="true" askforsubfolders="true" subfoldertree="admin/Administrator,*root/Root Folder,**inner, *reports/Reports" filebaselink="true" widths="filename:150px, selectbutton:80px, uploadbutton:80px, progressbar:220px, message:368px, subfolders_label:100px, subfolders_select:125px" placements="title/filename+subfolders/selectbutton+uploadbutton+progressbar/message"]
[wordpress_file_upload uploadpath="uploads/myuploaddir" notify="true" notifyrecipients="name1@address1.com, name2@address2.com" notifymessage="File %filename% has been received, together with fields Name:%userdata0%, Email:%userdata1%" userdata="true" userdatalabel="Name/*Email (required)"]
[wordpress_file_upload uploadpath="uploads/myuploaddir" notify="true" notifyrecipients="name1@address1.com, name2@address2.com" notifymessage="This is a test HTML message body.<br/><br/>This word is <em>italic</em> and this is <strong>bold</strong>." notifyheaders="Content-type: text/html"]
`

== Variables ==

From version 1.2 variables are supported inside attributes.

A variable is a string surrounded by percent characters, in the form *%variable_name%*. This variable is dynamically replaced by another string whenever the plugin is executed.

For instance, if the variable %username% is used inside *uploadpath* attribute, then it will be replaced by the username of the user who is currently logged in every time a file is uploaded. By this way, every user can upload files to a separate folder, without any additional programming.

For the time being, the following variables are supported:

* **%userid%:** Is replaced by the id of the current user. Can be used inside attribute *uploadpath*.
* **%username%:** Is replaced by the username of the current user. Can be used inside attributes *uploadpath*, *notifysubject* and *notifymessage*.
* **%useremail%:** Is replaced by the email of the current user. Can be used inside attributes *notifyrecipients*, *notifysubject*, *notifymessage* and *redirectlink*.
* **%filename%:** Is replaced by the filename (not including path information) of the uploaded file. Can be used inside attributes *notifysubject*, *notifymessage*, *successmessage* and *redirectlink*.
* **%filepath%:** Is replaced by the filepath (full path and filename) of the uploaded file. Can be used inside attributes *notifysubject*, *notifymessage* and *successmessage*.
* **%blogid%:** Is replaced by the blog_id of the current site. Can be used inside attribute *uploadpath*, *notifysubject* and *notifymessage*.
* **%userdataXXX%:** Is replaced by the additional message that the user has sent together with the file upload. XXX is the number of the field (starting from 0). The shortcode attribute userdata must have been set to "true". Can be used inside attributes *uploadpath*, *notifysubject*, *notifymessage* and *notifyrecipients*.
* **%pagetitle%:** Is replaced by the title of the current page. Can be used inside attribute *uploadpath*, *notifysubject* and *notifymessage*.
* **%pageid%:** Is replaced by the id of the current page. Can be used inside attribute *uploadpath*, *notifysubject* and *notifymessage*.

In addition, some special variables, which are used to replace literals not allowed in shortcodes (such as double quotes or brackets), are also supported. They can be used in attributes that receive free text (like button labels, email notification body etc.). These special variables are:

* **%n%:** When used inside an attribute (e.g. inside *notifymessage*) it will be replaced by a change-of-line character (\n).
* **%dq%:** When used inside an attribute it will be replaced by a double quote (").
* **%brl%:** When used inside an attribute it will be replaced by an opening bracket ([).
* **%brr%:** When used inside an attribute it will be replaced by a closing bracket (]).

== Filters / Actions ==

From version 2.4.1 filters and actions are supported in order to allow programmers to integrate Wordpress File Upload plugin with other plugins.

The following filters are supported:

**wfu_before_file_check**

It is executed before file is uploaded and before any internal file checks, in order to allow the filter to perform its own checks or change some basic upload parameters, such as filename or userdata. You can use it as follows:

`
add_filter('wfu_before_file_check', 'wfu_before_file_check_handler', 10, 2);

//The following function takes two parameters, $changable_data and $additional_data.
//  $changable_data is an array that can be modified by the filter and contains the items:
//    file_path: the full path of the uploaded file
//    user_data: an array of user data values, if userdata are activated
//    error_message: initially it is set to an empty value, if the handler sets a non-empty value then upload of the file will be cancelled showing this error message (message will be shown only to administrators if adminmessages attribute has been activated)
//  $additional_data is an array with additional data to be used by the filter (but cannot be modified) as follows:
//    shortcode_id: this is the id of the plugin, as set using uploadid attribute; it can be used to apply this filter only to a specific instance of the plugin (if it is used in more than one pages or posts)
//    file_unique_id: this id is unique for each individual file upload and can be used to identify each separate upload
//    file_size: the size of the uploaded file
//    user_id: the id of the user that submitted the file for upload
//    page_id: the id of the page from where the upload was performed (because there may be upload plugins in more than one page)
//The function must return the final $changable_data.
function wfu_before_file_check_handler($changable_data, $additional_data) {
	// Add code here...
	return $changable_data;
}
`

**wfu_before_file_upload**

It is executed right before file is uploaded, in order to allow the filter to change the file name. You can use it as follows:

`
add_filter('wfu_before_file_upload', 'wfu_before_file_upload_handler', 10, 2);

//The following function takes two parameters, $file_path and $file_unique_id.
//  $file_path is the filename of the uploaded file (after all internal checks have been applied) and can be modified by the filter.
//  $file_unique_id is is unique for each individual file upload and can be used to identify each separate upload.
//The function must return the final $file_path.
//If additional data are required (such as user id or userdata) you can get them by implementing the previous filter
//wfu_before_file_check and link both filters by $file_unique_id parameter.
//Please note that no filename validity checks will be performed after the filter. The filter must ensure that filename is valid.
function wfu_before_file_upload_handler($file_path, $file_unique_id) {
	// Add code here...
	return $file_path;
}
`

**wfu_before_email_notification**

It is executed before email notification is sent, in order to allow advanced checks or modifications to the email. You can use it as follows:

`
add_filter('wfu_before_email_notification', 'wfu_before_email_notification_handler', 10, 2);

//The following function takes two parameters, $changable_data and $additional_data.
//  $changable_data is an array that can be modified by the filter and contains the items:
//    recipients: the list of recipients (before dynamic variables are applied)
//    subject: the email subject (before dynamic variables are applied)
//    message: the email body (before dynamic variables are applied)
//    headers: the email headers, if exist (before dynamic variables are applied)
//    user_data: an array of user data values, if userdata are activated
//    filename: a comma separated list of uploaded file names (only the file names)
//    filepath: a comma separated list of uploaded file paths (absolute full file paths)
//    error_message: initially it is set to an empty value, if the handler sets a non-empty value then email sending will be cancelled showing this error message (message will be shown only to administrators if adminmessages attribute has been activated)
//  $additional_data is an array with additional data to be used by the filter (but cannot be modified) as follows:
//    shortcode_id: this is the id of the plugin, as set using uploadid attribute; it can be used to apply this filter only to a specific instance of the plugin (if it is used in more than one pages or posts)
//The function must return the final $changable_data.
function wfu_before_email_notification_handler($changable_data, $additional_data) {
	// Add code here...
	return $changable_data;
}
`

**wfu_after_file_upload**

It is executed after the upload process for each individual file has finished, in order to allow additional actions to be executed (such as define custom javascript code to be executed in client's browser after file upload). You can use it as follows:

`
add_filter('wfu_after_file_upload', 'wfu_after_file_upload_handler', 10, 2);

//The following function takes two parameters, $changable_data and $additional_data.
//  $changable_data is an array that can be modified by the filter and contains the items:
//    ret_value: not used for the moment, it exists for future additions
//    js_script: javascript code to be executed on the client's browser after each file is uploaded
//  $additional_data is an array with additional data to be used by the filter (but cannot be modified) as follows:
//    shortcode_id: this is the id of the plugin, as set using uploadid attribute; it can be used to apply this filter only to a specific instance of the plugin (if it is used in more than one pages or posts)
//    file_unique_id: this id is unique for each individual file upload and can be used to identify each separate upload
//    upload_result is the result of the upload process:
//      success: the upload was successful
//      warning: the upload was successful but with warning messages
//      error: the upload failed
//    error_message: contains warning or error messages generated during the upload process
//    admin_messages: contains detailed error messages for administrators generated during the upload process
//The function must return the final $changable_data.
function wfu_after_file_upload_handler($changable_data, $additional_data) {
	// Add code here...
	return $changable_data;
}
`

The following actions are supported:

**wfu_after_file_upload**

It is executed after the upload process for each individual file has finished, in order to allow additional actions to be executed. You can use it as follows:

`
add_action('wfu_after_file_upload', 'wfu_after_file_upload_handler', 10, 4);
(It is noted that this action will be removed in future version of the plugin, it is here only for compatibility with previous versions of the plugin, please use wfu_after_file_upload filter instead)

//The following function takes four parameters, $file_unique_id, $upload_result, $error_message and $error_admin_messages.
//  $file_unique_id is is unique for each individual file upload and can be used to identify each separate upload.
//  $upload_result is the result of the upload process:
//    success: the upload was successful
//    warning: the upload was successful but with warning messages
//    error: the upload failed
//  $error_message: contains warning or error messages generated during the upload process
//  $admin_messages: contains detailed error messages for administrators generated during the upload process
//If additional data are required (such as user id, userdata or filename) you can get them by implementing the previous filters
//wfu_before_file_check or wfu_before_file_upload and link both filters by $file_unique_id parameter.
function wfu_after_file_upload_handler($file_unique_id, $upload_result, $error_message, $error_admin_messages) {
	// Add code here...
}
`

== Requirements ==

The plugin requires to have Javascript enabled in your browser. For Internet Explorer you also need to have Active-X enabled.
Please note that old desktop browsers or mobile browsers may not support all of the plugin's features. In order to get full functionality use the latest versions of browsers, supporting HTML5, AJAX and CSS3.

