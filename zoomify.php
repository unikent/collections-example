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

$PAGE->set_url('/zoomify.php');
$PAGE->set_title("SCAPI - Zoomify Demo");

$id = $PAGE->optional_param('id', 0);

echo $OUTPUT->header();
echo $OUTPUT->heading('SCAPI - Dynamic Zoomify Demo');

$api = \unikent\SpecialCollections\API::create_dev('cartoons');

if ($id > 0) {
    $image = $api->get_image($id);
    echo "<ol class=\"breadcrumb\"><li><a href=\"/zoomify.php\">Zoomify</a></li><li>$id</li></ol>";

    echo $image->render_zoomify();
} else {
    echo '<ul class="nav nav-pills nav-stacked" role="tablist">';
    $list = $api->get_images();
    foreach ($list as $image) {
        echo '<li><a href="?id=' . $image . '">Image ' . $image . '</a></li>';
    }
    echo '</ul>';
}

echo $OUTPUT->footer();
