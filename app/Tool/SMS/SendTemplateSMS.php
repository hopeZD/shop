<?php

namespace App\Tool\SMS;

use App\Tool\SMS\CCPRestSmsSDK;

class SendTemplateSMS {

   //主账号
   private $accountSid= '8a216da8552a3cd401553ff7acb40e25';

   //主账号Token
   private $accountToken= 'df9e79fb81de49e7a720b7f0a1af51b4';

   //应用ID
   private $appId='8a216da8552a3cd401553ff7ad190e2b';

   //请求地址
   private $serverIP='app.cloopen.com';

   //请求端口
   private $serverPort='8883';

   //REST版本号
   private $softVersion='2013-12-26';


   /**
    * 发送模板短信
    * @param to 手机号码集合,用英文逗号分开
    * @param datas 内容数据 格式为数组 例如：array('Marry','Alon')，如不需替换请填 null
    * @param $tempId 模板Id,测试应用和未上线应用使用测试模板请填写1，正式应用上线后填写已申请审核通过的模板ID
    */
   function sendTempSMS($to,$datas,$tempId)
   {
       // 初始化REST SDK
       global $accountSid,$accountToken,$appId,$serverIP,$serverPort,$softVersion;
       $rest = new REST($serverIP,$serverPort,$softVersion);
       $rest->setAccount($accountSid,$accountToken);
       $rest->setAppId($appId);

       // 发送模板短信
       echo "Sending TemplateSMS to $to <br/>";
       $result = $rest->sendTemplateSMS($to,$datas,$tempId);
       if($result == NULL ) {
           echo "result error!";
       }
       if($result->statusCode!=0) {
           echo "error code :" . $result->statusCode . "<br>";
           echo "error msg :" . $result->statusMsg . "<br>";
           //TODO 添加错误处理逻辑
       }else{
           echo "Sendind TemplateSMS success!<br/>";
           // 获取返回信息
           $smsmessage = $result->TemplateSMS;
           echo "dateCreated:".$smsmessage->dateCreated."<br/>";
           echo "smsMessageSid:".$smsmessage->smsMessageSid."<br/>";
           //TODO 添加成功处理逻辑
       }
   }

}