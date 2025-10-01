<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<!-- Portfolio List Section -->
<section class="portfolio section">

	<div class="container">
		<div class="row gy-4">
	<?
	if (!empty($arResult['ITEMS']) && !empty($arResult['ITEM_ROWS']))
	{

		foreach($arResult['ITEMS'] as $item) {
			$sPicture = CFile::ResizeImageGet($item['DETAIL_PICTURE'], array('width'=>416, 'height'=>240), BX_RESIZE_IMAGE_EXACT);
		?>
			<div class="col-lg-4">
				<article>
					<div class="post-img">
						<img src="<?=$sPicture['src'];?>" alt="<?=$arSection['DETAIL_PICTURE']['ALT'];?>" class="img-fluid">
					</div>
					<div class="card-body">
						<h5 class="title"><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME'];?></a></h5>
						<p class="card-text"><?=$item['PREVIEW_TEXT'];?></p>
					</div>
				</article>
			</div>
		<? }
	} ?>
		</div>
	</div><!-- End Portfolio Container -->

</section><!-- /Portfolio List Section -->