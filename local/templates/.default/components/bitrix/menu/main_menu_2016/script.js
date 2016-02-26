var jshover = function()
{
	var menuDiv = document.getElementById("horizontal-multilevel-menu")
	if (!menuDiv)
		return;

	var sfEls = menuDiv.getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) 
	{
		sfEls[i].onmouseover=function()
		{
			this.className+=" jshover";
		}
		sfEls[i].onmouseout=function() 
		{
			this.className=this.className.replace(new RegExp(" jshover\\b"), "");
		}
	}
}

if (window.attachEvent) 
	window.attachEvent("onload", jshover);



jQuery( document ).ready(function( $ ) {
  var sub_menu = $(".main_menu_wr .horizontal-multilevel-menu li ul");
	
	$(sub_menu).hover(
		
		function(){
				var sib_link = $(this).siblings('a');
				$(sib_link).addClass('hovered');
		},
		function(){
				var sib_link = $(this).siblings('a');
				$(sib_link).removeClass('hovered');
		}
	)
});