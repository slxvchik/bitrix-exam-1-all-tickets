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
// $this->setFrameMode(true);
?>

<div class="row">
	<div class="col-lg-12">

		<div class="card">
			<div class="card-body">
				<div class="d-flex py-4 px-4">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>№</th>
								<th><?=GetMessage("EXAM1_TYPE2_NEWS_DATA_NAME");?></th>
								<th><?=GetMessage("EXAM1_TYPE2_NEWS_DATA_CATEGORY");?></th>
								<th><?=GetMessage("EXAM1_TYPE2_NEWS_DATA_CITY");?></th>
								<th><?=GetMessage("EXAM1_TYPE2_NEWS_DATA_QUANTITY");?></th>
							</tr>
						</thead>
						<tbody>
						<?foreach($arResult["ITEMS"] as $arItem):?>

							<tr>
								<td><?=$arItem["NAME"];?></td>
								<td><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PROPERTIES"]["PRODUCT"]["VALUE"];?></a></td>
								<td><?=$arItem["PROPERTIES"]["PRODUCT_CATEGORY"]["VALUE"];?></td>
								<td><?=$arItem["PROPERTIES"]["CITY"]["VALUE"];?></td>
								<td><?=$arItem["PROPERTIES"]["QUANTITY"]["VALUE"];?></td>
							</tr>
							
						<?endforeach;?>
						</tbody>
					</table>
				</div>
				<div class="d-flex py-2 px-4 flex-column">
					<?=$arResult["NAV_STRING"];?>
				</div>
			</div>
		</div>

	</div>
</div>
