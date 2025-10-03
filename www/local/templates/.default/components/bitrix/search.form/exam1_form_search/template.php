<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
$this->setFrameMode(true);?>

<div class="footer-search">
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-lg-6">
				<h4><?=GetMessage('EXAM1_FORM_SEARCH_TITLE');?></h4>
				<form action="<?=$arResult['FORM_ACTION']?>">
					<div class="search-form">
						<input class="input-seach" type="text" name="q">
						<input class="button-seach" name="s" type="submit" value="<?=GetMessage('EXAM1_FORM_SEARCH_TITLE');?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>