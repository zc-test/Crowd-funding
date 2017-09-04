<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('login/admin_login.css')}}" />
    <style>
        body{height:100%;background:#16a085;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <form  class="login-form"  name= "myform" method='post'  action="{{ route('login.login') }}" onsubmit = "" >
        {{csrf_field()}}
        <dl class="admin_login">
            <dt>
                <strong>后台管理系统</strong>
                <em>Management System</em>
            </dt>
            <dd class="user_icon">
                <input type="text" placeholder="账号" class="login_txtbx login" name="username"/>
            </dd>
            <dd class="pwd_icon">
                <input type="password" placeholder="密码" class="login_txtbx register" name="password"/>
            </dd>
            <dd class="val_icon">
                <div class="checkcode">
                    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
                    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
                </div>
                <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
            </dd>
            <dd>
                <input type="submit" value="立即登陆" class="submit_btn"/>
            </dd>

            <dd>
                <p>© 2016-2017 GodGhost 版权所有</p>
                <p>合肥</p>
            </dd>
        </dl>
    </form>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{asset('/js/admin/jquery/1.9.1/jquery.min.js')}}"></script>
<script src="{{asset('login/admin_login.js')}}"></script>
<script src="{{asset('login/Particleground.js')}}"></script>
<script src="{{asset('layer/layer.js')}}"></script>
<script type="text/javascript">
    @if(count($errors)>0)
        layer.msg("{{$errors->first()}}");
    @endif
    @if(session('success'))
        layer.msg("{{session('success')}}");
    @endif
</script>
</html>
