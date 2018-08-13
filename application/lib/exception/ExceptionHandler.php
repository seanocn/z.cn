<?php
/**
 * Created by PhpStorm.
 * User: PinLi
 * Date: 2018/8/13
 * Time: 14:56
 */

namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\facade\Log;
use think\facade\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;

    //  需要返回客户端当前请求的URL路径

    public function render(Exception $e)
    {
        if ($e instanceof BaseException) {
            //  如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode = $e->errorCode;
        } else {
            if (config('app.app_debug')){
                return parent::render($e);
            }else{
                $this->code = 500;
                $this->msg = '服务器内部错误，请联系管理员';
                $this->errorCode = 999;
                $this->recordErrorLog($e);
            }
        }
        $request = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->errorCode,
            'request_url' => $request->url()
        ];
        return json($result, $this->code);
    }

    private function recordErrorLog(Exception $e)
    {
        Log::init([
           'type' => 'File',
           'path' => '',
           'level' => ['error'],
        ]);
        Log::record($e->getMessage(),'error');
    }
}