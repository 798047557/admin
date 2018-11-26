<?php

/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: IndexController.php
 * Description: 说明
 *
 * @author yangl
 * @Create Date    2018/11/21 15:29
 * @Update Date    2018/11/21 15:29 By YL
 * @version v1.0
 */

namespace Admin\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('index/index');
//        return config('view.paths');
    }
}