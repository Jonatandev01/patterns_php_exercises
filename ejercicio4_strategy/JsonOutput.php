<?php
require_once 'OutputStrategy.php';
class JsonOutput implements OutputStrategy {
    public function output(string $message) {
        $obj = ['timestamp' => date('c'), 'message' => $message];
        echo json_encode($obj, JSON_PRETTY_PRINT) . "\n";
    }
}
