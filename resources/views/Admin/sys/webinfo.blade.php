@extends('Public.header')
@section('content')
    <section class="Hui-article-box">
        <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 系统管理 <span class="c-gray en">&gt;</span> 网站信息 <span class="c-gray en">&gt;</span> <label id="title">基本设置</label> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
        <div class="Hui-article">
            <article class="cl pd-20">
                <form action="" method="post" class="form form-horizontal" id="form-article-add">
                    <div id="tab-system" class="HuiTab">
                        <div class="tabBar cl">
                            <span onclick="tagchange(1)" id="tag_t1">基本设置</span>
                            <span onclick="tagchange(2)" id="tag_t2">安全设置</span>
                            <span onclick="tagchange(3)" id="tag_t3">邮件设置</span>
                            <span onclick="tagchange(4)" id="tag_t4">其他设置</span></div>
                        <div class="content_tag" id="tabCon1">
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站名称：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-title" placeholder="控制在25个字、50个字节以内" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>网站域名：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-title" placeholder="www开头即可，结束不需要/" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>关键词：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-Keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>描述：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-description" placeholder="空制在80个汉字，160个字符以内" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>底部版权信息：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-copyright" placeholder="&copy; 2014 H-ui.net" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">备案号：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-icp" placeholder="京ICP备00000000号" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">统计代码：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tabCon content_tag" id="tabCon2">
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">允许访问后台的IP列表：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <textarea class="textarea"></textarea>
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">后台登录失败最大次数：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="" value="5" class="input-text">
                                </div>
                            </div>
                        </div>
                        <div class="tabCon content_tag" id="tabCon3">
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">邮件发送模式：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">SMTP服务器：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">SMTP 端口：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="" value="25" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="email-name" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">邮箱密码：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="password" id="email-password" value="" class="input-text">
                                </div>
                            </div>
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2">收件邮箱地址：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="email-address" value="" class="input-text">
                                </div>
                            </div>
                        </div>
                        <div class="tabCon content_tag"  id="tabCon4">
                            <div class="row cl">
                                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>客服qq：</label>
                                <div class="formControls col-xs-8 col-sm-9">
                                    <input type="text" id="website-title" placeholder="qq号" value="" class="input-text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row cl">
                        <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                            <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                            <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </form>
            </article>
        </div>
    </section>

@stop
@section('script')
    <script type="text/javascript">
        function tagchange(tag){
            var id =tag?tag:1;
            $(".content_tag").css('display','none');
            $("#tabCon"+id).css('display','block');
            $("#title").html($("#tag_t"+id).html());
        }
    </script>
@stop