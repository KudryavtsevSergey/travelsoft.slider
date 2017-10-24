<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
	"GROUPS" => array(
		"PARAMS" => array(
			"NAME" => GetMessage("MAIN_INCLUDE_PARAMS"),
		),
	),

    "PARAMETERS" => array(
        "DATA_SOURCE" => array(
            "NAME" => GetMessage("DATA_SOURCE"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => '={$arResult["DISPLAY_PROPERTIES"]["PICTURES"]["VALUE"]}',
            "PARENT" => "PARAMS",
        ),
        "WIDTH" => array(
            "NAME" => GetMessage("WIDTH"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "300",
            "PARENT" => "PARAMS",
        ),
        "HEIGHT" => array(
            "NAME" => GetMessage("HEIGHT"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "300",
            "PARENT" => "PARAMS",
        ),
        "NO_PHOTO_PATH" => array(
            "NAME" => GetMessage("NO_PHOTO_PATH"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => '={NO_PHOTO_DEFAULT}',
            "PARENT" => "PARAMS",
        ),
        "AUTO_SLIDE" => array(
            "NAME" => GetMessage("AUTO_SLIDE"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS",
        ),
        "ANIMATION_LOOP" => array(
            "NAME" => GetMessage("ANIMATION_LOOP"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS",
        ),
        "ITEM_WIDTH" => array(
            "NAME" => GetMessage("ITEM_WIDTH"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "150",
            "PARENT" => "PARAMS",
        ),
        "MARGIN_SMALL_PICTURES" => array(
            "NAME" => GetMessage("MARGIN_SMALL_PICTURES"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "5",
            "PARENT" => "PARAMS",
        ),
    ),
);
?>