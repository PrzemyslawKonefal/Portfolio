$(document).ready(function() {

  // scroll navbar Logiczne
      $(window).scroll(function () {
          var h = window.innerHeight / 2;
          var scroll = $(this).scrollTop();
          if (scroll) {
            $(".navbar").css('background', 'rgba(24, 24, 24, 0.6)');
          }
          else{
          $(".navbar").css('background', 'rgba(24, 24, 24, 0)');
          }

          if(scroll>=$('#hero').position().top -h){
            setTimeout(function(){
              $(".main-category").animate({left: "-5px"}, 3500);
            }, 100);
          }
          if(scroll>=$('.category').eq(1).position().top - h){
            setTimeout(function(){
              $('.category-explanation').find('img').css('opacity', '1');
              $('.category-explanation').find('img').animate({top: "0"}, 1500);
                setTimeout(function(){
                $('.main-explanation').css('opacity', '1');
              }, 1500);
            }, 100);
          }
          if(scroll>=$('.category').eq(2).position().top-h){
            $('.project').each(function(){
              if(scroll>=$('.category').eq(2).position().top - h + $(this).position().top){
                $(this).animate({right: "0"}, 1500);
              }
            })
;
          }
          if(scroll>=$('.category').eq(3).position().top-h){
            $('.category').eq(3).find("h2").css("transform", "rotate(0deg)");
          }
          if(scroll>=$('.category').eq(3).position().top-h+300){
            $('.additional').css("opacity", "1");
            $('.additional').animate({top: "-70px"}, 500);
          }
      });
      setTimeout(function(){
        $(".me").animate({opacity: "1", padding: "75px"}, 1500);
      }, 500);



        //picture load
      $(".panel li").click( function(){

        var TechnologySource = 'images/Technologies/' + $(this).text() + '.png';
        $('#technologyPicture').attr('src', TechnologySource);
        //count percentage
        $(".percentage").css("opacity", "1");
        var percentCounter = 1;
        var value = this.value;
        var interval = setInterval(function(){
            $(".percentage").text(percentCounter + "%");
            if(percentCounter >= value) clearInterval(interval);
            percentCounter++;
        },60);

        //remove previous disable clicking
        $(".percent-piece").remove();
        $(".panel li").css("pointer-events", "none");
        //create new pieces
        var pieceNumber = value/10;
        for(i = 0; i < pieceNumber; i++){
            $(".graph").append("<div class='percent-piece'></div>")
        }
        if(value%10){
          pieceNumber = Math.round(pieceNumber);
          if(value%10<5)pieceNumber++;
          $(".percent-piece").eq(0).css("height", value%10 + "%");
        };

        //place at the bottom and animate
        $(".percent-piece").css("bottom", "-" + (100-value) + "%");
        displayPiece();

        function displayPiece(){
          pieceNumber--;
          $(".percent-piece").eq(pieceNumber).animate({right: "0"}, 600);
          if(pieceNumber === 0){$(".panel li").css("pointer-events", "auto"); return;}
          setTimeout(function(){displayPiece()}, 600);
      }
      });

      //bubbles movement
      function moveBubbles() {
          var width = window.innerWidth;
          $(".bubble").css({top: "100%", transform: "scale(1, 1)", opacity: "1"});
          for(i=0; i<$('.bubble').length; i++){
              var randomStartWidth = Math.floor(Math.random() * width);
              var randomEndWidth = Math.floor(Math.random() * width);
              var randomDelay = Math.floor(Math.random() * 7000);
              var randomHeight = 30 + Math.floor(Math.random() * 40);
              $('.bubble').eq(i).css({left: randomStartWidth, height: randomHeight});
              $('.bubble').eq(i).stop().delay(randomDelay).animate({top: "-70", left: randomEndWidth}, 7000);
          }
      }
        $(".bubble").hover(function(){
          $(this).css({transform: "scale(1.3, 1.3)", opacity: "0"});
        });
        moveBubbles();
        setInterval(function(){moveBubbles()},14000)
});


//scroll to the topics

$(".nav-item").click(function() {
  var destination = $(".category").eq($(this).index()).offset().top - 85;
    $('html, body').animate({
        scrollTop: destination
    }, 1000);
});
