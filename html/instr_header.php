<?PHP
ini_set("include_path", "./:../"); 
$theFileName = basename($_SERVER['PHP_SELF']);
$theUnderScoreOffset = strpos($theFileName,"_");
$theChapterName = substr($theFileName,0,$theUnderScoreOffset);
$thePeriodOffset = strpos($theFileName,".");
$theSectionName = substr($theFileName,0,$thePeriodOffset-6);
$theFileToInclude = $theChapterName . "/" . $theSectionName . "_cont.php";
echo "<p><img src='Graphics/" . $theChapterName . "_header.gif' vspace=6 border=0><br>";
echo "<img src='Graphics/" . $theSectionName . "_header.gif' border=0></p>";
?>
