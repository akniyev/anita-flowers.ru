<?include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?$APPLICATION->IncludeComponent(
				"bitrix:main.feedback",
				"feed",
				Array(
					"USE_CAPTCHA" => "N",
					"OK_TEXT" => "Спасибо, ваше сообщение принято",
					"EMAIL_TO" => "irchik15@yandex.ru",
					"REQUIRED_FIELDS" => array("NAME", "EMAIL", "MESSAGE"),
					"EVENT_MESSAGE_ID" => array("7")
				)
			);?>