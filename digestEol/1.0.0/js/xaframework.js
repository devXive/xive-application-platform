window.addEvent('domready', function(){

    var domainName = window.location.hostname;
    var regExp = new RegExp("/^(http|https|ftp):\/\/([\w\-]+\.)?" + domainName + "/");
        
    // Open external links in a new window
    $$('a').addEvent('click', function(e){
    
        var href = $(this).get('href');
        if(href.match(/^(http|https|ftp):\/\//) && !href.match(regExp)){
            
            window.open(href, '_blank');
            e.stop();
        }        
    });
});