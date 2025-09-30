<?if(defined(B_PROLOG_INCLUDED) || B_PROLOG_INCLUDED !== true) die();
require_once $_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/boot.php";

use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">

<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?$APPLICATION->ShowTitle();?></title>
	
	<!-- Favicons -->
    <link href="<?=DEFAULT_TEMPLATE_PATH;?>/assets/img/favicon.png" rel="icon">
	<link href="<?=DEFAULT_TEMPLATE_PATH;?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
	<!-- Vendor CSS Files -->
	<?Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");?>
	<?Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");?>
	<?Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/vendor/aos/aos.css");?>
    
	<!-- Main CSS File -->
	<?Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/assets/css/main.css");?>
	
	<?$APPLICATION->ShowHead();?>
</head>

<body class="scrolled">
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="#" class="logo d-flex align-items-center">
				<h1 class="sitename"><?=GetMessage("EXAM1_TYPE1_COMPANY_NAME")?></h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>
					<li><a href="#">Главная</a></li>
					<li><a href="#">Пункт 1</a></li>
					<li><a href="#">Пункт 1</a></li>
					<li><a href="#">Пункт 3</a></li>
					<li><a href="#">Пункт 4</a></li>
					<li class="dropdown">
						<a href="#"><span>Пункт 5 с подменю</span>
							<i class="bi bi-chevron-down toggle-dropdown"></i>
						</a>
						<ul>
							<li><a href="#">Пункт 1</a></li>
							<li class="dropdown"><a href="#"><span>Пункт 2 с подменю</span> <i
										class="bi bi-chevron-down toggle-dropdown"></i></a>
								<ul>
									<li><a href="#">Пункт 1</a></li>
									<li><a href="#">Пункт 2</a></li>
									<li><a href="#">Пункт 3</a></li>
								</ul>
							</li>
							<li><a href="#">Пункт 2</a></li>
							<li><a href="#">Пункт 3</a></li>
							<li><a href="#">Пункт 4</a></li>
						</ul>
					</li>
					<li><a href="#">Пункт 6</a></li>
				</ul>
				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

		</div>
	</header>
    <main class="main">