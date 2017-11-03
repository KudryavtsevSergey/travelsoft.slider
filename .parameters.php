<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = array(
    "GROUPS" => array(
        "PARAMS" => array(
            "NAME" => GetMessage("MAIN_INCLUDE_PARAMS"),
        ),
        "PARAMS_SLIDER" => array(
            "NAME" => GetMessage("SLIDER_PARAMS"),
        ),
        "PARAMS_JS" => array(
            "NAME" => GetMessage("JS_PARAMS"),
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

        "ITEM_COUNT_BIG" => array(
            "NAME" => GetMessage("ITEM_COUNT_BIG"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "1",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "ITEM_COUNT_SMALL" => array(
            "NAME" => GetMessage("ITEM_COUNT_SMALL"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "5",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "MARGIN_PICTURES_BIG" => array(
            "NAME" => GetMessage("MARGIN_PICTURES_BIG"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "10",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "MARGIN_PICTURES_SMALL" => array(
            "NAME" => GetMessage("MARGIN_PICTURES_SMALL"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "10",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "AUTO_PLAY_BIG" => array(
            "NAME" => GetMessage("AUTO_PLAY_BIG"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "AUTO_PLAY_TIMEOUT_BIG" => array(
            "NAME" => GetMessage("AUTO_PLAY_TIMEOUT_BIG"),
            "TYPE" => "STRING",
            "MULTIPLE" => "N",
            "ADDITIONAL_VALUES" => "N",
            "DEFAULT" => "3000",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "AUTO_PLAY_HOVER_PAUSE_BIG" => array(
            "NAME" => GetMessage("AUTO_PLAY_HOVER_PAUSE_BIG"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "NAV_BIG" => array(
            "NAME" => GetMessage("NAV_BIG"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "NAV_SMALL" => array(
            "NAME" => GetMessage("NAV_SMALL"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "DOT_BIG" => array(
            "NAME" => GetMessage("DOT_BIG"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "DOT_SMALL" => array(
            "NAME" => GetMessage("DOT_SMALL"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "LAZY_LOAD_BIG" => array(
            "NAME" => GetMessage("LAZY_LOAD_BIG"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "PARAMS_SLIDER",
        ),
        "LAZY_LOAD_SMALL" => array(
            "NAME" => GetMessage("LAZY_LOAD_SMALL"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "PARENT" => "PARAMS_SLIDER",
        ),

        "DO_NOT_INC_OWL_CAROUSEL" => array(
            "NAME" => GetMessage("DO_NOT_INC_OWL_CAROUSEL"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS_JS",
        ),
        "DO_NOT_INC_MAGNIFIC_POPUP" => array(
            "NAME" => GetMessage("DO_NOT_INC_MAGNIFIC_POPUP"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS_JS",
        ),
        "INC_JQUERY" => array(
            "NAME" => GetMessage("INC_JQUERY"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "N",
            "PARENT" => "PARAMS_JS",
        ),
    ),
);
?>