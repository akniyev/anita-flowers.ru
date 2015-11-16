<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
function startsWith($haystack, $needle) {
	// search backwards starting from haystack length characters from the end
	return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
}
?>

<?if (!empty($arResult)):?>
<nav class="navmenu">
	<ul>
		<?foreach($arResult as $arItem):?>
			<?if ($arItem["SELECTED"]) { $active = "active"; }
			else {$active = ""; }?>
			<?if ($arItem["PERMISSION"] > "D"):?>
				<li class="scrollable1 <?=$active?>">
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				</li>
			<?endif?>
		<?endforeach?>
	</ul>
</nav>
<?endif?>