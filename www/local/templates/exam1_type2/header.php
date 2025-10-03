<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Page\Asset;

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?=$APPLICATION->ShowTitle();?></title>
  
  <!-- Favicons -->
  <link href="<?=SITE_TEMPLATE_PATH;?>/assets/img/favicon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");?>
  <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");?>
  
  <!-- Template Main CSS File -->
  <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/style.css");?>
  
  <?=$APPLICATION->ShowHead();?>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.html" class="logo d-flex align-items-center">
        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    
    <?
      global $USER;
      if ($USER->IsAuthorized()) {
        $APPLICATION->IncludeComponent("bitrix:system.auth.form",
          "exam1_type2_auth_form",
          Array(
            "FORGOT_PASSWORD_URL" => "",	// Страница забытого пароля
              "PROFILE_URL" => "/statistic_na/profile/",	// Страница профиля
              "REGISTER_URL" => "",	// Страница регистрации
              "SHOW_ERRORS" => "N",	// Показывать ошибки
            ),
            false
        );
      }
    ?>

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <?$APPLICATION->IncludeComponent("bitrix:menu", "exam1_type2_menu", Array(
      "ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "st_second",	// Тип меню для остальных уровней
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "2",	// Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "ROOT_MENU_TYPE" => "st_first",	// Тип меню для первого уровня
        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        "COMPONENT_TEMPLATE" => "vertical_multilevel"
      ),
      false
    );?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <div class="pagetitle mb-4">
      <h1><?$APPLICATION->ShowTitle(false);?></h1>
    </div><!-- End Page Title -->

    <section class="section <?=$APPLICATION->ShowProperty("page_css_class");?>">