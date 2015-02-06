<?php
/**
 * Core Library.
 *
 * @package SCAPI
 * @subpackage lib
 * @version 2.0
 * @author Skylar Kelty <S.Kelty@kent.ac.uk>
 * @copyright University of Kent
 */

// Register the composer autoloaders.
require_once($CFG->dirroot . '/vendor/autoload.php');

// Init Rapid core.
\Rapid\Core::init();

// Init Page.
$PAGE = new \Rapid\Presentation\Page();
$PAGE->require_css("//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css");
$PAGE->require_js("//code.jquery.com/jquery-1.11.2.min.js");
$PAGE->require_js("//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js");

// Set a default page title.
$PAGE->set_title($CFG->brand);

// Setup navigation.
$PAGE->menu(array(
    'Home' => '/index.php',
    'Zoomify' => '/zoomify.php',
    'OpenLayers' => '/openlayers.php',
    'Formats' => '/formats.php',
    'Calm' => '/calm.php'
));
