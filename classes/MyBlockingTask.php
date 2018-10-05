<?php
namespace classes;

class MyBlockingTask implements \Amp\Parallel\Worker\Task {
    protected $key;
    protected $sleep;
    public function __construct($key,$sleep) {
        $this->key = $key;
        $this->sleep = $sleep;
    }
    public function run( \Amp\Parallel\Worker\Environment $environment) {
        return $this->execute();
    }
    public function execute() {
        echo "[".date('H:i:s')."] START {$this->key}\n";
        sleep($this->sleep);
        $hash = sha1($this->key);
        echo "[".date('H:i:s')."] END {$this->key}\n";
        return $hash;
    }
    public function getKey() {
      return $this->key;
    }
}

