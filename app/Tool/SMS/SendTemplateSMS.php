<?php

namespace App\Tool\SMS;

use App\Tool\SMS\CCPRestSmsSDK;


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
        $rest = new CCPRestSmsSDK(SendTemplateSMS::$serverIP, SendTemplateSMS::$serverPort, SendTemplateSMS::$softVersion);
        $rest->setAccount(SendTemplateSMS::$accountSid,SendTemplateSMS::$accountToken);
        $rest->setAppId(SendTemplateSMS::$appId);
        $result = $rest->sendTemplateSMS($to, $datas, $tempId);
        if ($result == NULL) {
//               echo "result error!";
            return false;
        }
        if ($result->statusCode != 0) {
            return false;
//               echo "error code :" . $result->statusCode . "<br>";
//               echo "error msg :" . $result->statusMsg . "<br>";
        } else {
//               echo "Sendind TemplateSMS success!<br/>";
            // 获取返回信息
//               $smsmessage = $result->TemplateSMS;
//               echo "dateCreated:" . $smsmessage->dateCreated . "<br/>";
//               echo "smsMessageSid:" . $smsmessage->smsMessageSid . "<br/>";
            return true;
        }
    }
}