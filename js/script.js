$(document).ready(function(){
	$("#tel").mask("+7(999) 999-9999");
	$("form").submit(function() {
	    var th = $(this);
	    $.ajax({
		    type: "POST",
		    url: "mail.php",
		    data: th.serialize()
	    }).done(function(){
	        alert("Thank you!");
	        setTimeout(function() {
	            th.trigger("reset");
	        }, 1000);
	    });
	    return false;
	});
});