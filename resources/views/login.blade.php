@extends('master')

@include('component.loading')

@section('title', '登录')

@section('content')
  <div class="weui_cells_title">登录</div>

  <div class="weui_cells weui_cells_form">
    <div class="weui_cell">
      <div class="weui_cell_hd"><label class="weui_label">账号</label></div>

      <div class="weui_cell_bd weui_cell_primary">
      	<input type="tel" class="weui_input" placeholder="邮箱或手机号" />
      </div>
			
    </div>
		
		<div class="weui_cell">
	  	<div class="weui_cell_hd"><label  class="weui_label">密码</label></div>
	  	<div class="weui_cell_bd weui_cell_primary">
	  		<input type="tel" class="weui_input" placeholder="不少于6位">
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
  	<a href="javascript:" class="weui_btn weui_btn_primary" onclick="onLoginClick();">登录</a>
  </div>
  <a href="/register" class="bk_bottom_tips bk_important">没有账号？去注册</a>


@endsection

@section('my-js')
	<script type="text/javascript">
		$('.bk_validate_code').click(function () {
			$(this).attr('src', '/service/validate_code/create?random=' + Math.random());
		})
	</script>
@endsection
