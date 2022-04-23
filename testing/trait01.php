<?php

/**
 * 
 * Traits are a mechanism that allows you to create reusable code in languages like PHP 
 * where multiple inheritance is not supported. A Trait cannot be instantiated on its own. 
 * It’s important that a developer knows the powerful features of the language
 *  (s)he is working on, and Trait is one of such features[].
 */
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait World {
    public function sayWorld() {
        echo 'World';
    }
}

class MyHelloWorld {
    use Hello, World;
    public function sayExclamationMark() {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
?>