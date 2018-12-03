$(document).ready(function(){
	$("#tel").mask("+7(999) 999-9999");
	$("form").submit(function() {
	    var th = $(this);
	    $.ajax({
		    type: "POST",
		    url: "mail.php",
		    data: th.serialize()
	    }).done(function(){
	        $(".success-modal").css("display", "flex");
	        setTimeout(function() {
	            th.trigger("reset");
	        }, 1000);
	    });
	    return false;
	});
	$(".success-modal").click(function(){
		$(this).css("display", "none");
	}).children().click(function(e){
        e.stopPropagation();
    });
	$(".service-item-text").click(function(){
		$(this).siblings(".service-item-modal").css("display", "flex");
	});
	$(".service-item-modal").click(function(){
		$(".service-item-modal").css("display", "none");
	}).children().click(function(e){
        e.stopPropagation();
    });

});