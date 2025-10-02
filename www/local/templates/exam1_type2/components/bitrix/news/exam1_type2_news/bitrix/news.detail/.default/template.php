<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="row">
	<div class="col-lg-12">

		<div class="card table-detail">
			<div class="card-body">
			<h5 class="card-title">ID - [<?=$arResult["NAME"];?>]</h5>
			<div class="row">
				<div class="col-2 label"><?=$arResult["PROPERTIES"]["PRODUCT"]["NAME"];?></div>
				<div class="col-4 "><?=$arResult["PROPERTIES"]["PRODUCT"]["VALUE"];?></div>
			</div>
			<div class="row">
				<div class="col-2 label"><?=$arResult["PROPERTIES"]["PRODUCT_CATEGORY"]["NAME"];?></div>
				<div class="col-4 "><?=$arResult["PROPERTIES"]["PRODUCT_CATEGORY"]["VALUE"];?></div>
			</div>
			<div class="row">
				<div class="col-2 label"><?=$arResult["PROPERTIES"]["CITY"]["NAME"];?></div>
				<div class="col-4 "><?=$arResult["PROPERTIES"]["CITY"]["VALUE"];?></div>
			</div>
			<div class="row">
				<div class="col-2 label"><?=$arResult["PROPERTIES"]["QUANTITY"]["NAME"];?></div>
				<div class="col-4 "><?=$arResult["PROPERTIES"]["QUANTITY"]["VALUE"];?></div>
			</div>
			<div class="backurl">
				<a href="<?=$arResult["LIST_PAGE_URL"];?>">Назад к списку</a>
			</div>
			</div>
		</div>
	</div>
</div>