<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (0 < $arResult["SECTIONS_COUNT"]) { ?>
<section class="portfolio-sections section">
	<div class="container">
		<div class="row gy-4">
	<? foreach ($arResult['SECTIONS'] as &$arSection) {
		$altValue = (string)($arSection['IPROPERTY_VALUES']['SECTION_PICTURE_FILE_ALT'] ?? '');
		if ($altValue === '')
		{
			$altValue = $arSection['NAME'];
		}
		$sPicture = CFile::ResizeImageGet($arSection['PICTURE'], array('width'=>575, 'height'=>430), BX_RESIZE_IMAGE_PROPORTIONAL, true);
	?>
			<div class="col-lg-6">
				<div class="service-item position-relative">
					<div class="img">
						<img src="<?=$sPicture['src'];?>" class="img-fluid" alt="<?=$altValue?>">
					</div>
					<div class="details">
						<a href="<?=$arSection['SECTION_PAGE_URL'];?>">
							<?=$arSection['NAME'];?>
						</a>
						<p><?=$arSection['DESCRIPTION'];?></p>
					</div>
				</div>
			</div>
	<? } ?>
		</div>
	</div>
</section><!-- /Portfolio Sections Section -->
<? } ?>