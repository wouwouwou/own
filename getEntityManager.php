<?php
/**
 * Created by PhpStorm.
 * User: Wouter
 * Date: 14-3-2016
 * Time: 23:12
 */

require_once "vendor/autoload.php";
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$devmode = true;

$config = Setup::createAnnotationMetadataConfiguration(array (__DIR__ . ""), $devmode);

$driver = "pdo_mysql";
$username = "root";
$password = "";
$host = "localhost";
$dbname = "own";
$port = 3306;
$charset = "utf8_unicode_ci";

$conn = array(
    "driver" => $driver,
    "user" => $username,
    "password" => $password,
    "host" => $host,
    "port" => $port,
    "dbname" => $dbname,
    "charset" => $charset
);

$entityManager = EntityManager::create($conn, $config);