<?php
/**
 * DON'T TOUCH THIS
 *
 * Do everything in Application::run() method
 */

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Nette\Loaders\RobotLoader;
$loader->setTempDirectory(__DIR__ . '/../temp');
$loader->addDirectory(__DIR__ . '/../src/lib');

$loader->register();

$app = new Application();
$app->run();