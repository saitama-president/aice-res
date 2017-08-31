@extends('layout')

@section('header')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<link rel="stylesheet" href="css/session.css" type="text/css">
<link rel="stylesheet" href="css/menu.css" type="text/css">
<link rel="stylesheet" href="css/main_frame.css" type="text/css">



<script type="text/javascript" src="js/session.js"></script>
<base target="_blank">

{{--顔イメージのロード--}}
@include('parts.faces')  

@endsection

@section('contents')

@include('parts.social_button')

@include('parts.menu')

<div id="SESSION" >
    <ul id="TALK">
        <li class="item">            
            <div class="AI person">
                <div class="face">
                    <span class="name"></span>
                </div>
                <div class="serif" >
                    <p>なんでも質問に答えますよ！</p>
                    <p>…答えられるものだけ。</p>
                </div>                            
            </div>
        </li>
    </ul>
    <div id="bottom"></div>
</div>


<div id="input">
    <hr>
    <input id="question" class="question" placeholder="気軽に問いかけてみてください。（例：誰お前？）"
           type="text" value="" onchange="question(this.value);"/>
    <input id="csrf" type="hidden" name="_token" value="{{csrf_token()}}" />
</div>

@endsection
