<?php
/**
 * User: Peter Wang
 * Date: 16/10/9
 * Time: 下午12:45
 */
return [
    "pdo"=>[
        "adapter"=>"pool",//pool or default
        "type" => "mysql",
        "prefix" => "psm_",
        "master" =>[
            "host" => "",
            "user" => "root",
            "port" => "3306",
            "password" => "123456",
            "db_name" => "putao_site_monitor",
            "timeout"=>5,
        ]
    ],
    "redis"=>[
        "adapter"=>"default",//pool or default
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