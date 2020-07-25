<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
//测试获取微信公众号access_token
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

//    curl来获取access_token方式
    public function getCurl(){
//       appid
        $appid="wx3f3cf034c7d7b7f8";
//        appsecret
        $appscr="557dfadabc553367afa62e1f4112488f";
//      curl接口
        $curl="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid="."$appid"."&secret=".$appscr;
//     创建一个新的curl 资源
        $ch =curl_init();

//        设置URL和相映的选项
        curl_setopt($ch, CURLOPT_URL,$curl);
        //将 curl_exec()获取的信息以文件流的形式返回，而不是直接输出。设置为0是直接输出
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

 //执行curl,抓取内容
        $content = curl_exec($ch);
//        echo $content;

//        关闭会话
        curl_close($ch);
        dd($content);
    }


    //用GUZZLE来获取access_token
    public function getGuzzleToken(){
//           appid
        $appid="wx3f3cf034c7d7b7f8";
//        appsecret
        $appscr="557dfadabc553367afa62e1f4112488f";
//      curl接口
        $curl="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid="."$appid"."&secret=".$appscr;
//        实例化类
        $client = new Client();
//        发送请求
        $response = $client->request('GET',$curl);
//        转成字符串
        $body = $response->getBody();
        echo $body;

    }

//    调用www的accesss_token
    public function access_token(){
        $url = "http://www.1911.com/wx/accessToken";
        $data =file_get_contents($url);
        dd($data);
    }

//    api让www访问
    public function wwwToken(){
        echo "调用api.1911.com接口";
    }


    /*
     * 接口登录
     * */
    public function login(Request $request)
    {

        $email = $request->post('email');
        $pass = $request->post('pass');

//        验证用户名密码



    }


//对称加密

    public function enc(){
        $data = "Hello world";//加密的原内容
        $method = "AES-256-CBC";//密码学方式
        $key = "1911api";//秘钥
        $options = OPENSSL_RAW_DATA;//加密补全的选项
        $iv = "aaaabbbbccccdddd";//初始化向量
        $enc_data = openssl_encrypt($data,$method,$key,$options,$iv);//加密

        $url = "http://www.1911.com/test/dec";
        $b64 = base64_encode($enc_data);

        $www = $url."?data=".$b64;

        $response = file_get_contents($www);

        echo $response;

    }























}

