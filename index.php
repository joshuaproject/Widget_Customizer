
<!-- 
/**
 * This file is part of Joshua Project Customizer for People of the Day Widget.
 * 
 * Joshua Project Customizer for People of the Day Widget is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Joshua Project Customizer for People of the Day Widget is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <johnathan@missionaldigerati.org>
 * @copyright Copyright 2012 Missional Digerati
 * 
 */
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Unreached of the Day :: Joshua Project</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/jp_logo_color.png" />
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<!-- Date: 2012-05-11 -->
		<script type="text/javascript">
			//<![CDATA[
			try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"a883296692aef0ebb1056a17686a93b7",petok:"15740aad2578f7bacf1f55c6aedc8249fe3882c2-1425316930-1800",zone:"joshuaproject.net",rocket:"0",apps:{"abetterbrowser":{"ie":"8"},"ga_key":{"ua":"UA-145147-1","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=919620257c/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
			//]]>
		</script>

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Serif:400,700,400italic,700italic">
		<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/jquery-ui.structure.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/jquery-ui.theme.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/spectrum.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
		
		<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/spectrum.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript">
			/* <![CDATA[ */
			/*var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-145147-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
			})();

			(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window); */
			/* ]]> */
		</script>
	</head>

<body>
	<script type="text/javascript">
		//<![CDATA[
		//I think this reloads the widget when a new option is selected. -Jake
		try{(function(a){var b="http://",c="legacy.joshuaproject.net",d="/cdn-cgi/cl/",e="img.gif",f=new a;f.src=[b,c,d,e].join("")})(Image)}catch(e){}
	//]]>
	</script>

	<div id="container">
		<center><h2>Unreached of the Day Widget Customizer</h2></center>
		<div id="content_container">
	        <div id="options_container">
	        	<div class="accordion">
					<h3>Size and Shape</h3>
					<div>
						<div id="width_slider" class="slider"></div>
					    <div id="width_spinner">
					    	Width: 
					    	<input type="text" id="wpw" class="spinner" value="215"/>
					    </div> 
				    	
				    	<div class="radioset" id="orientation">
				    		<form>
								<input type="radio" id="radio_portrait" name="radio" value="vert" checked="checked"><label for="radio_portrait">Portrait</label>
								<input type="radio" id="radio_horizontal" name="radio" value="horz"><label for="radio_horizontal">Landscape</label>
							</form>
						</div>
						<br/><br/>
					</div>

					<h3>Border</h3>
					<div>
						<div id="border_options">
							<table>
								<tr>
									<td>Border Width:</td>
									<td>
										<select id="border_width">
											<option>0px</option>
											<option>1px</option>
											<option>2px</option> 
											<option>3px</option> 
											<option>4px</option> 
											<option>5px</option> 
											<option>6px</option> 
										</select>
									</td>
								</tr>
								<tr>
									<td><br/>
										Border Radius
									</td>
								</tr>
				            </table>

							Apply to: 
							<input type="checkbox" class="button br_check" id="top" name="field" value="Top"><label class="br_check_label" for="top">Top</label>
							<input type="checkbox" class="button br_check" id="bottom" name="field" value="Bottom"><label class="br_check_label" for="bottom">Bottom</label><br/><br/>
							<div id="bdr"></div><br/>
							Border Color:
							<input type="text" id="bdc" class="colorpicker"/>
						</div>
					</div>      		

		        	<h3>Colors</h3>
		        	<div>
			        	<div class="radioset" id="color_templates">
			        		<form>
			        			<input type="radio" id="temp1" class="color_temp_radio" name="radio" value="1" checked="checked"><label for="temp1">Default</label>
								<input type="radio" id="temp2" class="color_temp_radio" name="radio" value="2"><label for="temp2">B&W</label>
								<input type="radio" id="temp3" class="color_temp_radio" name="radio" value="3"><label for="temp3">Blue</label>
							</form>
						</div>
		        		 <table id="colorSelectors" class="left">     							
							<tr><td>Background: </td>
								<td><input type="text" id="cbg" class="colorpicker"/></td></tr>
							<tr><td>Header: </td>
								<td><input type="text" id="bbg" class="colorpicker"/></td></tr>
							<tr><td>Header Font: </td>
								<td><input type="text" id="blc" class="colorpicker"/></td></tr>
							<tr><td>Header Font Hover: </td>
								<td><input type="text" id="bhc" class="colorpicker"/></td></tr>
							<tr><td>Center Font: </td>
								<td><input type="text" id="cfc" class="colorpicker"/></td></tr>
							<tr><td>Center Font Link: </td>
								<td><input type="text" id="clc" class="colorpicker"/></td></tr>
							<tr><td>Center Font Link Hover:</td>
								<td><input type="text" id="chc" class="colorpicker"/></td></tr>
							<tr><td>Footer Background: </td>
								<td><input type="text" id="fbg" class="colorpicker"/></td></tr>
							<tr><td>Footer Font: </td>
								<td><input type="text" id="ffc" class="colorpicker"/></td></tr>
							<tr><td>Footer Links: </td>
								<td><input type="text" id="flc" class="colorpicker"/></td></tr>
							<tr><td>Footer Link Hover: </td>
								<td><input type="text" id="fhc" class="colorpicker"/></td></tr>
						</table>
		        	</div>
					<h3>Fonts</h3>
		        	<div>
			        	<table>
	                        <tr>
							    <td>Font type:</td>
							    <td><select id="oft" class="fontpicker">
							        <option value="">Select Font Style</option>
							        <option class="font" value="Andale Mono">Andale Mono</option>
							        <option class="font" value="Arial">Arial</option>
							        <option class="font" value="Arial Black">Arial Black</option>
							        <option class="font" value="Arial Narrow">Arial Narrow</option>
							        <option class="font" value="Arial Rounded MT Bold">Arial Rounded MT Bold</option>
							        <option class="font" value="Avant Garde">Avant Garde</option>
							        <option class="font" value="Baskerville">Baskerville</option>
							        <option class="font" value="Big Caslon">Big Caslon</option>
							        <option class="font" value="Bodoni MT">Bodoni MT</option>
							        <option class="font" value="Book Antiqua">Book Antiqua</option>
							        <option class="font" value="Brush Script MT">Brush Script MT</option>
							        <option class="font" value="Caoptionbri">Caoptionbri</option>
							        <option class="font" value="Caoptionsto MT">Caoptionsto MT</option>
							        <option class="font" value="Cambrio">Cambrio</option>
							        <option class="font" value="Candara">Candara</option>
							        <option class="font" value="Century Gothic">Century Gothic</option>
							        <option class="font" value="Consolas">Consolas</option>
							        <option class="font" value="Copperplate">Copperplate</option>
							        <option class="font" value="Courier New">Courier New</option>
							        <option class="font" value="Droid Serif">Droid Serif</option>
							        <option class="font" value="Frankoptionn Gothic Medium">Frankoptionn Gothic Medium</option>
							        <option class="font" value="Futura">Futura</option>
							        <option class="font" value="Garamond">Garamond</option>
							        <option class="font" value="Geneva">Geneva</option>
							        <option class="font" value="Georgia">Georgia</option>
							        <option class="font" value="Gill Sans">Gill Sans</option>
							        <option class="font" value="Goudy Old Style">Goudy Old Style</option>
							        <option class="font" value="Helvetica">Helvetica</option>
							        <option class="font" value="Hoefler Text">Hoefler Text</option>
							        <option class="font" value="Impact">Impact</option>
							        <option class="font" value="Lucida Bright">Lucida Bright</option>
							        <option class="font" value="Lucida Console">Lucida Console</option>
							        <option class="font" value="Lucida Sans Typewriter">Lucida Sans Typewriter</option>
							        <option class="font" value="Lucida Grande">Lucida Grande</option>
							        <option class="font" value="Monaco">Monaco</option>
							        <option class="font" value="Optima">Optima</option>
							        <option class="font" value="Palatino">Palatino</option>
							        <option class="font" value="Papyrus">Papyrus</option>
							        <option class="font" value="Perpetua">Perpetua</option>
							        <option class="font" value="Rockwell">Rockwell</option>
							        <option class="font" value="Rockwell Extra Bold">Rockwell Extra Bold</option>
							        <option class="font" value="Segoe UI">Segoe UI</option>
							        <option class="font" value="Tahoma">Tahoma</option>
							        <option class="font" value="Times New Roman">Times New Roman</option>
							        <option class="font" value="Trebuchet MS">Trebuchet MS</option>
							        <option class="font" value="Verdana">Verdana</option>
							    </select>
							</tr>
						    <tr>
							    <td>Title font size:</td>
							    <td><select id="tfsz" class="fontpicker">
							        <option value="">Select Font Size</option>
							        <option value="8">8px</option>
							        <option value="9">9px</option>
							        <option value="10">10px</option>
							        <option value="11">11px</option>
							        <option value="12">12px</option>
							        <option value="14">14px</option>
							        <option value="16">16px</option>
							        <option value="18">18px</option>
							        <option value="20">20px</option>
							        <option value="24">24px</option>
							        <option value="28">28px</option>
							    </select></td>
							</tr>
							<tr>
							    <td>People font size:</td>
							    <td><select id="pfsz" class="fontpicker">
							        <option value="">Select Font Size</option>
							        <option value="8">8px</option>
							        <option value="9">9px</option>
							        <option value="10">10px</option>
							        <option value="11">11px</option>
							        <option value="12">12px</option>
							        <option value="14">14px</option>
							        <option value="16">16px</option>
							        <option value="18">18px</option>
							        <option value="20">20px</option>
							        <option value="24">24px</option>
							       </select></td>
							</tr>
							<tr>
							    <td>Info font size:</td>
							    <td><select id="ifsz" class="fontpicker">
							        <option value="">Select Font Size</option>
							        <option value="8">8px</option>
							        <option value="9">9px</option>
							        <option value="10">10px</option>
							        <option value="11">11px</option>
							        <option value="12">12px</option>
							        <option value="14">14px</option>
							        <option value="16">16px</option>
							        <option value="18">18px</option>
							        <option value="20">20px</option>
							    </select></td>
							</tr>
							<tr>
							    <td>Footer font size:</td>
							    <td><select id="ffsz" class="fontpicker">
							        <option value="">Select Font Size</option>
							        <option value="8">8px</option>
							        <option value="9">9px</option>
							        <option value="10">10px</option>
							        <option value="11">11px</option>
							        <option value="12">12px</option>
							        <option value="14">14px</option>
							        <option value="16">16px</option>
							        <option value="18">18px</option>
							        <option value="20">20px</option>
							        <option value="24">24px</option>
							    </select></td>
							</tr>
					</table>

					</div>
					<h3>Fields to Display</h3>
	        		<div>
	        			Toggle which fields to display on your widget.<br/>
						<input type="checkbox" class="button jq_check" id="pop" name="field" value="Population" checked><label class="jq_check_label" for="pop">Population</label><br/>
						<input type="checkbox" class="button jq_check" id="lan" name="field" value="Language" checked><label class="jq_check_label" for="lan">Language</label><br/>
						<input type="checkbox" class="button jq_check" id="relg" name="field" value="Religion" checked><label class="jq_check_label" for="relg">Religion</label><br/>
						<input type="checkbox" class="button jq_check" id="eva" name="field" value="Evangelical" checked><label class="jq_check_label" for="eva">Evangelical</label><br/>
						<input type="checkbox" class="button jq_check" id="stat" name="field" value="Status" checked><label class="jq_check_label" for="stat">Status</label><br/>
	        		</div>

	        		<!--This is a place to add the data filter options. It will create a tab on the accordion.

	        			<h3>Data Filters</h3>
	        			<div>
	        			</div> 
	        		-->
	        	</div>
				<button class="button" id="reset">Reset to Default</button><br/>		
			</div>

			<div id="result" class="left">
				<div id="widget_container">
					<div id="widget"></div>
					<!-- alternative for no javascript --><noscript>
					<a href="http://legacy.joshuaproject.net/upgotd_new.php">View Unreached People of the Day</a></noscript>
				</div>
	            Copy and paste the code below into your website:<br/><br/>
					<textarea id="textarea" type="textarea"> </textarea>
			</div>
		</div>
		<div class="clear"></div>
	</div> <!-- container -->
</body>
</html>
