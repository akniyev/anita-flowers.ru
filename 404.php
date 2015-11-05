<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
<div style="text-align:center; margin:50px 0">
	<img src="/sstudioimages/404.jpg" alt="" />
	<br>
	<br>
	<h3>Уупс! Страница не найдена</h3>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>