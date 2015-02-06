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

$PAGE->set_url('/formats.php');
$PAGE->set_title("Dynamic Resize Demo");

$id = $PAGE->optional_param('id', 0);

echo $OUTPUT->header();
echo $OUTPUT->heading();

$api = \unikent\SpecialCollections\API::create_dev('cartoons');

if ($id > 0) {
    $image = $api->get_image($id);
    echo "<ol class=\"breadcrumb\"><li><a href=\"/formats.php\">Formats</a></li><li>$id</li></ol>";
    echo "<h3>Thumbnail</h3><img src=\"" . $image->get_url('thumb') . "\" alt=\"Thumb Size\"><br /><br />";
    echo "<h3>Standard</h3><img src=\"" . $image->get_url('standard') . "\" alt=\"Standard Size\"><br /><br />";
    echo "<h3>Print</h3><img src=\"" . $image->get_url('print') . "\" alt=\"Print Size\"><br /><br />";
    echo "<h3>Full</h3><img src=\"" . $image->get_url('full') . "\" alt=\"Full Size\"><br /><br />";
} else {
    echo '<ul class="nav nav-pills nav-stacked" role="tablist">';
    $list = $api->get_images();
    foreach ($list as $image) {
        echo '<li><a href="?id=' . $image . '">Image ' . $image . '</a></li>';
    }
    echo '</ul>';
}

echo $OUTPUT->footer();
