<?php

use Nfq\Academy\Homework\ClassA;
use Nfq\Academy\Homework\Subpackage\ClassB;

require_once __DIR__.'/bootstrap.php';

$autoloader = new Psr4Autoloader();
$autoloader
    ->add('Nfq\\Academy\\Homework\\', __DIR__.'/src/')
    ->register();


$a = new ClassA();
$a->doSomething();

$b = new ClassB();
$b->doSomething();