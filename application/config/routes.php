<?php
/**
 * Created by PhpStorm.
 * User: Brian
 * Date: 2015/11/2
 * Time: 16:12
 */

return [
    [
        'prefix' => 'Front',
        'routes' => [
            ['GET', '/', 'core/index/index'],
            ['GET', 'user/<id:\d+>/', 'user/user/show'],
            ['GET', 'product/list', 'product/product/index']
        ]
    ],
    [
        'prefix' => 'Admin',
        'domain' => 'admin.putao.com',
        'routes' => [
            ['GET', '/', 'core/panel/main'],
        ]
    ],
    [
        'prefix' => 'Api',
        'directory' => 'api',
        'routes' => [
            ['GET', 'get', 'core/test/get'],
        ]
    ],
];
