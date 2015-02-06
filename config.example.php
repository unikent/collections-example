<?php
/**
 * Rapid Prototyping Framework in PHP.
 * 
 * @author Skylar Kelty <skylarkelty@gmail.com>
 */

global $CFG;

$CFG = new \stdClass();
$CFG->brand = 'Special Collections';
$CFG->dirroot = dirname(__FILE__);
$CFG->cssroot = $CFG->dirroot . '/media/css';
$CFG->jsroot = $CFG->dirroot . '/media/js';
$CFG->wwwroot = 'http://collections-example-dev.kent.ac.uk:8080';

$CFG->developer_mode = true;

require_once($CFG->dirroot . '/lib/setup.php');
