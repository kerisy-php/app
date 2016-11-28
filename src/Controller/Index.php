<?php

/**
 * User: Peter Wang
 * Date: 16/9/13
 * Time: 下午3:18
 */
namespace App\Controller;

use App\Lib\Dao\HeartLogDao;

class Index extends \Controller
{

    public function index()
    {

//        $daoObj = new HeartLogDao();
//        $where=[];
//        $where['id']=31;
//        $data = yield $daoObj->get($where);
//        \Kerisy\Support\Lang::setLang("en");
//
//        dump(l("你好 %s, 你好 php%u",["world",7]));

        $this->view->me = "Kerisy";
        return $this->render("index/index");
    }

}