<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';


//getting subsections list
/*$psecname = $GLOBALS["SUBSECTIONS"][0]["NAME"];
$psecid = $GLOBALS["SUBSECTIONS"][0]["ID"];
$secname = $GLOBALS["SUBSECTIONS"][1]["NAME"];
$secid = $GLOBALS["SUBSECTIONS"][1]["ID"];

echo "heres: ".$psecid.$psecname."<br/>".$secid.$secname;
*/
//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="bx-breadcrumb">';

$link = "/meropriyatiya/";

$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_00" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" itemprop="child" itemref="bx_breadcrumb_0">
				<a href="'.$link.'" title="Мероприятия" itemprop="url">
					<span itemprop="title">Мероприятия</span>
				</a>
			</div>';

$narrow = '<i class="fa fa-angle-right"></i>';
foreach ($GLOBALS["SUBSECTIONS"] as $subsect) {
	if (isset($subsect["NAME"]) && isset($subsect["ID"])) {
		$strReturn .= '
				<div class="bx-breadcrumb-item" id="bx_breadcrumb_' . 1 . '" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					' . $narrow . '
					<a href="' . $link . '?section=' . $subsect["ID"] . '" title="' . $subsect["NAME"] . '" itemprop="url">
						<span itemprop="title">' . $subsect["NAME"] . '</span>
					</a>
				</div>';
	} else {
		if (isset($subsect["NAME"])) {
			$strReturn .= '
				<div class="bx-breadcrumb-item" id="bx_breadcrumb_' . 1 . '" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					' . $narrow . '
					<span itemprop="title">' . $subsect["NAME"] . '</span>
				</div>';
		}
	}
}


/*
$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	$child = ($index > 0? ' itemprop="child"' : '');
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');


	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"'.$child.$nextRef.'>
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					<span itemprop="title">'.$title.'</span>
				</a>
			</div>';
	}
	else
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"'.$child.$nextRef.'>
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					<span itemprop="title">'.$title.'</span>
				</a>
			</div>';

		$narrow = '<i class="fa fa-angle-right"></i>';
		foreach ($GLOBALS["SUBSECTIONS"] as $subsect) {
			if (isset($subsect["NAME"])) {
				$strReturn .= '
				<div class="bx-breadcrumb-item" id="bx_breadcrumb_' . $index . '" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"' . $child . $nextRef . '>
					' . $narrow . '
					<a href="' . $arResult[$index]["LINK"] . '?section=' . $subsect["ID"] . '" title="' . $subsect["NAME"] . '" itemprop="url">
						<span itemprop="title">' . $subsect["NAME"] . '</span>
					</a>
				</div>';
			}
		}

	}
}
*/

$strReturn .= '<div style="clear:both"></div></div>';

return $strReturn;
