<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<!-- Portfolio Details Section -->
<section class="portfolio-details section">
	<div class="container">

		<div class="row gy-4">

			<div class="col-lg-8">
				<div class="portfolio-details-slider">
					<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT'];?>">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="portfolio-info">
					<h3>Проект</h3>
					<ul>
						<li><strong>Услуги</strong>: <?=$arResult['SECTION']['NAME'];?></li>
						<? foreach($arResult['PROPERTIES'] as $property) { ?>
						<li><strong><?=$property['NAME'];?></strong>: <?=$property['VALUE'];?></li>
						<? } ?>
					</ul>
				</div>
				<div class="portfolio-description">
					<h2><?=$arResult['NAME'];?></h2>
					<p>
						<?=$arResult['DETAIL_TEXT'];?>
					</p>
				</div>
				<div>
					<a href="<?=$arResult['SECTION']['SECTION_PAGE_URL'];?>"><b>В список</b></a>
				</div>

			</div>

		</div>

	</div>

</section><!-- /Portfolio Details Section -->