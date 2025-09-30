<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php";

use Bitrix\Main\Application;?>

<? if (Application::getInstance()->getContext()->getRequest()->getRequestedPageDirectory() !== "/") { ?>
    <!-- Page Title -->
    <div class="page-title dark-background">
        <div class="container position-relative">
            <h1>Заголовок страницы</h1>
            <p>Короткий текст для страницы под H1</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Раздел 1</a></li>
                    <li><a href="#">Раздел 1.1</a></li>
                    <li class="current">Заголовок страницы</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->
<? } ?>


<!-- Starter Section Section -->
<section class="starter-section section">

    <div class="container">
        <p>Произвольный блок</p>