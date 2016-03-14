<?php
/**
 * Created by PhpStorm.
 * User: Wouter
 * Date: 14-3-2016
 * Time: 23:13
 */

require_once "getEntityManager.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);