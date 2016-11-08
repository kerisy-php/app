<?php
/**
 * User: Peter Wang
 * Date: 16/10/9
 * Time: 下午12:45
 */
return [
    "pdo"=>[
        "type" => "mysql",
        "prefix" => "psm_",
        "master" =>[
            "host" => "10.1.11.166",
            "user" => "root",
            "port" => "3306",
            "password" => "123456",
            "db_name" => "putao_site_monitor",
            "timeout"=>5,
        ]
    ],
    "redis"=>[
        "servers"=>[
            "tcp://127.0.0.1:6379",
        ],
        "options"=>[
            'prefix'  => 'test',
            'cluster' => 'redis',
            "timeout"=>9,
        ],
    ]
];