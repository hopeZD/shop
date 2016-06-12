<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Tool\Validate\ValidateCode;


class ValidateCodeController extends BaseController
{
    public function create($value = '') {
    	$validateCode = new ValidateCode();
    	return $validateCode->doimg();
    }
}