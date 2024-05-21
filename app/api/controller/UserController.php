<?php
namespace app\api\controller;

use support\Request;

class UserController
{
    public function hello(Request $request)
    {
        $default_name = 'webman';
        // 从get请求里获得name参数，如果没有传递name参数则返回$default_name
        $name = $request->get('name', $default_name);
        // 向浏览器返回字符串
        // return response('hello ' . $name);
        // 返回json
        return json([
            'code' => 0, 
            'msg' => 'ok', 
            'data' => $name
        ]);
        // 返回视图
        return view('user/hello', ['name' => $name]);
    }
}