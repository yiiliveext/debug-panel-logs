<?php

declare(strict_types=1);

use Yiisoft\Router\Route;
use Yiiliveext\Yii\Debug\Panel\Logs\PanelLogsController;

return [
    Route::get('/debug/panels/logs')
        ->action([PanelLogsController::class, 'view'])
        ->name('debug/panels/logs'),
];
