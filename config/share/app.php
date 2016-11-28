<?php
return [
    "date_default_timezone_set"=>"Asia/Shanghai",
    "memory_limit"=>"1024M",
    "session"=>[
        "name"=>"TSESSIONID",
        "cache_expire"=>60*60*2,
        "path"=>"/",
        "domain"=>"",
        "secure"=>false,
        "httponly"=>true,
    ],
    "aliases"=>[],
    "di"=>[],
    "command"=>[],
    "email"=>[
        "server"=>[
            "smtp"=>"",
            "port"=>465,
            "username"=>"",
            "password"=>"",
            "encryption"=>"ssl",
        ]
    ],
    "middleware"=>[
//        "author"=>\Kerisy\Test\Lib\Middleware\Author::class
    ],
    "task"=>[
        "test"=>\App\Task\Test::class
    ],
    "view"=>[
        "path"=>__DIR__."/../../resource/views",
        "theme"=>"default",
        "compile_path"=>__DIR__."/../../storage/tplcompile",
        "engine"=>"blade",
        "page404"=>"page404",
        "fis"=>[
            "compile_path"=>ROOT_PATH."/storage/public/_source",
            "map_path"=>"resource/map",
            "view_path"=>"resource/views",
        ]
<<<<<<< HEAD
    ],
//    "log"=>\App\Lib\Log\Test::class,
=======
    ]
>>>>>>> 3eece9cdc592fd09c2e6b68fecf313c4da8b9105
];