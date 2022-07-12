<?php

spl_autoload_register();

use Repository\MyRepository;
use Member\Member;


$myRepository = new MyRepository();

$a = new Member(1);
$b = new Member(2);
$c = new Member(3);

$myRepository->save($a);
$myRepository->save($b);
$myRepository->save($c);

echo 'All the objects in repository:', '<br /><pre>', var_dump($myRepository->getAll()), '</pre>';

$obj1 = new Member(2);

echo 'Show if member with id = 2 exists in repository: <br />';

if (false !== $myRepository->findById($obj1)) {
    echo 'Exists';
} else {
    echo 'Does not exists';
}
