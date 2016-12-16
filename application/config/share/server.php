<?php
return [
    "name" => "Kerisy",
    "servers" => ['httpd'],
    "httpd" => [
        "server" => [
            "host" => "0.0.0.0",
            "port" => "7000",
            
            "mem_reboot_rate" => 0.8,//可用内存达到多少自动重启
            "auto_reload"=>"10:00",//每天10点重启
            "log_file" => ROOT_PATH . "/storage/tmp/log",
            'static_path' => ROOT_PATH . '/resource/static',
            "static_expire_time" => 86400,
            "task_fail_log" => ROOT_PATH . "/storage/tmp/task_fail_log",
            "task_retry_count" => 2,
            "task_timeout" => 0.5,
            "serialization" => 1,
            "gzip" => 4,
            //是否后台运行, 推荐设置0
            'daemonize' => 0,
            //设置为CPU的1-4倍最合理
            'worker_num' => 2,
            //reactor数量，推荐2
            'reactor_num' => 2,
            "task_worker_num" => 5,
        ],
    ],
    "job" => [
        "server" => [
            "auto_reload"=>"10:00",//每天10点重启
            //是否后台运行, 推荐设置0
            'daemonize' => 0,
            "mem_reboot_rate" => 0.8,//可用内存达到多少自动重启
            "serialization" => 1,
            "timer_tick"=>500,//每隔多长执行一次,单位毫秒
        ],
        "perform"=>[
            "clearlog"=>[
                "sleep" => 1,//执行一次sleep多长时间
                "only_one"=>1,//是否只能插入一次数据
                "max_attempts" => 5,//失败后最多重试多少次
                "fail_on_output" => false//是否输出
            ],
            "heart"=>[
                "sleep" => 1,//执行一次sleep多长时间
                "only_one"=>0,//是否只能插入一次数据
                "max_attempts" => 5,//失败后最多重试多少次
            ],
        ]
    ]
];