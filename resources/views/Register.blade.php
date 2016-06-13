@extends('master')

@include('component.loading')

@section('title', '注册')

@section('content')
    <div class="weui_cells_title">注册方式</div>
    <div class="weui_cells weui_cells_radio">
        <label for="X11" class="weui_cell weui_check_label">
            <div class="weui_cell_hd weui_cell_primary">
                <p>手机注册</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" class="weui_check" name="register_type" id="x11" checked="手机注册"/>
                <span class="weui_icon_checked"></span>
            </div>
        </label>

        <label for="X12" class="weui_cell weui_check_label">
            <div class="weui_cell_hd weui_cell_primary">
                <p>邮箱注册</p>
            </div>
            <div class="weui_cell_ft">
                <input type="radio" class="weui_check" name="register_type" id="x12" />
                <span class="weui_icon_checked"></span>
            </div>
        </label>

    </div>

    <div class="weui_cells weui_cells_form">
        
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input type="tel" placeholder="" class="weui_input">
            </div>
        </div>

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">密码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input type="text" placeholder="不少于6位数" class="weui_input">
            </div>
        </div>
        
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">确认密码</label></div>
            <div class="weui_cell_bd weui_primary">
                <input type="text" class="weui_input" placeholder="不少于6位数" />
            </div>
        </div>

        <div class="weui_cell weui_vcode">
            <div class="weui_cell_hd"><label class="weui_label">验证码</label></div>
            <div class="weui_cell_bd weui_primary">
                <input type="text" class="weui_input" placeholder="请输入验证码" />
            </div>
            <div class="weui_cell_ft">
                <img src="/service/validate_code/create" class="bk_validate_code" />
            </div>
        </div>

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">手机验证码</label></div>
            <div class="weui_cell_bd weui_primary">
                <input type="text" class="weui_input" placeholder="" />
            </div>
            <p class="bk_important bk_phone_code_send">发送验证码</p>
            <div class="weui_cell_ft">
            </div>
        </div>

    </div>

    <div class="weui_cells weui_cells_form" style="display: none;">

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">邮箱</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input type="tel" placeholder="" class="weui_input">
            </div>
        </div>

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">密码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input type="text" placeholder="不少于6位数" class="weui_input">
            </div>
        </div>

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">确认密码</label></div>
            <div class="weui_cell_bd weui_primary">
                <input type="text" class="weui_input" placeholder="不少于6位数" />
            </div>
        </div>

        <div class="weui_cell weui_vcode">
            <div class="weui_cell_hd"><label class="weui_label">验证码</label></div>
            <div class="weui_cell_bd weui_primary">
                <input type="text" class="weui_input" placeholder="请输入验证码" />
            </div>
            <div class="weui_cell_ft">
                <img src="/service/validate_code/create" class="bk_validate_code" />
            </div>
        </div>

    </div>

    <div class="weui_cells_tips"></div>
    <div class="weui_btn_area">
        <a href="javascript:" class="weui_btn weui_btn_primary" onclick="onRegisterClick();">注册</a>
    </div>
    <a href="/register" class="bk_bottom_tips bk_important">已有账号？去登录</a>

@endsection


@section('my_js')


@endsection