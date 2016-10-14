<?php

/**
 * This file is here only because of BC changes - use Adeira packages instead (https://github.com/adeira).
 */

class_alias(\Adeira\Monolog\DI\MonologExtension::class, \Mrtnzlml\Monolog\DI\MonologExtension::class);
// Adeira\Monolog\Handler\SlackHandler cannot be aliased without BC break because of \Nette\DI\ContainerBuilder::checkCase
