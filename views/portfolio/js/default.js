/**
 * Default js Function Will loop al the information.
 * For the portfolio Page is is necesarry because it wil load al the information
 */
$(function(){
    $.get('portfolio/getPortfolio', function(o){
       
        for (var i = 0; i < o.length; i++)
        {
            $('#getPortfolio').append('<div class="portfoliopart"><div class="title">' + o[i].titel + '</div><div class="context">' + o[i].text + '</div></div>');
        }
 
    }, 'json');

});