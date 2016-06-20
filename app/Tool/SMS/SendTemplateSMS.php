<?php

namespace App\Tool\SMS;

use App\Tool\SMS\CCPRestSmsSDK;
use App\Models\M3Result;


class SendTemplateSMS
{
    public static $accountSid= '8a216da8552a3cd401553ff7acb40e25';
    public static $accountToken= 'df9e79fb81de49e7a720b7f0a1af51b4';
    public static $appId='8a216da8552a3cd401553ff7ad190e2b';
    public static $serverIP='app.cloopen.com';
    public static $serverPort='8883';
    public static $softVersion='2013-12-26';

    public static function   sendTemplateSMS($to, $datas, $tempId)
    {
        $m3_result = new M3Result();

        $rest = new CCPRestSmsSDK(SendTemplateSMS::$serverIP, SendTemplateSMS::$serverPort, SendTemplateSMS::$softVersion);
        $rest->setAccount(SendTemplateSMS::$accountSid,SendTemplateSMS::$accountToken);
        $rest->setAppId(SendTemplateSMS::$appId);
        $result = $rest->sendTemplateSMS($to, $datas, $tempId);
        if ($result == NULL) {
            $m3_result->status = 3;
            $m3_result->message = 'result error';
        }
        if ($result->statusCode != 0) {
            $m3_result->status = $result->statusCode;
            $m3_result->message = $result->statusMsg;
            //echo "error code :" . $result->statusCode . "<br>";
            //echo "error msg :" . $result->statusMsg . "<br>";
        } else {
            $m3_result->status = 0;
            $m3_result->message = '发送成功!';
            //echo "Sendind TemplateSMS success!<br/>";
            //获取返回信息
            //$smsmessage = $result->TemplateSMS;
            //echo "dateCreated:" . $smsmessage->dateCreated . "<br/>";
            //echo "smsMessageSid:" . $smsmessage->smsMessageSid . "<br/>";
            //return true;
        }

        return $m3_result;
    }
}