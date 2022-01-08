<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Core\ValueObject\PhpVersion;
use Rector\Laravel\Set\LaravelLevelSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $containerConfigurator->import(LevelSetList::UP_TO_PHP_74);
    $containerConfigurator->import(LaravelLevelSetList::UP_TO_LARAVEL_60);

    $parameters->set(Option::PATHS, [
        __DIR__ . '/app',
        __DIR__ . '/database',
        __DIR__ . '/resources/lang',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
        __DIR__ . '/ecs.php',
        __DIR__ . '/rector.php',
    ]);
};
