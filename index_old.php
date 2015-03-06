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
		<title>Unreached of the Day Widget</title>
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
		<!-- Date: 2012-05-11 -->
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<link rel="stylesheet" href="css/colorpicker.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="/widget/js/application.js" type="text/javascript" charset="utf-8"></script>
		<script src="/widget/js/colorpicker.js" type="text/javascript" charset="utf-8"></script>	
	</head>
	<body style="background-color:#FFF">
		<div id="container">
        	<center><h2>Unreached of the Day Widget</h2></center>
			<div id="selectors" class="left">Advanced color options: 
				<button class="advanced_on">Off</button>
				<br/ >
				<br/ >
				Background: 
					<select rel="cbg">
						<option>Select Color</option>
						<option value="EEE">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
					<input type="text" id="cbg" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Header: 
					<select rel="bbg">
						<option>Select Color</option>
						<option value="2870C0">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="bbg" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Header Font: 
					<select rel="blc">
						<option>Select Color</option>
						<option value="FFF">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="blc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Header Font Hover: 
					<select rel="bhc">
						<option>Select Color</option>
						<option value="FFFFFF">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="bhc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Center Font: 
					<select rel="cfc">
						<option>Select Color</option>
						<option value="000000">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="cfc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Center Font Link: 
					<select rel="clc">
						<option>Select Color</option>
						<option value="000000">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="clc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Center Font Link Hover: 
					<select rel="chc">
						<option>Select Color</option>
						<option value="0000FF">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="chc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Footer Background: 
					<select rel="fbg">
						<option>Select Color</option>
						<option value="2870C0">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="fbg" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Footer Font: 
					<select rel="ffc">
						<option>Select Color</option>
						<option value="FFF">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="ffc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Footer Links: 
					<select rel="flc">
						<option>Select Color</option>
						<option value="FFF">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="flc" readonly class="background_color" size="17" maxlength="8" />
				<br/>
				Footer Link Hover: 
					<select rel="fhc">
						<option>Select Color</option>
						<option value="">Default</option>
						<option value="FFFFFF">White</option>
            			<option value="000000">Black</option>
                        <option value="848484">Gray</option>
                        <option value="FF0000">Red</option>
                        <option value="FF8000">Orange</option>
                        <option value="F7FE2E">Yellow</option>
                        <option value="00FF00">Green</option>
						<option value="0101DF">Blue</option>
						<option value="DF01D7">Purple</option>
					</select>
				<input type="text" id="fhc" readonly class="background_color" size="17" maxlength="8" />
				<br/><br/>
					Would you like a border? 	
					<button id="button_yes">Yes</button><button id="button_no">No</button>
					<div id="border_options">
						Border Width: 
						<select id="border_width">
							<option>1px</option>
							<option>2px</option> 
							<option>3px</option> 
							<option>4px</option> 
							<option>5px</option> 
							<option>6px</option> 
						</select>
           <br/>
						Border: 
            <select rel="bdc">
                <option>Select Color</option>
                <option value="FFFFFF">White</option>
                <option value="000000">Black</option>
                <option value="848484">Gray</option>
                <option value="FF0000">Red</option>
                <option value="FF8000">Orange</option>
                <option value="F7FE2E">Yellow</option>
                <option value="00FF00">Green</option>
                <option value="0101DF">Blue</option>
                <option value="DF01D7">Purple</option>
            </select>
            <input type="text" id="bdc" readonly class="background_color" size="17" maxlength="8" />
						<br/>
						Border Style: 
						<select id="select">
							<option>none</option>
              				<option>double</option>
							<option>dotted</option> 
							<option>dashed</option> 
							<option>solid</option> 
							<option>groove</option> 
							<option>ridge</option> 
							<option>inset</option> 
							<option>outset</option>
						</select><br/>
					</div><!-- border_options -->                
					<br/><br/>
				Default Settings: 
				<button class="reset">Reset All</button><br/>		
			</div>
			
			<div id="result" class="left">
				<div id="widget_container">
					<center><div id="widget"></div></center>
					<!-- alternative for no javascript --><noscript>
					<a href="http://legacy.joshuaproject.net/upgotdfeed.php">View Unreached People of the Day</a></noscript>
				</div>
                Copy and paste the below code into your website:<br/><br/>
					<textarea id="textarea" type="textarea"> </textarea>
			</div>
			<div class="clear"></div>
		</div> <!-- container -->
	</body>
</html>
