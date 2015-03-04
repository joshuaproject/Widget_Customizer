<?php

//Include PHP functions
include("includes/functions.php"); 

// Include Database Stuff
include("includes/database.inc.php");

// Set date
// $timestamp = mktime(); $y = date("Y", $timestamp); $m = date("n", $timestamp); $d = date("d", $timestamp); 
$y = date("Y");
$m = date("n");
$d = date("d"); 

// SQL Query to Get People Group for Today
$sql1 = "SELECT * FROM jpupgotd WHERE (LRofTheDayMonth = '$m' AND LRofTheDayDay = '$d' and ROL3Profile = 'eng') LIMIT 1";

// MySQL Result Sets
$rs1 = mysql_fetch_array(mysql_query($sql1));

// Define variables Item 1
$thisCreated 					= date('D, j M Y G:i:s T');
$itemPopulation					= number_format(rnd($rs1['Population']));
$itemCountry					= str_replace("'", "\'", $rs1['Ctry']);
$itemPeople						= str_replace("'", "\'", $rs1['PeopNameInCountry']);
$itemReligion					= str_replace("'", "\'", $rs1['PrimaryReligion']);
$itemLanguage					= str_replace("'", "\'", $rs1['PrimaryLanguageName']);
$itemJPScale					= $rs1['JPScale'];
$itemTitleVariable              = $itemPeople." of ".$itemCountry; // PeopleName of CountryName
$itemProfileLink               	= "http://joshuaproject.net/people_groups/".$rs1['PeopleID3']."/".$rs1['ROG3']; // URL to Profile
$itemPeopleLink               	= "http://joshuaproject.net/people_groups/".$rs1['PeopleID3']; // URL to People Group
$itemCountryLink               	= "http://joshuaproject.net/countries/".$rs1['ROG3']; // URL to Country
$itemUnreachedLink				= "http://joshuaproject.net/listing";
$itemScaleBlockLink				= "http://joshuaproject.net/assets/img/scale/scale" . ROUND($rs1['JPScale']) . ".jpg";  // Scale color block
$itemScaleDescriptionLink		= "http://joshuaproject.net/global_list?listtype=progress";
$itemFeedLink					= "http://joshuaproject.net/pray/unreachedoftheday#Widget";
$itemBaseLink					= "http://joshuaproject.net/";
$itemAttachmentURLvariable      = "http://joshuaproject.net/assets/media/profiles/photos/".$rs1['PhotoAddress']; // People Photo
$itemEmailLink					= "http://joshuaproject.net/pray/unreachedoftheday#subscribe"; // Unreached People of the Day email

if (isset($rs1['PercentEvangelical'])) { $itemEvangelical = number_format($rs1['PercentEvangelical'],1) . "%"; } else { $itemEvangelical = "Unknown"; }

// Image resizing
$width	 						= 140;
$peopleimage 					= getimagesize("profiles/photos/".$rs1['PhotoAddress']); 
$height 						= round($peopleimage[1] *($width / $peopleimage[0]));

// Build Javascript 
header("Content-type: application/x-javascript");
?>
document.write('<div class="upgotd-box">\n');
document.write('<div class="upgotd upgotd-title">\n<a href="<?php echo $itemFeedLink; ?>" class="upgotd-link" target="_blank" title="Display the Unreached People of the Day on your website\">Unreached of the Day</a>\n</div>\n\n'); 
document.write('<div class="upgotd-image">\n<a href="<?php echo  $itemProfileLink; ?>" class="upgotd-link" title="Click for a full profile of the <?php echo $itemTitleVariable; ?>" target="_blank"><img src="<?php echo $itemAttachmentURLvariable; ?>" border="0" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></a>\n</div>\n\n');
document.write('<div class="upgotd upgotd-pray">Please pray for the ...</div>\n\n');
document.write('<div class="upgotd upgotd-people">\n<a href="<?php echo  $itemPeopleLink; ?>" class="upgotd-link" title="Click for listing of the <?php echo str_replace("'", "\'", $rs1['PeopNameInCountry']); ?> in all countries." target="_blank"><?php echo str_replace("'", "\'", $rs1['PeopNameInCountry']); ?></a> of <a href="<?php echo $itemCountryLink; ?>" class="upgotd-link" title="Click for listing of all People Groups in <?php echo str_replace("'", "\'", $rs1['Ctry']); ?>" target="_blank"><?php echo str_replace("'", "\'", $rs1['Ctry']); ?></a>\n</div>\n\n'); 
document.write('<table class="upgotd-table" align="center" cellpadding="0" cellspacing="0">'); 
document.write('<tr class="upgotd-odd">\n<td class="upgotd-headings">Population:</td>\n<td class="upgotd-stats"><?php echo $itemPopulation; ?></td>\n</tr>\n'); 
document.write('<tr class="upgotd-even">\n<td class="upgotd-headings">Language:</td>\n<td class="upgotd-stats"><?php echo str_replace("'", "\'", $rs1['PrimaryLanguageName']); ?></td>\n</tr>\n'); 
document.write('<tr class="upgotd-odd">\n<td class="upgotd-headings">Religion:</td>\n<td class="upgotd-stats"><?php echo $rs1['PrimaryReligion']; ?></td>\n</tr>\n'); 
document.write('<tr class="upgotd-even">\n<td class="upgotd-headings">Evangelical:</td>\n<td class="upgotd-stats"><?php echo number_format($rs1['PercentEvangelical'],2); ?>%</td>\n</tr>\n'); 
document.write('<tr class="upgotd-odd">\n<td class="upgotd-headings">Status:</td>\n<td class="upgotd-stats"><a href="<?php echo $itemUnreachedLink; ?>" class="upgotd-link" title="Click for listing of the largest unreached groups." target="_blank">Unreached</a> (<a href="<?php echo $itemScaleDescriptionLink; ?>" class="upgotd-link" title="Click for a description of the Joshua Project Progress Scale." target="_blank"><?php echo $rs1['JPScale']; ?></a> <a href="<?php echo $itemScaleDescriptionLink; ?>" class="upgotd-link" title="Click for a description of the Joshua Project Progress Scale" target="_blank"><img src="<?php echo $itemScaleBlockLink; ?>" border="0"></a>)</td>\n</tr>'); 
document.write('</table>\n\n');
document.write('<div class="upgotd upgotd-footer">\n<div style="padding: 0px 0px 1px 0px;"><a href="<?php echo $itemEmailLink; ?>" title="Get the complete Unreached People of the Day profile by daily email" target="_blank">Get <b>Unreached of the Day</b> by Email</a>\n</div>\nProvided by <a href="<?php echo $itemBaseLink; ?>" title="Visit the Joshua Project Website"  target="_blank"><b>Joshua Project</b></a>\n</div>\n'); 
document.write('</div>\n'); 