<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";

use Bitrix\Main\Application;?>

<? if (Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory() !== "/") { ?>
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1><?$APPLICATION->ShowTitle(true);?></h1>
            <p><?$APPLICATION->ShowProperty("page_text_under_title");?></p>

            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "dev_bread_exam1_1", Array(
                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                    "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
                    "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                ),
                false
            );?>
            
        </div>
    </div>
    <!-- End Page Title -->
<? } ?>