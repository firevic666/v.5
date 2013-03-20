$(function(){
    $.get('dashboard/xhrGetListings', function(o){
       
        for (var i = 0; i < o.length; i++)
        {
            $('#listInsert').append('<div>' + o[i].titel + o[i].text + '<a class="del" rel="'+ o[i].id +'"href="#">DELETE</a></div>');
        }
        $('.del').click(function(){
            delItem = $(this);
            var id = $(this).attr('rel');
            alert(id);
            $.post('dashboard/xhrDeleteListing', {'id': id}, function(o){
                //$('#listingInsert').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">DELETE</a></div>');
                delItem.parent().remove();
            }, 'json');
       
            return false;
        });
    
    }, 'json');
    $('#randomInsert').submit(function(){
        var url = $(this).attr('action');
        var data = $(this).serialize();
       
        $.post(url, data , function(o){
            $('#listingInsert').append('<div>' + o.text + '<a class="del" rel="'+ o.id +'" href="#">DELETE</a></div>');
        }, 'json');
        
        return false;
    });
});