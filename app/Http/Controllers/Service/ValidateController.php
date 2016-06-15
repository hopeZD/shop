<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;

use App\Tool\Validate\ValidateCode;
use App\Tool\SMS\SendTemplateSMS;
use App\Entity\TempPhone;
use App\Models\M3Result;
use Illuminate\Http\Request;


class ValidateController extends Controller
{
    public function create($value='') {
        $validateCode = new ValidateCode();
        return $validateCode->doimg();
    }

    public function sendSMS(Request $request) {

        $m3_result = new M3Result();

        $phone = $request->input('phone', '');

        if($phone == '') {
            $m3_result->status = 1;
            $m3_result->message = '手机号不能为空';
            return $m3_result->toJson();
        }

        $sendTemplateSMS = new SendTemplateSMS();

        $code = '';
        $charset = '1234567890';
        $_len = strlen($charset) -1;
        for($i = 0; $i < 6; $i++){
            $code .= $charset[mt_rand(0, $_len)];
        }

        $m3_result = $sendTemplateSMS->sendTemplateSMS($phone, array($code, 30), 1);
        if($m3_result->status == 0) {
            $tempPhone = new TempPhone();
            $tempPhone->phone = $phone;
            $tempPhone->code = $code;
            $tempPhone->deadline = date('Y-m-d H-i-s') + time() + 60 * 60;
            $tempPhone->save();
        }
        
        return $m3_result->toJson();

    }
}
