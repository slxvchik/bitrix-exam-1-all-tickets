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
					<h3><?=GetMessage("EXAM1_CATALOG_ELEMENT_PROJECT_NAME");?></h3>
					<ul>
						<li><strong><?=GetMessage("EXAM1_CATALOG_ELEMENT_SERVICES_NAME");?></strong>: <?=$arResult['SECTION']['NAME'];?></li>
						<li><strong><?=GetMessage("EXAM1_CATALOG_ELEMENT_BRANCH_NAME");?></strong>: <?=$arResult['PROPERTIES']['BUSINESS_SECTOR']['VALUE'];?></li>
						<li><strong><?=GetMessage("EXAM1_CATALOG_ELEMENT_COMPANY_NAME");?></strong>: <?=$arResult['PROPERTIES']['CLIENT_NAME']['VALUE'];?></li>
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