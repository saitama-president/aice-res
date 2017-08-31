var $lock = false;

$().ready(function(){
    $("#TALK .AI .face").dblclick(function(){
        slap();
    });
});

function slap(){
  var $talk = $("#TALK");
  var $ai_name="AI";

  $AI={
    face:$("<div>", {"class": `face angry`})
            .append($("<span>", {"class": "name"}))
            .dblclick(function(){slap();}),
    serif:$("<div>", {"class": "serif"}).append($("<p>").text("叩かないで！"))
  };  
  $AI_ITEM= $("<div>", {"class": `${$ai_name} person`}).append($AI.face,$AI.serif);
  $talk.append($("<li>",{"class": "item"}).append($AI_ITEM));
    
}

function question($text) {

  var $csrf = $("#csrf").val();
  var $talk = $("#TALK");
  var $input = $('#question');

  $text = $text.trim();

  if ($lock) {
    return false;
  }
  if ($text == "") {
    return false;
  }


  $lock = true;
  $id = new Date().getTime();
  $input.val("");

  var $you = "YOU";
  var $ai = "AI";

  $YOU={
      face:$("<div>", {"class": `face`}).append($("<span>", {"class": "name"})),
      serif:$("<div>", {"class": `serif`}).append($("<p>").text($text))
  };

  $YOU = $("<div>", {"class": `${$you} person`})
          .append($YOU.serif,$YOU.face);
          
  $AI={
    face:$("<div>", {"class": `face`}).append($("<span>", {"class": "name"})),
    serif:$("<div>", {"class": "serif", id: $id}).append($("<p>").text("ちょっと待ってね…"))
  };

  $YOU_ITEM="";
  $AI_ITEM= $("<div>", {"class": `${$ai} person`})
          .append($AI.face,$AI.serif);
  $talk.append($("<li>",{"class": "item"}).append($YOU,$AI_ITEM));

  $.ajax({
    url: "/question",
    type: "POST",
    data: {
      "text": $text,
      "_token": $csrf
    },
    success: function ($data) {
      //answer();
      setTimeout(
              function () {
                //セリフを追加
                $AI.serif.append($("<p>").html($data["message"]));
                //表情を変更
                $AI.face.addClass("laugh");
                $lock = false;
                toBottom();
              }
      , 3000);
    },
    error: function ($e) {
      setTimeout(function () {
        $AI.serif.append($("<p>").html("ごめん、また後にして…"));
        $AI.face.addClass("cry");
        $lock = false;
        toBottom();
      }
      , 4500);
    }

  });


  //$($talk.last()).focus();
  toBottom();
}

function toBottom() {
  $("html,body").animate({scrollTop: $(document).height()});
}

