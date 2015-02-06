<?php
/**
 * Index Page.
 *
 * @package SCAPI
 * @subpackage Demo
 * @version 2.0
 * @author Skylar Kelty <S.Kelty@kent.ac.uk>
 * @copyright University of Kent
 */

require_once(dirname(__FILE__) . '/config.php');

$PAGE->set_url('/openlayers.php');
$PAGE->set_title("SCAPI - OpenLayers Demo");

$id = optional_param('id', 0, PARAM_INT);
if ($id > 0) {
    $PAGE->require_css('http://openlayers.org/en/v3.1.1/css/ol.css');
    $PAGE->require_js('http://openlayers.org/en/v3.1.1/build/ol.js');
    $PAGE->require_js('/api/openlayers.php?id=' . $id . '&request=js');
}

echo $OUTPUT->header();
echo $OUTPUT->heading('SCAPI - OpenLayers Demo');
echo '<p>This is not working yet.</p>';

echo $OUTPUT->footer();
