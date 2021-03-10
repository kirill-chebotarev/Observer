<?php

use \Entity\Vacancy;
use \Observer\User;
use \Entity\Category;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    require_once __DIR__ . '\\' . $className . '.php';
});

$phpVacancies = new Category('PHP programmer');

$user1 = new User('Витя', 'vitya@gmail.ccom', 3);
$phpVacancies->attach($user1);

$user2 = new User('Петя', 'petya@gmail.ccom', 2);
$phpVacancies->attach($user2);
$phpVacancies->detach($user2);

$user3 = new User('Митя', 'mitya@gmail.ccom', 1);
$phpVacancies->attach($user3);

$phpProgrammer = new Vacancy('Придется много работать', $phpVacancies);



