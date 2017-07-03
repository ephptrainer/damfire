$(document).ready(function(){
	$(".sortbtn").click(function(){
		sortby = $(this).html();

		$.ajax({
			url:'search.php?sortby='+sortby,
			success:function(data){
				console.log(data);
			}
		})
	})
})