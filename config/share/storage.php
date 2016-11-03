<?php
/**
 * User: Peter Wang
 * Date: 16/10/9
 * Time: 下午12:45
 */
return [
    "pdo"=>[
        "type" => "mysql",
        "prefix" => "putao_",
        "master" =>[
            "host" => "",
            "user" => "root",
            "port" => "3306",
            "password" => "",
            "db_name" => "",
            "timeout"=>5,
        ]
    ],
    "redis"=>[
        "servers"=>[
//            "tcp://127.0.0.1:6379",
        ],
        "options"=>[
            'prefix'  => 'test',
            'cluster' => 'redis',
            "timeout"=>9,
        ],
    ]
];