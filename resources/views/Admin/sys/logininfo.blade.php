@extends('Public.header')
@section('content')
    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 系统管理
            <span class="c-gray en">&gt;</span>
            登录信息管理
            <span class="c-gray en">&gt;</span>
            信息列表
            <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
        </nav>
        <div class="Hui-article">
            <article class="cl pd-20">
                <div class="text-c"> 日期范围：
                    <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
                    -
                    <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
                    <input type="text" name="" id="" placeholder="日志名称" style="width:250px" class="input-text">
                    <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜日志</button>
                </div>
                <div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				</span>
                    <span class="r">共有数据：<strong>54</strong> 条</span>
                </div>
                <div class="mt-10">
                    <table class="table table-border table-bordered table-bg table-hover table-sort">
                        <thead>
                        <tr class="text-c">
                            <th width="25"><input type="checkbox" name="" value=""></th>
                            <th width="80">ID</th>
                            <th width="100">类型</th>
                            <th>内容</th>
                            <th width="17%">用户名</th>
                            <th width="120">客户端IP</th>
                            <th width="120">时间</th>
                            <th width="70">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="text-c">
                            <td><input type="checkbox" value="" name=""></td>
                            <td>15686</td>
                            <td>1</td>
                            <td>登录成功!</td>
                            <td>admin</td>
                            <td>61.233.7.80</td>
                            <td>2014-6-11 11:11:42</td>
                            <td><a title="详情" href="javascript:;" onclick="system_log_show(this,'10001')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe665;</i></a>
                                <a title="删除" href="javascript:;" onclick="system_log_del(this,'10001')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="pageNav" class="pageNav"></div>
            </article>
        </div>
    </section>

@stop
@section('script')
    <script type="text/javascript">

    </script>
@stop