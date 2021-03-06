<?php

/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 */
/* * ******************* META BOX DEFINITIONS ********************** */

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'YOUR_PREFIX_';

global $meta_boxes;

$meta_boxes = array();

$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'posts',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Post Extras',
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
     array(
            'name'             => 'Feature Image',
            'id'               => "featureimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
            ),
    ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'mainpage',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Mainpage',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('mainpage'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Process Text',
            'id' => 'processtext',
            'type' => 'text',
        ),
     array(
            'name'             => 'Process Image',
            'id'               => "processimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
            ),
     array(
            'name' => 'Who We Are Text',
            'desc' => '',
            'id'   => "whowearetext",
            'type' => 'wysiwyg',
            'std' => "",
            'cols' => '20',
            'rows' => '3',
        ),
     array(
            'name'             => 'Who We Are Image',
            'id'               => "whoweareimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
            ),
     ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'mainpageslider',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Mainpage Slider',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('mainpageslider'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
    array(
            'name' => 'Year of Car',
            'id' => 'caryear',
            'type' => 'text',
        ),
    array(
            'name' => 'Maker',
            'id' => 'carmaker',
            'type' => 'text',
        ),
    array(
            'name' => 'Model',
            'id' => 'carmodel',
            'type' => 'text',
        ),
     array(
            'name'             => 'Slider Featured Image',
            'id'               => "sliderfeaturedimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
            ),
     ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'theteam',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'TheTeam',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('theteam'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
     array(
            'name' => 'Unique Identifier (letters only)',
            'id' => 'uniqueid',
            'type' => 'text',
        ),
     array(
            'name' => 'First Name',
            'id' => 'firstname',
            'type' => 'text',
        ),
     array(
            'name' => 'Last Name',
            'id' => 'lastname',
            'type' => 'text',
        ),
     array(
            'name' => 'Age',
            'id' => 'age',
            'type' => 'text',
        ),
     array(
            'name' => 'Hometown',
            'id' => 'hometown',
            'type' => 'text',
        ),
     array(
            'name' => 'Position',
            'id' => 'position',
            'type' => 'text',
        ),
     array(
            'name' => 'Years of Experience',
            'id' => 'experience',
            'type' => 'text',
        ),
     array(
            'name'             => 'Large Featured Image',
            'id'               => "largeimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
            ),
     ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'restorations',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Restorations',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('restorations'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
     array(
            'name' => 'Unique Identifier (letters only)',
            'id' => 'uniqueid',
            'type' => 'text',
        ),
     array(
            'name' => 'Model Year',
            'id' => 'modelyear',
            'type' => 'text',
        ),
     array(
            'name' => 'Car Type',
            'id' => 'cartype',
            'type' => 'text',
        ),
     array(
            'name' => 'Car Model',
            'id' => 'carmodel',
            'type' => 'text',
        ),
     array(
            'name' => 'Duration in Months',
            'id' => 'durationtime',
            'type' => 'text',
        ),
     array(
            'name' => 'Extras',
            'id' => 'extras',
            'type' => 'text',
        ),
     array(
            'name' => 'Service One',
            'id' => 'serviceone',
            'type' => 'text',
        ),
     array(
            'name' => 'Service Two',
            'id' => 'servicetwo',
            'type' => 'text',
        ),
     array(
            'name' => 'Service Three',
            'id' => 'servicethree',
            'type' => 'text',
        ),
     array(
            'name' => 'Service Four',
            'id' => 'servicefour',
            'type' => 'text',
        ),
     array(
            'name'             => 'Large Featured Image',
            'id'               => "largeimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 4,
            ),
     ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'contactus',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Contactus',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('contactus'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
     array(
            'name' => 'Monday thru Saturday Hours',
            'id' => 'monsathr',
            'type' => 'text',
        ),
     array(
            'name' => 'Sunday Hours',
            'id' => 'sunhr',
            'type' => 'text',
        ),
     array(
            'name' => 'Phone Number',
            'id' => 'phonenumber',
            'type' => 'text',
        ),
     array(
            'name' => 'Fax Number',
            'id' => 'faxnumber',
            'type' => 'text',
        ),
     array(
            'name' => 'Street Address',
            'id' => 'streetaddy',
            'type' => 'text',
        ),
     array(
            'name' => 'City, ST zipcode',
            'id' => 'restofaddy',
            'type' => 'text',
        ),
     array(
            'name'             => 'Large Featured Image',
            'id'               => "contactlargeimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
            ),
     ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'aboutus',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'About Us',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('aboutus'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
        array(
            'name' => 'Quote',
            'id' => 'quotation',
            'type' => 'text',
        ),
        array(
            'name'             => 'Quote Image',
            'id'               => "quoteimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 1,
        ),
        array(
            'name'             => 'Three Image',
            'id'               => "threeimage",
            'type'             => 'plupload_image',
            'max_file_uploads' => 3,
        ),
     ),
    );
$meta_boxes[] = array(
    // Meta box id, UNIQUE per meta box. Optional since 4.1.5
    'id' => 'awards',
    // Meta box title - Will appear at the drag and drop handle bar. Required.
    'title' => 'Awards',
    // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
    'pages' => array('awards'),
    // Where the meta box appear: normal (default), advanced, side. Optional.
    'context' => 'normal',
    // Order of meta box: high (default), low. Optional.
    'priority' => 'high',
    // List of meta fields
    'fields' => array(
     array(
            'name' => 'Line 1',
            'id' => 'line1',
            'type' => 'text',
        ),
     array(
            'name' => 'Line 2',
            'id' => 'line2',
            'type' => 'text',
        ),
     ),
    );



/* * ******************* META BOX REGISTERING ********************** */

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes() {
    global $meta_boxes;

    // Make sure there's no errors when the plugin is deactivated or during upgrade
    if (class_exists('RW_Meta_Box')) {
        foreach ($meta_boxes as $meta_box) {
            new RW_Meta_Box($meta_box);
        }
    }
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action('admin_init', 'YOUR_PREFIX_register_meta_boxes');