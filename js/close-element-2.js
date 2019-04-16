$(document).ready(function(){
    $("#close-link3").click(function(){      
        $(".x_panel3").toggle();
    });

    $("#turn").click(function(){      
    	
        $("#turn").toggleClass('degree', '');
    });
});