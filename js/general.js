$('div.button').click(function () {
	var id = $(this).attr('id');
	$.post('php/wol.php', {id: id}, function (data) { 
		$('#mainpage').html(data);
	});
});

$("div.button").mouseenter(function(){
  $(this).css("background-color","white");
});

$("div.button").mouseleave(function(){
  $(this).css("background-color","lightblue");
});

$("div.button").mouseover(function(){
  $(this).css('cursor', 'pointer');
});