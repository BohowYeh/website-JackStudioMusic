$(function(){
	$('#contents div[id=PianoMusic]').hide()
	$('#contents div[id=BGM]').hide()
	$('#contents div[id=PianoSheet]').hide()

	$("#contents a").click(function(){
		$('#contents div[id=SoundEffect]').hide();
		$('#contents div[id=PianoMusic]').hide();
		$('#contents div[id=BGM]').hide();
		$('#contents div[id=PianoSheet]').hide();
		$($(this).attr("href")).show();
		$(".current").removeClass("current");
		$(this).addClass("current");
		return false
	})
});