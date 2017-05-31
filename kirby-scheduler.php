<?php
require_once __DIR__ . DS . 'lib' . DS . 'page-methods.php';
require_once __DIR__ . DS . 'lib' . DS . 'pages-methods.php';
require_once __DIR__ . DS . 'lib' . DS . 'class-scheduler.php';

// Register field
$kirby->set('field', 'scheduled',  __DIR__ . DS . 'field');

// Autopublisher
$autopublish = c::get('plugin.scheduler.autopublish', false);
if( $autopublish ) {
    // Run scheduler here to bypass cache
    scheduler::autopublish();
}
