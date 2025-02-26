<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "91a5b084637dc4f1bda1", // Replace with 'key' from dashboard
    "cedf3a9f143831ddbf01", // Replace with 'secret' from dashboard
    "1948253", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
$i = 0;
while ($i < 10) {
    $i++;
    $pusher->trigger('datos', 'new-datos', array(
        rand(1,70),rand(10,40),rand(50 ,150),rand(1,50),rand(20,50)
    ));
    time_nanosleep(1,0);
}