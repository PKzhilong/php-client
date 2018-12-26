<?php
/**
 * Created by PhpStorm.
 * User: xingzhilong
 * Date: 2018-12-26
 * Time: 15:38
 */

require_once 'vendor/autoload.php';

$client = \GClient\UserClient::instance();

$student = $client->getStudentByID(3);

echo '<pre>';
print_r($student->getAge());
echo '</pre>';
