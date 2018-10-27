$(".pus li").hover(function(){
	$(this).children("#pus-produce").css("display","block");
},function(){
	$(this).children("#pus-produce").css("display","none");
})
$(".newgo-one a").mouseover(function(){
	$(this).addClass("newgo-oneB").siblings().removeClass("newgo-oneB");
});

//热门产品
$(".Hotproduce-now li").slice(0,5).css("margin-right","10px");
$(".Hotproduce-now li").hover(function(){
	var index = $(this).index();
	$(".Hotmousleave").eq(index).css("opacity","0");
	$(".hot-number").eq(index).css("display","block");
},function(){
	$(".Hotmousleave").css("opacity","1");
	$(".hot-number").css("display","none");
})
$(".Hot-img").eq(3).find("img").css("width","290px");
 
 //精选手机
 $(".Comproduce-now li").slice(0,5).css("margin-right","10px");
$(".Comproduce-now li").hover(function(){
	var index = $(this).index();
	$(".Commousleave").eq(index).css("opacity","0");
	$(".Com-number").eq(index).css("display","block");
},function(){
	$(".Commousleave").css("opacity","1");
	$(".Com-number").css("display","none");
})
$(".Com-img").find("img").css("width","290px");
$(".Com-img").eq(1).find("img").css("width","250px");
  
//精选配件
$(".Accproduce-now li").slice(1,5).css("margin-right","10px");

$(".Accproduce-now li").slice(3,6).css("margin-top","10px");

$(".Accproduce-now li").hover(function(){
	var index = $(this).index()-1;
	$(".Accmousleave").eq(index).css("opacity","0");
	$(".Acc-number").eq(index).css("display","block");
},function(){
	var index = $(this).index()-1;
	$(".Accmousleave").css("opacity","1");
	$(".Acc-number").css("display","none");
})
$(".Acc-img").find("img").css("width","290px");
$(".Acc-img").eq(2).find("img").css("width","250px");

//视频
$(".Move-li").slice(0,3).css("margin-right","10px")