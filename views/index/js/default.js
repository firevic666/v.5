$(function(){
    $.get('index/getHome', function(o){
       
        for (var i = 0; i < o.length; i++)
        {
            $('#getInfo').append('<span class="title">' + o[i].titel + '</span><br>' + o[i].text);
        }
 
    }, 'json');

});