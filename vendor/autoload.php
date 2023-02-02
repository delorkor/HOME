<?php

function myAutoloader(string $class) // \Test\Car
{
    include_once(str_replace('\\', '/', __DIR__ . "/$class.php")); // Test/Car.php
}

spl_autoload_register('myAutoloader');