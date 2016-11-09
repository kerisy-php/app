<?php
return [];
/**
 * User: Peter Wang
 * Date: 16/11/2
 * Time: 下午5:01
 */
//Route::get("/",function(){
//    echo "hello Kerisy";
//});
//
//Route::bind(['get','post'],"/",function(){
//        echo "hello Kerisy";
//});
//
//Route::get("/",["name"=>"home","uses"=>"\\App\\Controller\\Index@index","domain"=>"xxx","middleware"=>"","where"=>[]]);
//
//Route::get("/",function(){
//    echo "hello Kerisy";
//})->name("test")->domain("aaa.com");
//
//
//Route::group(["name"=>"gname","prefix"=>"/admin","domain"=>"","methods"=>"get","middleware"=>"auth"],function(){
//    Route::get("/",function(){
//        echo "hello Kerisy";
//    });
//    Route::get("/",function(){
//        echo "hello Kerisy";
//    })->name("test")->domain("aaa.com");
//});