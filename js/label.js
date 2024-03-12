$(function(){
	$("button").click(function(){
		var target=$(this).attr("value");
		if($(this).hasClass(target)||target=="open"){
			return false
		}
		if($(this).hasClass(target)||target=="none"){
			return false
		}
		$("#list div").each(function(){
			$(this).animate({"opacity":0},300,function(){
				$(this).hide();
				if($(this).hasClass(target)||target=="All"){
					$(this).show();
					$(this).animate({"opacity":1},300);
				}
			})
		})
	})
})