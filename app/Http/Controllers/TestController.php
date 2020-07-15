<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function getToken(){
//        appid
        $appid="wx3f3cf034c7d7b7f8";
//        appsecret
        $appscr="557dfadabc553367afa62e1f4112488f";
//        获取accesstoken的接口
        $token= "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid="."$appid"."&secret=".$appscr;
//        获取access_token的东西
        $cont=file_get_contents($token);
//    输出
        echo $cont;

    }

//    curl获取方式
    public function getCurl(){






    }


}

