=== Very Simple Event List ===
Contributors: Guido07111975
Version: 10.7
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 4.7
Tested up to: 5.2
Stable tag: trunk
Tags: simple, event, events, event list, event manager


This is a lightweight plugin to create a customized event list. Add the shortcode on a page or use the widget to display your events.


== DESCRIPTION ==
= About =
This is a lightweight plugin to create a customized event list.

Add the shortcode on a page or use the widget to display your events.

You can personalize your event list via the settingspage or by adding attributes to the shortcode or the widget.

= How to use =
After installation go to menu item "Events" and start adding your events.

Create a page and:

* Add shortcode `[vsel]` to display upcoming events (including today)
* Add shortcode `[vsel-past-events]` to display past events
* Add shortcode `[vsel-current-events]` to display current events
* Add shortcode `[vsel-all-events]` to display all events

Or go to Appearance > Widgets and use the widget to display your events.

= Settingspage =
Via Settings > VSEL you can:

* Keep events and settings when uninstalling plugin
* Change date format
* Disable support for theme template files
* Disable support for certain native features
* Change slug base for event and event category
* Left or right align meta section and featured image
* Show a summary instead of all info
* Link title to the single event page
* Link featured image to the single event page
* Link category to the event category page
* Set size that is being used as source for the featured image
* Change or hide event labels
* Hide fields of the Advanced Custom Fields plugin

= Shortcode attributes =
You can add attributes to the 4 shortcodes mentioned above.

* Change the number of events per page: `posts_per_page="5"`
* Display events from a certain category: `event_cat="your-category-slug"`
* Display events from multiple categories: `event_cat="your-category-slug-1, your-category-slug-2"`
* Change order of the upcoming and current events list: `order="desc"`
* Change order of the past and all events list: `order="asc"`
* Change text if there are no events: `no_events_text="your text here"`
* Change CSS class of the event list: `class="your-class-here"`

Examples:

* One attribute: `[vsel posts_per_page="5"]`
* One attribute: `[vsel-past-events event_cat="your-category-slug"]`
* Multiple attributes: `[vsel posts_per_page="5" event_cat="your-category-slug" class="your-class-here"]`

= Widget attributes =
The widget supports the same attributes. You don't have to add the main shortcode tag or the brackets.

Examples:

* One attribute: `posts_per_page="5"`
* Multiple attributes: `posts_per_page="5" event_cat="your-category-slug" class="your-class-here"`

= Featured image =
WordPress creates duplicate images in different sizes upon upload. These sizes can be set via Settings > Media.

You can change the size that is being used as source for the featured image via Settings > VSEL.

By default the "post-thumbnail" size of your theme is being used. You can change this size in case of a tiny or blurry featured image.

The width of the featured image is max. 40% of the event info area. Otherwise it might seem out of proportion.

The featured image in a single event is handled by your theme.

= Advanced Custom Fields =
You can add extra fields to the meta section by using the [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields) plugin. The most commonly used fields are supported.

Create a field group for post type "event" and add fields to this group. This field group will be added to the single event page in dashboard.

The extra fields are displayed in the frontend of your website underneath the location field.

= Theme template files =
Plugin has basic support for theme template files that are being used to display a single event, the event category page, the post type (event) archive page and the search results page.

It does one thing only: it hooks into the native `the_content()` and `the_excerpt()` function.

In some cases there's a conflict with your theme or page builder plugin. That's why you can disable support for theme template files via Settings > VSEL.

= Single event =
In most cases PHP file "single" is being used to display a single event. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly.

If you want to customize it and using custom CSS is not enough, you can add a PHP file called "single-event" in your theme folder and customize it to your needs.

= Event category page =
You can list events from a certain category. Example: your-domain/event_cat/your-category-slug

In most cases PHP file "archive" is being used for this. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly. And events are not listed on event date.

I recommend using the relevant shortcode with attribute, if you want to list events from a certain category.

= Post type (event) archive page =
You can list all your events. Example: your-domain/event

In most cases PHP file "archive" is being used for this. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly. And events are not listed on event date.

I recommend using the relevant shortcode, if you want to list all events.

= Search results page =
You can list events on your search results page by using a custom search query. Example: your-domain/?s=your-search-term&post_type=event

In most cases PHP file "search" is being used for this. This file is located in your theme folder.

Because a theme file is being used, it might not be displayed properly. And events are not listed on event date.

= Uninstall =
If you uninstall plugin via dashboard all events and settings will be removed from database.

All posts of the (custom) post type "event" will be removed.

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
= About the FAQ =
The FAQ applies to the most recent plugin version, as they are regularly updated to include support for newly added or changed plugin features.

= How can I change date format? =
By default plugin uses date format set in Settings > General.

But you can change this for the frontend of your website via Settings > VSEL.

The datepicker and date input field only support 2 numeric date formats: "day-month-year" (30-01-2016) and "year-month-day" (2016-01-30).

If date format from Settings > General does not match, it will be changed into 1 of the 2 above.

= How do I set plugin language? =
Plugin will use the website language, set in Settings > General.

If plugin isn't translated into this language, language fallback will be English.

= What do you mean with current events? =
Current events are events I can visit today. So this can be an one-day or multi-day event.

= Are events also listed on time? =
No, this is not possible because input field for time is a regular text input.

= Can I hide event labels on the single event page? =
This is not possible via Settings > VSEL. You should use custom CSS for that.

= What does "Link to more info" mean? =
While adding an event you can add a link (an URL) to a post, page or website.

This can be useful in case additional info is available elsewhere.

= What does "Link to all events" mean? =
While adding a widget you can add a link (an URL) to a page with all events.

This can be useful because in most cases you only list a few events in a widget area.

= Why no pagination in widget? =
Pagination is not working properly in a widget.

But you can set a link to a page with all events.

= Can I override plugin template via my (child) theme? =
No, this is not possible.

= Why is the page with all events not displayed properly? =
This applies to pages where you have added the shortcode.

When using the new editor, go to the page in your dashboard and check the shortcode in "Edit as HTML" mode.

When using the classic editor, go to the page in your dashboard and check the shortcode in "Text" mode.

It might be wrapped in HTML tags, such as: `<script>[vsel]</script>`

You should remove the HTML tags and resave the page.

= Can the URL of my events page end with "event"? =
No, this will cause a conflict with the post type (event) archive page.

You should change this so called "slug" into something else. This can be done by changing the permalink of your events page.

= Why a 404 (nothing found) when I click the title link? =
This is mostly caused by the permalink settings. Please resave the permalinks via Settings > Permalinks.

= Why a 404 (nothing found) when I click the event category link? =
This is mostly caused by the permalink settings. Please resave the permalinks via Settings > Permalinks.

= Can I add multiple shortcodes on the same page? =
I don't recommend this because this might cause a conflict with the pagination.

= Why an error notification instead of a date? =
An error notification is displayed in case of a missing date or when start date begins after end date. To solve this please reset date.

= Why no start date in dashboard? =
All events posted with plugin version 4.0 and older have one date only. To solve this please reset date.

= Why no meta, image or categories box in the editor? =
When using the new editor, click the tools and options button and select "Options".

When using the classic editor, click the "Screen Options" tab.

Probably the checkbox to display the relevant box in the editor is not checked.

= Why no Advanced Custom Fields field group in the editor? =
When using the new editor, click the tools and options button and select "Options".

When using the classic editor, click the "Screen Options" tab.

Probably the checkbox to display the relevant box in the editor is not checked.

= Why support for the post attributes box in the editor? =
I have added this feature to support the Elementor page builder plugin.

But you can disable this support via Settings > VSEL.

= Why support for the post type (event) archive page? =
I have added this feature to support the Elementor page builder plugin.

But you can disable this support via Settings > VSEL.

= Why support for the menu page? =
I have added this feature to support the Elementor page builder plugin.

But you can disable this support via Settings > VSEL.

= Can I add or hide columns on the events page in dashboard? =
Yes, but you should install an additional plugin for this.

You could install for example the [Admin Columns](https://wordpress.org/plugins/codepress-admin-columns/) plugin.

= Does this plugin have its own events block? =
No, it does not have its own events block and I'm not planning to add this feature.

= Why no Semantic versioning? =
At time of initial plugin release I wasn't aware of the Semantic versioning (sequence of three digits).

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link at my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 10.7 =
* fix: forgot to add the "alt" attribute to the featured image
* Minor changes in code

= Version 10.6 =
* Changed file names to make file structure more clear
* Added file vsel-acf
* Relocated code of the Advanced Custom Fields plugin to this file
* Changed code structure of theme template support file
* Now code structure matches the code structure of other template files
* Removed ID "vsel" from the single event container and added class "vsel-content" instead
* Because this ID was being used as container for all events, but also as container for a single event
* If you have added custom CSS to this ID or class, you might have to change it
* Removed the "srcset" attribute from the featured image (thanks Ladislav)
* Because this was overriding the source image that was selected on settingspage

= Version 10.5 =
* Minor changes in code

= Version 10.4 =
* Fix: forgot to add this notification for the widget

= Version 10.3 =
* Added notification if field type of the Advanced Custom Fields plugin is not supported
* This notification will be displayed in the frontend of your website

For all versions please check file changelog.


== Screenshots ==
1. Very Simple Event List all events (Twenty Nineteen theme).
2. Very Simple Event List single event (Twenty Nineteen theme).
3. Very Simple Event List widget (Twenty Nineteen theme).
4. Very Simple Event List all events (dashboard).
5. Very Simple Event List single event (dashboard).
6. Very Simple Event List widget (dashboard).
7. Very Simple Event List settingspage (dashboard).
8. Very Simple Event List settingspage (dashboard).
9. Very Simple Event List settingspage (dashboard).