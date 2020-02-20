<?php
/**
 * module.config.php - Task Config
 *
 * Main Config File for Task Task Plugin
 *
 * @category Config
 * @package Event\Task
 * @author Verein onePlace
 * @copyright (C) 2020  Verein onePlace <admin@1plc.ch>
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 * @since 1.0.0
 */

namespace OnePlace\Event\Task;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    # Task Module - Routes
    'router' => [
        'routes' => [
            'event-task-setup' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/event/task/setup',
                    'defaults' => [
                        'controller' => Controller\InstallController::class,
                        'action'     => 'checkdb',
                    ],
                ],
            ],
        ],
    ], # Routes

    # View Settings
    'view_manager' => [
        'template_path_stack' => [
            'event-task' => __DIR__ . '/../view',
        ],
    ],
];
