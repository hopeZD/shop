<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Tool\ValidateCode\ValidateCode;


class ValidateCodeController extends BaseController
{
    public function create($value = '') {
    	$validateCode = new ValidateCode();
    	return $validatecode->doimg();
    }
}
