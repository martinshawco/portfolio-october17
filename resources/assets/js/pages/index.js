$(function(){

	// Add event handling for Showcase Items
	$(".s_m_item").hover(function(){
		$(this).find(".s_m_i_container").animate({opacity: 1}, 500);
	})
	$(".s_m_item").mouseleave(function(){
		$(this).find(".s_m_i_container").animate({opacity: 0}), 0;
	})


});
