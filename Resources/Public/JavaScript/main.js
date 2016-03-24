$(function(){

	$('.btn-toggle-nav').click(function(){
		if($(this).hasClass('is-active')) {
			toggleMainNav('close');
		} else {
			toggleMainNav('open');
		}
	});

	$('.navOverlay').click(function(){
		$('#dl-menu').dlmenu('closeMenu');
//		toggleMainNav('close');
	});
/*
	$('body > header > nav li:not(.active)').each(function(){
		$(this).find('ul').hide();
	});
	$('.sub > .toggle').click(function(){
		var parent = $(this).parent();
		parent.toggleClass('active');

		if(parent.hasClass('active')) {
			parent.children('ul').stop(true).slideDown();
		} else {
			parent.children('ul').stop(true).slideUp();
		}

	});
*/
    $('#dl-menu').find('ul.dl-submenu').each(function (idx) {
        $(this).prepend('<li>' + $(this).prev().get(0).outerHTML + '</li>');
    });

	$('#dl-menu').dlmenu({
		animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' },
		useActiveItemAsLink:true,
		dlTriggerSelector:'#navToggle',
		onopenMenu : function(){ toggleMainNav('open') },
		onCloseMenu : function(){ toggleMainNav('close') }
	});
});



function toggleMainNav(type) {
	if(type == 'open') {
		$('.btn-toggle-nav').addClass('is-active');
		$('body').addClass('navOpen');
	} else {
		$('.btn-toggle-nav').removeClass('is-active');
		$('body').removeClass('navOpen');
	}	
}
