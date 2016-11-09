<?php
return [
    "load_path"=>__DIR__."/route",
    "routes"=>[
        [
            "name"=>"site",
            "method"=>"get",
            "prefix"=>"",
            "domain"=>"",
            "middleware"=>"",
            "routes"=>[
//                [
//                    "method"=>"get",
//                    "path"=>"/",
//                    "uses"=>"\\App\\Controller\\Index@index",
//                    "name"=>"test",
//                    "middleware"=>"",
//                    "where"=>[],
//                ],
                ["/","get","\\App\\Controller\\Index@index","test",[],"",""]
            ],

        ],
        [
            "name"=>"rpc_site",
            "method"=>"get",
            "prefix"=>"",
            "domain"=>"",
            "middleware"=>"",
            "routes"=>[
//                [
//                    "method"=>"get",
//                    "path"=>"/rpc",
//                    "uses"=>"\\App\\Rpc\\Index@index",
//                    "name"=>"rpc_test",
//                    "middleware"=>"",
//                    "where"=>[],
//                ],
                //格式 $path,$method,$uses,$name,$where,$domain,$middleware
                ["/rpc","get","\\App\\Rpc\\Index@index","rpc_test",[],"",""]
            ],

        ],
    ]
];