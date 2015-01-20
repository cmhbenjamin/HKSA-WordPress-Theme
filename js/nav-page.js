//not used
jQuery(document).ready(function( $ ) {

$(document).ready(function(){
  setup();
  $('.page-nav div').on('click',function(){
    $(this).css('background','none');
  });
});
}

);

function setup(){

  $('.page-nav').find('li').each(function(){
    $(this).html('<div style="background-color: rgba('+pickColor()+',0.8);">'+$(this).html()+'</div>');
    }
  );
}

//http://www.colourlovers.com/palette/1930/cheer_up_emo_kid
var colors=['85,98,112','78,205,196','199,244,100','255,107,107','196,77,88'];

//randomly pick a color on the above list
//return a array containing r,g,b value
function pickColor(){
  return colors[Math.floor(Math.random()*colors.length)];
}