$(document).ready
(
function()
	{
	$("p").click
		(
		function()
			{
			$("#hide_me").hide(250);
			}
		);
	$("#b1").click
		(
		function()
			{
			$("p").hide(250);
			}
		);
	$("#b2").click
		(
		function()
			{
			$("p").show(250);
			}
		);
	$("#b3").click
		(
		function()
			{
			$("p").toggle(250);
			}
		);
	$("#b4").click
		(
		function()
			{
			$("p").fadeOut(250);
			}
		);
	$("#b5").click
		(
		function()
			{
			$("p").fadeIn(250);
			}
		);
	$("#b6").click
		(
		function()
			{
			$("p").fadeToggle(250);
			}
		);
	$("#b7").click
		(
		function()
			{
			$("#hide_me").fadeTo("slow", 0.15);
			$(".can_hide").fadeTo("slow", 0.7);
			}
		);
	$("#b8").click
		(
		function()
			{
			$("#hide_me").fadeTo("slow", 1);
			$(".can_hide").fadeTo("slow", 1);
			}
		);
	$("#b9").click
		(
		function()
			{
			$("#hide_me").slideDown();
			$(".can_hide").slideDown();
			}
		);
	$("#b10").click
		(
		function()
			{
			$("#hide_me").slideUp();
			$(".can_hide").slideUp();
			}
		);
	}
);