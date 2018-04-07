<?php

return array(
    'tooltips' => array(
        // Area
        'grid-type' => 'There are 4 gallery types:</br>Fixed, Horizontal, Vertical, Fixed Columns</br><img src=@url/Grid.jpg />',
        'columns' => 'Number of columns with images on gallery page',
        'responsive-columns' => 'The number of columns for a given width of the screen. We specify the standard 1200px for medium-sized screens, 768px for the tablets, 320 for mobile. You can change this sizes if you want.',
        'distance' => '</br><img src=@url/distance_between_photos.jpg />',
        'area-height' => 'Height',
        'area-width' => '</br><img src=@url/gallery-width.jpg />',
		'full-screen-width' => 'Enable fullwidth mode for your gallery',
		'area-padding' => 'Set padding in pixels from both sides of gallery',
        'photo-width' => '</br><img src=@url/width_bet_photos.jpg>',
        'photo-height' => '</br><img src=@url/height_bet_photos.jpg>',
        // Border
        'border-type' => '<p><img src=@url/solid_border.jpg><img src=@url/Dashed_border.jpg></p><p><img src=@url/dotted_border.jpg><img src=@url/double_border.jpg></p>',
        /*'border-color' => 'Select color',*/
        'border-width' => 'This option will work if selected Border type',
        'border-radius' => '</br><img src=@url/image-radius.jpg>',
		'cropQuality' => 'Specify quality for image thumbnails',
        'display-first-photo' => 'When this option is enabled, only first picture from this gallery will be seen on the website. The other pictures will be seen in the popup window after clicking on the first picture.',
        'open-by-link' => 'If this option is enabled, then when one clicks on the link, which you can find below, the photos of gallery will be opened directly in popup. Note that the shortcode of this gallery should be added to the page, where you will use gallery link of this option.',
		'social-buttons-project' => 'Select Social Share Buttons project',
		'gallery-social-sharing' => 'Enable social share buttons on gallery page',
		'image-social-sharing' => 'Enable social share buttons on images',
		'popup-social-sharing' => 'Enable  social share buttons in popup images',
		'popup-image-text' => 'Select what text to show in popup (caption, title, alt text or description)',
        // Shadow
        /*'shadow-color' => 'Select color',*/
        'shadow-blur' => 'Blur in percents',
		'when-mouse-is-over' => 'Choose shadow effect by mouse hover',
        'shadow-x' => 'Offset by X',
        'shadow-y' => 'Offset by Y',
        'slideshow' => 'Start slideshow when open big image in popup',
	    'box-disableHistory' => 'If this option is checked - browser back button will close popup. If it is unchecked - images will be saved in browser history and will be opened on back or forward button click.',
        'mobile' => 'Check if you want to disable popups on mobile devices',
        'captions' => 'Check if you want to hide pagination and image caption on popup window',
		'hide-long-tooltip-titles' => "To see the whole text of caption in popup window - you can hover on it and a new semi transparent box with the whole text will appear. If you don't use long text in captions, just tick this checkbox and extra tooltip in popup will be disabled.",
        'overlay-personal' => "If option enabled you can choose personal caption effect per image in images list. If option disabled chosen effect will be used for all images",
		'overlay-type' => 'Enable overlay with shadow for all images in the gallery',
		'overlay-effect-image-on-hover-enable' => "'Image on hover' - If this effect is enabled, the other image will be shown on the place of the current one, when hovering on it. The other image could be selected in the option below ('Select Image on hover') and will be shown for all images in this gallery. In case you want to show different pictures, upload them for each image separately on Images List section ('Hover Caption Image' tab). Please note, that 'Personal Captions' option should be enabled.",
		'overlay-effect-image-on-hover' => "'Select Image on Hover' - Upload an image, that will be shown as hover effect for each picture in your gallery.",
        'tooltip' => 'If selected Yes tooltip on hovering image will not appear',
        'ismobile' => 'In order to show always captions on mobile devices - select Yes',
        'isDisableMobileCaption' => 'Check if you want to disable captions on mobile devices',
        // Uncomment to enable overlay tooltips
        /*'overlay-effect' => 'Overlay effect',
        'overlay-background' => 'Overlay background color',
        'overlay-foreground' => 'Overlay text color',
        'overlay-transparency' => 'Overlay transparency',*/
		'preload' => 'Turn on animated preloader only while gallery is loading',
        //photoIcons
        'photo-icon' => "Select Show icons</br><img src=@url/icons.jpg />",
        //Categories
        'categories-show' => "Select Show categories</br><img src=@url/show_categories.jpg />",
        'animation-duration' => 'Transition/animation speed in milliseconds',
        'enable-shuffling-animation' => 'Animated sorting and laying out a group of images',
        //Pagination
        'pages-show' => "Enable pagination</br><img src=@url/enable_pagination.jpg />",
    ),
    'tooltips_icon' => array(
        'icon' => 'question'
    ),
);