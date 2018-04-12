=== Very Simple Event List ===
Contributors: Guido07111975
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donation%40guidovanderleest%2enl
Version: 7.4
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.6
Tested up to: 4.9
Stable tag: trunk
Tags: simple, event, events, event list, event manager


This is a very simple plugin to display a list of events. Use a shortcode to display events on a page or use the widget.


== DESCRIPTION ==
= About =
This is a very simple plugin to display a list of events.

Use a shortcode to display events on a page or use the widget.

While adding the shortcode or the widget you can add several attributes to personalize your event list.

= How to use =
After installation go to Events and start adding your events.

Create a page and:

* Use shortcode `[vsel]` to display upcoming events (including today)
* Use shortcode `[vsel-past-events]` to display past events
* Use shortcode `[vsel-current-events]` to display current events
* Use shortcode `[vsel-all-events]` to display all events

= Settingspage =
Via Settings > VSEL you can:

* Keep events and settings when uninstalling plugin
* Show a summary instead of all content
* Link title to the event page
* Link image to the event page
* Set image size that is being used
* Change or hide event labels

= Shortcode attributes =
You can set amount of events per page. This will overwrite amount set in Settings > Reading.

* Example: `[vsel posts_per_page=5]`

You can display events from certain categories. You should enter the category slug. The slug is not always the same as the name of the category.

* Example: `[vsel event_cat="first-category, second-category"]`

The default order of the upcoming and current events list is ascending. The default order of the past and all events list is descending.

* Change order from ascending to descending: `[vsel order=desc]`
* Change order from descending to ascending: `[vsel order=asc]`

You can change the text that is being displayed when there are no events.

* Example: `[vsel no_events_text="your text here"]`

You can also add multiple attributes. Use a single whitespace to separate multiple attributes.

* Example: `[vsel posts_per_page=5 event_cat="first-category, second-category"]`

= Widget attributes =
The widget supports the same attributes. Enter them without shortcode itself and without brackets.

Example 1:

* If shortcode attribute is: `[vsel posts_per_page=5]`
* Widget attribute will be: `posts_per_page=5`

Example 2:

* If shortcode attribute is: `[vsel event_cat="first-category, second-category"]`
* Widget attribute will be: `event_cat="first-category, second-category"`

= Featured image =
WordPress creates duplicate images in different sizes upon upload. These sizes can be set via Settings > Media.

Via the settingspage you can change the default image size that is being used to display the featured image.

By default the "post-thumbnail" size of your theme is being used. But when this size is small, you might want to change this to avoid a blurry featured image.

Note: I have set the featured image width at max 40% of the event content area.

Note: The featured image in a single event is handled by your theme.

= Single event =
Template file single.php (and in some cases single-event.php) is being used to display a single event. This file is located in your theme folder.

= Event category page =
By default template file archive.php is being used. This file is located in your theme folder. My plugin does not support this file, so the event category page will not be displayed properly.

The event category page will only display properly when using the shortcode on a page.

Example: `[vsel event_cat="first-category, second-category"]`

= Uninstall =
If you uninstall plugin via WP dashboard all events and settings will be removed from database.

It removes all posts with (custom) post type "event".

You can avoid this via Settings > VSEL.

= Question? = 
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-event-list) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== INSTALLATION ==
Please check Description section for installation info.


== Frequently Asked Questions ==
= How can I change date format? =
You can set date format in WP dashboard via Settings > General.

The datepicker and date input field in WP dashboard only support 2 numeric date formats: "day-month-year" (30-01-2016) and "year-month-day" (2016-01-30).

If the date format set in WP dashboard is not the same, it will be changed into 1 of the 2 above.

= How do I set plugin language? =
Plugin will use the site language, set in Settings > General.

If plugin isn't translated into this language, language fallback will be English.

= What do you mean with current events? =
Current events are events I can visit today. So this can be an one-day or multi-day event.

= Are events also listed on time? =
No, because input field for time is a regular text input this is not possible.
 
= Can I display a summary instead of all content? =
Yes, this is possible.

You can activate the summary via Settings > VSEL.

And you can set a custom summary while adding an event. This will replace the default summary (if activated).

= Why is the page with all events not displayed properly? =
Go to the page in your dashboard and check the shortcode in "Text" mode.

If you have added the shortcode in "Visual" mode, it might be wrapped in HTML tags, such as: `<script>[vsel]</script>`

You should remove the HTML tags and resave the page.

= Why a 404 (nothing found) when I click the pagination? =
This might be caused because the slug of your page ends with "event". This causes a conflict with my plugin.

You should change this slug into something else. The slug is not always the same as the name of the page.

= Why a 404 (nothing found) when I click the title link? =
This is mostly caused by the permalink settings. Please reset the permalink via Settings > Permalinks.

= What does "Link to more info" mean? =
While adding an event you can add a link (an URL) to a post, page or website.

This can be useful in case additional info is available elsewhere.

And you can label this link. Default (translated) label is "More info".

= What does "Link to all events" mean? =
While adding a widget you can add a link (an URL) to a page with all events.

This can be useful because in most cases you only display a few events in a widget.

And you can label this link. Default (translated) label is "All events".

= Why no pagination in widget? =
Pagination is not available because it's not working properly in a widget.

But you can set a link to a page with all events.

= Can I use multiple shortcodes on the same page? =
Yes, as far as I know there are no issues when using multiple shortcodes.

= Why an error notification instead of a date? =
An error notification is displayed in case start date begins after end date. To solve this please reset date.

= Why no start date in dashboard? =
All events posted with version 4.0 and older have 1 date only. To solve this please reset date.

= Why no meta, image or categories while adding an event? =
If these boxes are not present, they might be unchecked in Screen Options.

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link on the WordPress plugin page and my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 7.4 =
* new: event class also contains the event category (if set)
* new: setting to link image to single event page
* new: setting to set the image size that is being used
* removed shortcode attribute to set the image size
* updated shortcode files
* updated files vsel, vsel-options and uninstall

= Version 7.3 =
* fix: custom excerpt supports punctuation now (thanks rbnetit)
* new: hide featured image and/or text in event list via the settingspage
* you can now display the event meta only and in full width
* updated files vsel, vsel-list, vsel-options, vsel-style and uninstall
* updated readme file

= Version 7.2 =
* fix: custom more info label did not display properly
* changed prefix of even more elements to make code structure more clear
* updated files vsel-shortcodes and vsel-list
* updated files vsel-widget-shortcodes and vsel-widget-list
* file vsel-single: added escaping to empty variables

= Version 7.1 =
* changed CSS class vsel_widget into vsel-widget
* files vsel-shortcodes and vsel-list: changed prefix of most elements
* files vsel-widget-shortcodes and vsel-widget-list: changed prefix of most elements
* file vsel-single: changed prefix of most elements
* changed prefix of most elements in above files to make code structure more clear
* several minor changes
* removed all faqs from readme file which refer back to the description section

= Version 7.0 =
* minor textual change
* minor change in file vsel-single

For all versions please check file changelog.


== Screenshots == 
1. Very Simple Event List (Twenty Seventeen theme).
2. Very Simple Event List single event (Twenty Seventeen theme).
3. Very Simple Event List widget (Twenty Seventeen theme).
4. Very Simple Event List (dashboard).
5. Very Simple Event List single event (dashboard).
6. Very Simple Event List widget (dashboard).
7. Very Simple Event List settingspage (dashboard).
8. Very Simple Event List settingspage (dashboard).