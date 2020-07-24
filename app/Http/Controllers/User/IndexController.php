<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TokenModel;
class IndexController extends Controller
{
    public function reg(Request $request)
    {
//        用来测试是否能接受
//        echo '<pre>';print_r($_POST);echo '</pre>';
        //获取名字
        $user_name = $request->post('user_name');
        //获取email
        $user_email = $request->post('user_email');
        //密码
        $pass = $request->post('pass');
        $pass2 = $request->post('pass2');

        //todo 验证用户名 Email  密码






    }
}
