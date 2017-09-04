<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">
    @foreach($menu as $key=>$list)
        <div class="menu_dropdown bk_2">
            <dl id="menu-admin">
                <dt>
                    <i class="Hui-iconfont">&#{{$list['icon']}}</i>
                    {{$key}}<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
                </dt>
                <dd >
                    <ul>
                        @foreach($list['submenu'] as $k=>$l)
                            <li  @if(Request::path()=='admin/'.$k) class='current' @endif>
                                <a href="{{url('admin/'.$k) }}">{{$l}}</a></li>
                        @endforeach
                    </ul>
                </dd>
            </dl>
        </div>
    @endforeach

</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->