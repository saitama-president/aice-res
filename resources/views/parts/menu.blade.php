{{-- ハンバーガーメニュー　ここから --}}
<div id="MENU" onclick="
        $('#MENU').toggleClass('open');
        $('#MENU_LIST').toggleClass('open');
     ">
    <div class="x1"></div>
    <div class="x2"></div>
    <div class="x3"></div>
</div>

<ul id="MENU_LIST" >
    <li onclick="$('.label',this).toggleClass('open');">
        <div>
            <span class="label">更新履歴</span>
            <div class="description">
                {{--ここは外部ファイルから読むようにすべき--}}
                <ul>
                    <li>2017/08/31:叩くと反応するよ</li>
                    <li>2017/08/31:表情を変化させるように変更</li>
                    <li>2017/08/30:謎コマンド実装</li>
                    <li>2017/08/30:ソーシャルボタン追加</li>
                    <li>2017/08/28:謎のメニューを追加</li>                    
                </ul>
            </div>
        </div>

    </li>
    <li onclick="$('.label',this).toggleClass('open');">
        <div>
            <span class="label">ヘルプ</span>
            <div class="description">
                <p>
                    文字入力欄に入れると動作する特殊なコマンドです。
                </p>
                <ul>
                    @foreach(special_command_list() as $command)
                    <li>
                        <span>#{{$command->command}}</span>
                        <span>（{{$command->name}}）</span>
                        <span>{{$command->description}}</span>
                    </li>                    
                    @endforeach
                </ul>
            </div>
        </div>
    </li>    
    <li onclick="$('.label',this).toggleClass('open');">
        <div>
            <span class="label">このアプリについて</span>
            <div class="description">
                <p>クソアプリだ！</p>
            </div>
        </div>
    </li>
</ul>

{{-- ハンバーガーメニュー　ここまで --}}