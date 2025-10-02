<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="sidebar-nav" id="sidebar-nav">
<?
$previousLevel = 0;
foreach($arResult as $arItem): //echo "<pre>"; print_r($arItem); echo "</pre>";?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["PERMISSION"] > "D"):?>
	
		<?if ($arItem["IS_PARENT"]):?>

			<li class="nav-item">
				<a class="nav-link<?=$arItem["SELECTED"] ? "" : " collapsed";?>" data-bs-target="#nav-st-menu-parent-<?=$arItem['ITEM_INDEX'];?>" data-bs-toggle="collapse" href="<?=$arItem["LINK"];?>">
					<i class="bi <?=$arItem["PARAMS"]["menu_ico"] ?? "bi-layout-text-window-reverse";?>"></i><span><?=$arItem["TEXT"];?></span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="nav-st-menu-parent-<?=$arItem['ITEM_INDEX'];?>" class="nav-content<?=$arItem["SELECTED"] ? "" : " collapse";?>" data-bs-parent="#sidebar-nav">

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="nav-item">
					<a class="nav-link<?=$arItem["SELECTED"] ? "" : " collapsed";?>" href="<?=$arItem["LINK"]?>">
						<i class="bi <?=$arItem["PARAMS"]["menu_ico"] ?? "bi-file-earmark";?>"></i><span><?=$arItem["TEXT"]?></span>
					</a>
				</li>
			<?else:?>
				<li>
					<a href="<?=$arItem["LINK"]?>" <?if ($arItem["SELECTED"]):?> class="active"<?endif?>><i class="bi bi-circle"></i><span><?=$arItem["TEXT"]?></span></a>
				</li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<?endif?>