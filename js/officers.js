jQuery(document).ready(function( $ ) {

  var entries=$('.entry-content').find('p');
  entries.each(function(index,element){
    //wrap the whole thing into a <div>
    $(this).html($('<div>').html($(this).html()).addClass('description'));

    //put picture at the beginning
    $(this).prepend('<div class="image" title="officer picture"></div>');

    //var image=$('.entry-content p img')[index];
    var image=$(this).find("img");
    if(image){
      var image_src=image.attr('src');
      var bg_pos= image.css('background-position');
      var bg_size=image.css('background-size');
      if(image_src){
        $(this).find('.image').css('background-image','url('+image_src+')');

        if(bg_pos!="0% 0%"){
          $(this).find('.image').css('background-position',bg_pos);
        }

        if(bg_size!="auto auto"||bg_size!="auto"){
          console.log(bg_size);
          $(this).find('.image').css('background-size',bg_size);
        }

      }
    }
	
  });
  $('.entry-content p img').remove();
});

