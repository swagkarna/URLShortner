$(document).on('click','#btn',function(){
var url = $("#url").val()
	$.ajax({
	type : 'POST',
	url : 'process.php',
	data : "url="+url,
	success : function(data){
    $("#url").val(data);
    $("#url").attr("id","urlCopy");
    $("#btn").attr("id","btnCopy");
    $("#revert").html("COPY");
    $("#close").fadeIn(1000);
	},
	complete : function(){}
	});
});

$(document).on('click','#btnCopy',function(){
	$('#urlCopy').focus();
	$('#urlCopy').select();
	document.execCommand('copy');
});

$(document).on('click','#Xclose',function(){
    $("#urlCopy").attr("id","url");
    $("#btnCopy").attr("id","btn");
    $("#url").val("");
    $("#revert").html("SHORTEN");
    $("#close").fadeOut(1000);
});