@extends('layout')

@section('header')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<link rel="stylesheet" href="css/session.css" type="text/css">
@endsection

@section('contents')

<style>
    #map{
        min-width: 99vw;
        min-height: 99vw;
        background-color: gray;
        position: relative;
    }

    .bit{
        min-width: 0.5vw;
        min-height: 0.5vw;
        position: absolute;        
        color: red;
        z-index: 100;
    }

    @for($i=0;$i<100;$i++)
    .x{{$i}}{
        left: {{$i}}%;
    }
    .y{{$i}}{
        top: {{$i}}%;
    }

    @endfor

    .Hexagon{	
	display: block;
	width: 1.7em;
	height:1em;
	line-height: 1em;
	background: tomato;
	position: relative;
	text-align: center;
	color: #fff;
    }


.Hexagon:before{
	content:'';
	position: absolute;
	top: -0.5em;
	left:0;
	width:0;
	height: 0;
	border-left: 0.85em solid transparent;
	border-right: 0.85em solid transparent;
	border-bottom: 0.5em solid tomato;
}
.Hexagon:after{
	content: ''; 
	position: absolute;
	top:1em;
	left:0;
	width:0;
	height: 0;
	border-left: 0.85em solid transparent;
	border-right: 0.85em solid transparent;
	border-top: 0.5em solid tomato;
}

</style>





<div id="map">
    map
    <span class="bit x1 y2">●</span>
    <span class="bit x1 y20">●</span>
</div>


<a style="position: absolute; left:3em;top:3em;" class="Hexagon">a</a>

@endsection
