$(document).ready(function() {
	$("div[id='controls']").bind("DOMSubtreeModified",function(){
		if ($("div[class^='crumb']").length == 1) {
			$("div[class^='actions creatable']").hide();
		} else {
			$("div[class^='actions creatable']").show();
		}
	});
});
