$(document).ready(function(){
	$(".sortbtn").click(function(){
		$(".sortbtn").removeClass("currentsort");
		$(this).addClass("currentsort");
		sortname = $(this).html();
		$.ajax({
			url:'ajax/search.php?sortby='+sortname+"&total=0",
			success:function(data){
				info = jQuery.parseJSON(data);
				showtext 	= info.showtext;
				content 	= info.content;
				$("#showheading").html(showtext);
				$("#mainContent").html(content);
			}
		})
	})

	$("#loadmore").click(function(){
		sortname = $(".currentsort").html();
		totalRec = $("#totalrecords").val();
		 $("#totalrecords").val(parseInt(totalRec)+15);
		$.ajax({
			url:"ajax/search.php?sortby="+sortname+"&total="+totalRec,
			success:function(data){
				$("#mainContent").append(data);
				//console.log(data);
			}
		})
	})
})

$(document).scroll(function(){

	position	= $("#loadmore").offset().top;
	//console.log($(document).height()+" - "+$(window).height()+" == "+$(window).scrollTop())
	if($(window).scrollTop() > position-400 && false){
		console.log("print it");
		//alert(position+"   "+$(window).scrollTop())
		//sortname = $(".sortby").hasClass("current").html();
		position = 0;
		sortname = $(".currentsort").html();
		totalRec = $("#totalrecords").val();
		 $("#totalrecords").val(parseInt(totalRec)+15);
		$.ajax({
			url:"ajax/search.php?sortby="+sortname+"&total="+totalRec,
			success:function(data){
				$("#mainContent").append(data);
				//console.log(data);
			}
		})
		
	}
})

