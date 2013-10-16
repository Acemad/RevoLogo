// JavaScript Document
$(document).ready(function() 
{
	$('#revoslide').carousel({
		interval:2000
	});
	
	var cl;
	$('.number').mouseenter(
		function()
		{			
			if ($(this).hasClass('one'))
			{				
				cl = 'one';
			} else
			if ($(this).hasClass('two'))
			{
				cl = 'two';
			} else
			if ($(this).hasClass('three'))
			{
				cl = 'three';
			} else
			if ($(this).hasClass('four'))
			{ 
				cl = 'four';
			}
			
			$('.info-step.'+cl).slideDown(250);
		}
	)
	
	$('.number').mouseleave(
		function()
		{
			$('.info-step.'+cl).slideUp(500);
		}
	)
	
});