<?php
/**
 * Created by PhpStorm.
 * User: meteor
 * Date: 16/6/15
 * Time: 上午10:53
 */
namespace App\Models;

class M3Result {
    public $status;
    public $message;

    public function toJson() {
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
}