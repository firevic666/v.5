/**
 * Gets Value's of About from Model and converts information into string.
 * Information on page : About / Over mij
 */
$(function(){
    $.get('about/getAbout', function(o){
       console.log(o);
        for (var i = 0; i < o.length; i++)
        {
            $('#getAbout').append('<div class="title">' + o[i].titel + '</div><div class="context">' + o[i].text + '</div>');
        }
 
    }, 'json');

});