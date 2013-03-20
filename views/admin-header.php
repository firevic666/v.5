<html>
    <head>
            <meta content="initial-scale=1.0" name="viewport">
    <link href="public/css2/jquery.minicolors.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="public/js/jquery.minicolors.js"></script>
    <script>

        $(document).ready( function() {
            
            var consoleTimeout;
            
            $('.minicolors').each( function() {
                //
                // Dear reader, it's actually much easier than this to initialize 
                // miniColors. For example:
                //
                //  $(selector).minicolors();
                //
                // The way I've done it below is just to make it easier for me 
                // when developing the plugin. It keeps me sane, but it may not 
                // have the same effect on you!
                //
                $(this).minicolors({
                    control: $(this).attr('data-control') || 'hue',
                    defaultValue: $(this).attr('data-default-value') || '',
                    inline: $(this).hasClass('inline'),
                    letterCase: $(this).hasClass('uppercase') ? 'uppercase' : 'lowercase',
                    opacity: $(this).hasClass('opacity'),
                    position: $(this).attr('data-position') || 'default',
                    styles: $(this).attr('data-style') || '',
                    swatchPosition: $(this).attr('data-swatch-position') || 'left',
                    textfield: !$(this).hasClass('no-textfield'),
                    theme: $(this).attr('data-theme') || 'default',
                    change: function(hex, opacity) {
                        
                        // Generate text to show in console
                        text = hex ? hex : 'transparent';
                        if( opacity ) text += ', ' + opacity;
                        text += ' / ' + $(this).minicolors('rgbaString');
                        
                        // Show text in console; disappear after a few seconds
                        $('#console').text(text).addClass('busy');
                        clearTimeout(consoleTimeout);
                        consoleTimeout = setTimeout( function() {
                            $('#console').removeClass('busy');
                        }, 3000);
                        
                    }
                });
                
            });
            
        });
        
    </script>
    <style>
     .example {
            background: #F8F8F8;
            padding: 10px;
            margin: 30px 0;
        }
        
        #console {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            height: 32px;
            font-family: monospace;
            line-height: 32px;
            text-align: center;
            background: black;
            color: white;
            z-index: 100;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -webkit-transition: all .5s;
            transition: all .5s;
            opacity: 0;
        }
        
        #console.busy {
            opacity: .85;
        }    
    </style>
        
    </head>
<div class="wrap">
    <div id="header">
        <div id="top">
            <div class="left">
                <p>Welcome! [ <a href="<?php echo URL; ?>dashboard/logout">Logout</a> ]</p>
            </div>
        </div>
        <div id="nav">
            <ul>
                <li class="upp"><a href="<?php echo URL; ?>dashboard">Dashboard</a>
                    <ul>	
                        <li>&#8250; <a href="<?php echo URL; ?>dashboard">Artikelen</a></li>
                        <li>&#8250; <a href="<?php echo URL; ?>dashboard/input">Nieuw Artikel</a></li>
                    </ul>
                </li>
                <li class="upp"><a href="<?php echo URL; ?>user">Users</a>
                    <ul>	
                        <li>&#8250; <a href="<?php echo URL; ?>user">Users</a></li>
                    </ul>
                </li>
                <li class="upp"><a href="<?php echo URL; ?>system">system</a>
                    <ul>	
                        <li>&#8250; <a href="<?php echo URL; ?>system/background">background</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div id="content">