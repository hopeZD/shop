@extends('master')

@include('component.loading')

@section('title', '注册')

@section('content')
    <div class="weui_cells_title">注册方式</div>

    <div class="weui_cells weui_cells_radio">

        <label for="x11" class="weui_cell weui_check_label">

            <div class="weui_cell_bd weui_cell_primary">
                <p>手机注册</p>
            </div>

            <div class="weui_cell_ft">
                <input type="radio" class="weui_check" name="register_type" id="x11" checked="checked" />
                <span class="weui_icon_checked"></span>
            </div>

        </label>

        <label for="x12" class="weui_cell weui_check_label">

            <div class="weui_cell_bd weui_cell_primary">
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

        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">手机验证码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input type="number" class="weui_input" placeholder="" />
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

        <div class="weui_cell  weui_vcode">
            <div class="weui_cell_hd"><label  class="weui_label">验证码</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input type="tel" class="weui_input" placeholder="请输入验证码">
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
    <a href="/login" class="bk_bottom_tips bk_important">已有账号？去登录</a>

@endsection


@section('my-js')
    <script type="text/javascript">

        $('.bk_validate_code').click(function () {
            $(this).attr('src', '/service/validate_code/create?random=' + Math.random());
        });

        $('#x12').next().hide();
        
        $('input:radio[name=register_type]').click(function() {
            $('input:radio[name=register_type]').attr('checked', false);
            $(this).attr('checked', true);
            if($(this).attr('id') == 'x11') {
                $('#x11').next().show();
                $('#x12').next().hide();
                $('.weui_cells_form').eq(0).show();
                $('.weui_cells_form').eq(1).hide();
            } else if($(this).attr('id') == 'x12') {
                $('#x12').next().show();
                $('#x11').next().hide();
                $('.weui_cells_form').eq(1).show();
                $('.weui_cells_form').eq(0).hide();
            }
        });

        var enable = true;

        $('.bk_phone_code_send').click(function(event) {

            //发送验证码
            if(enable == false) {
                true;
            }
            $(this).removeClass('bk_important');
            $(this).addClass('bk_summary');

            enable = false;
            var num = 5;
            var interval = window.setInterval(function() {
                $('.bk_phone_code_send').html(--num + 's 重新发送');
                if(num == 0) {
                    $('.bk_phone_code_send').removeClass('bk_summary');
                    $('.bk_phone_code_send').addClass('bk_important');
                    enable = true;
                    window.clearInterval(interval);
                    $('.bk_phone_code_send').html('重新发送');
                }


            }, 1000);

        });

    </script>
@endsection