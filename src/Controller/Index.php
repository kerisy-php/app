<?php

/**
 * User: Peter Wang
 * Date: 16/9/13
 * Time: 下午3:18
 */
namespace App\Controller;

use Kerisy\Foundation\Controller;
use App\Lib\Dao\HeartLogDao;

class Index extends Controller
{

    public function index()
    {

//        $daoObj = new HeartLogDao();
//        $daoObj->insertOne();
//        dump($daoObj->getOne());
//        dump($daoObj->getSql());
//        \Task::test("wang");
//        cache()->set("wang","k");
//        cache()->get("wang");
//        cache()->get("wang");
//        cache()->get("wang");
//        cache()->get("wang");
//        cache()->get("wang");
//        cache()->get("wang");
//        cache()->get("wang");
//        cache()->get("wang");
//        dump(cache()->get("wang"));
        mcache()->set("w","hello");
        dump(mcache()->get("w"));
        $this->view->me = "Kerisy";
        return $this->render("index/index");
    }

}