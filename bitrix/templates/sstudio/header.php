<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<meta charset="utf-8">
	<?$APPLICATION->ShowHead();?>
	<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
    
	<title><?$APPLICATION->ShowTitle()?></title>
    <?//CJSCore::Init(array("jquery"));?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="SMSdesign.com.ua">    
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
	<link href="<?=SITE_TEMPLATE_PATH?>/css/plugins.css" rel="stylesheet" type="text/css">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/responsive.css" rel="stylesheet" type="text/css">
    
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,700,700italic,400italic' rel='stylesheet' type='text/css'>
  
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.form.js"></script>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!--//Preloader -->
    
    <!-- #page -->
    <div id="page">
        <!-- header section -->
        <section id="top">
            <header> 
            	<div class="container">                                   
                    <!-- logo -->
                    <div id="logo">
                        <a href="<?=SITE_DIR?>#home"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"  alt="" /></a>
                    </div>
                    <!-- menu -->
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "mainmenu", Array(
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
							"MENU_CACHE_TYPE" => "A",	// Тип кеширования
							"MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							"MAX_LEVEL" => "2",	// Уровень вложенности меню
							"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
							"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"COMPONENT_TEMPLATE" => "main_top"
						),
						false,
						array(
						"ACTIVE_COMPONENT" => "Y"
						)
					);?>
					<!-- end menu --> 
                    <div class="clear"></div>
            	</div>
            </header>               
        </section>
        <!--    //header section -->		<div class="maintext">   
            
        
		