<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';
?>
<?php
$strReturn .= '<nav class="breadcrumbs"><ol>';

$itemSize = count($arResult) - 1;
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "")
	{
		$strReturn .= '<li><a href="'.$arResult[$index]["LINK"].'">'.$title.'</a></li>';
	}
}

$strReturn .= '</ol></nav>';

return $strReturn;
