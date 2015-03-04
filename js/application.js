//created by Joshua Shuster
//https://github.com/naysayer
var urlObj = {}
var url, key, selectedColor = '';

$(document).ready(function(){
	init_variables();
	build_url();
	hide_border_options();
	get_widget();
	initiate_color_picker();
	border_options();
	reset_all_settings();
	settings_options();
	choose_font();
});

function init_variables(){
	urlObj = {
	'cfc': '000000',
	'chc' : '0000ff',
	'clc' : '000000',
	'cbg' : 'eeeeee',
	'bbg' : '2870C0',
	'blc' : 'FFFFFF',
	'bhc' : 'FFFFFF',
	'fbg' : '2870C0',
	'ffc' : 'FFFFFF',
	'flc' : 'FFFFFF',
	'fhc' : 'FFFFFF',
	'bdt' : 'double',
	'bdw' : '0px',
	'bdc' : 'FFFFFF',
	'oft' : 'Tahoma, Geneva, sans-serif',
	'fsz' : '12'
	};
	build_url();
	key='';
	selectedColor='';
}

function build_url(){
	url='http://devel@192.168.87.196:/jp_widget_code/widget.php?cfc='+ urlObj['cfc'] +'&chc='+ urlObj['chc'] +'&clc='+ urlObj['clc'] +'&cbg='+ urlObj['cbg'] +'&bbg='+ urlObj['bbg'] +'&blc='+ urlObj['blc'] +'&bhc='+ urlObj['bhc'] +'&fbg='+ urlObj['fbg']+'&ffc='+ urlObj['ffc'] +'&flc='+ urlObj['flc']+'&fhc='+ urlObj['fhc'] +'&bdt='+ urlObj['bdt'] +'&bdw='+ urlObj['bdw'] +'&bdc='+ urlObj['bdc'] + '&oft='+urlObj['oft'] + '&fsz='+urlObj['fsz'] + 'px'+ '';
}

//Generates the widget in an iframe (via HTML)
function get_widget(){
	var iframe=$('<iframe/>').attr({src:url,id:'widget_iframe',frameborder:'0'});

	$('#widget').fadeOut(400,function(){$(this).html('').append(iframe);
		$(this).fadeIn(400);
		$('#textarea').click(function(){$(this).select();});
		var scriptUrl=url.replace("/widget.php","/upgotd_customizer.php");
		//The widget
		$('#textarea').text("<script src='"+scriptUrl+"' type='text/javascript' charset='utf-8'></script><noscript><a href='http://legacy.joshuaproject.net/upgotdfeed.php'>View Unreached People of the Day</a></noscript>");
	});
}

/**
 * Updates URL with new options and calls get_widget to refresh the widget. It
 * is called after every color changing funciton.
 */
function update_Widget(){
    build_url();
	get_widget();
}

function initiate_color_picker(){
	$(".colorpicker").spectrum({
	    showInput: true,
	    className: "colorClass",
	    showInitial: true,
	    showPalette: true,
	    showSelectionPalette: true,
	    hideAfterPaletteSelect:true,
	    maxPaletteSize: 10,
	    preferredFormat: "hex",
	    localStorageKey: "colorpicker.local",
	    move: function () {   },
	    show: function () {},
	    beforeShow: function () {},
	    hide: function () {},
	    change: function(color) {
	    	key = $(this).attr('id')
	    	str = color.toHexString().replace('#','');
	    	urlObj[key] = str;
	    	update_Widget();
	    },
	    palette: [
	        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
	        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
	        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
	        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
	        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
	        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
	        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
	        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
	        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
	        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
	        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
	        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
	        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
	        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
	    ]
	});
}

//Deprecated (not within project specifications, not completely functional, ugly, breaks design)
function border_options(){
	$('#select').click(function(){
		bdt=$('#select').val();
		update_Widget();
	});
	$('#border_width').click(function(){
		bdw=$('#border_width').val();
		update_Widget();
	});
}

//Resets all settings
function reset_all_settings(){
	$('button.reset').click(function(){
		init_variables();
		$('select').val("");
		update_Widget();
	});
}

//Deprecated (to be replaced with padding options) & border radius
function hide_border_options(){
	$('button#button_yes').click(function(){
		$('#border_options').slideDown('slow');
			bdw='1px';
			build_url();
			get_widget();
	});
	$('button#button_no').click(function(){
		$('#border_options').slideUp('slow');
			bdt='double';
			bdw='0px';
			bdc='FFFFFF';
			update_Widget();
	});
}

//Font style, type and size
function choose_font() {
	$('.fonts').change(function() {
		urlObj['oft'] = $('#font-type').val();
		build_url();
		get_widget();
	});

	$('.font-sz1').change(function() {
		urlObj['fsz'] = $('#font-size1').val(); console.log("here " + urlObj['fsz'])
		build_url();
		get_widget();
	});

	$('.font-sz2').change(function() {
		urlObj['fsz'] = $('#font-size2').val(); 
		build_url();
		get_widget();
	});
}