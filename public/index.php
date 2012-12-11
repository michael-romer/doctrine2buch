<?php
include_once('../EntityManager.php');
$em = new EntityManager('localhost', 'app', 'root', '');
$user = $em->getUserRepository()->findOneById(1);
echo $user->assembleDisplayName() . '<br />';

$user->setFirstname('Moritz');
$em->saveUser($user);
