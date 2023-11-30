<?php
class Tigger {

private static $instance;
private $counter = 0;

private function __construct() {
    echo "Building character..." . PHP_EOL;
}

public static function getInstance() {
    if (!isset(self::$instance)) {
        self::$instance = new Tigger();
    }
    return self::$instance;
}

public function roar() {
    echo "Grrr!" . PHP_EOL;
    $this->counter++;
}

public function getCounter() {
    return $this->counter;
}
}

// Obtener la instancia de Tigger
$tigger = Tigger::getInstance();

// Rugir varias veces
$tigger->roar();
$tigger->roar();
$tigger->roar();

// Obtener el contador de rugidos
echo "Número de rugidos de Tigger: " . $tigger->getCounter() . PHP_EOL;

?>