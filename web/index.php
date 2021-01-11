<?php

require '../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;


/**
 * @file
 * Index.php
 * php version 7.4
 * @Description Entry point
 * @category    File
 * @package     Learninggit
 * @author      My Name <my.name@example.com>
 * @license     http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link        https://rahulsonar.com
 */


$value = Yaml::parseFile('../credentials.yml');

print_r($value);