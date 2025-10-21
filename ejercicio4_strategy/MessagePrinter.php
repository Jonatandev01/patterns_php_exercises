<?php
require_once 'OutputStrategy.php';

class MessagePrinter {
    private $strategy;

    public function __construct(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(OutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function print(string $message) {
        $this->strategy->output($message);
    }
}
