// You can add these inside a <script></script> tag in the footer below the jquery call
//Dont forget to switch out *******MENU-ID****** for your menu id from line 22 of header.php 

	$('.trigger_button').dropdown();

    $(function() {
    $('#*******MENU-ID******>li').each(function() {
        if ( $(this).children('ul').size() > 0 ) {
            $(this).prepend('<span data-target="dropdown-toggle" class="mobileCaret pull-right trigger_button" data-toggle="dropdown">▼</span>'); 
        }           
	    });
	});