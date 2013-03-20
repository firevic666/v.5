var html = "<p>This is an article bla bla</p> <hr/> <p>this is the next page of the article blabla ...</p>";

    
    $(html.split('<hr/>')).each(function(){
        $('#test').append('<div>'+this+'</div>')
    })
    