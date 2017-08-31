<style type="text/css">

  /*ねこさん*/
  @foreach(config("ai.persons") as $name=>$person)

    #TALK .AI .face .name:before{
      content: "{{$person["name"]}}";
    }
    @foreach($person["faces"] as $key=>$url)
      @if($key=="")
      #TALK .AI .face
      @else
      #TALK .AI .face.{{$key}}
      @endif
      {
        background-image: url('{{url($url)}}');
      }
    @endforeach

  @endforeach



  #TALK .YOU .face{
    background-image: url('https://saitama-tec.co.jp/wp-content/uploads/2017/08/ojisan3_question.png');
  }
  #TALK .YOU .face .name:before{
    content: "お前";
  }
</style>
