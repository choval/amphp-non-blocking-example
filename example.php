<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use Amp\Parallel\Worker\DefaultWorkerFactory;

Amp\Loop::run(function () {
    $delay = 1;
    $keys = range('A','E');
    $tasks = [];
    foreach($keys as $key) {
      $tasks[$key] = new \classes\MyBlockingTask($key,$delay);
    }

    // Async run
    echo "ASYNC example:\n";
    $factory = new DefaultWorkerFactory();
    $promises = [];
    foreach($tasks as $task) {
        $worker = $factory->create();
        $promises[ $task->getKey() ] = $worker->enqueue($task);
    }
    $results = yield $promises;
    echo "Results:\n";
    print_r($results);  // Notice the ordered output vs the execution order

    echo "\n";

    // Sync run
    echo "SYNC example:\n";
    $results = [];
    foreach($tasks as $task) {
      $results[ $task->getKey() ] = $task->execute();
    }
    echo "Results:\n";
    print_r($results);  // Notice it takes 2*keys


});

