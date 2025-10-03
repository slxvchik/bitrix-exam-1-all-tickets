<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?

if (!empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>
<div class="row justify-content-center">
	<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
		<div class="card mb-3">
			<div class="card-body">
		
				<div class="pt-4 pb-2">
					<p class="text-center small"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_PLEASE_AUTH");?></p>
				</div>
		
				<form class="row g-3 needs-validation" novalidate name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
		
					<input type="hidden" name="AUTH_FORM" value="Y" />
					<input type="hidden" name="TYPE" value="AUTH" />
					<?if ($arResult["BACKURL"] <> ''):?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
					<?endif?>
					<?foreach ($arResult["POST"] as $key => $value):?>
					<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
					<?endforeach?>

					<div class="col-12">
						<label for="yourUsername" class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_LOGIN");?></label>
						<div class="input-group has-validation">
							<input
								type="text" class="form-control" id="yourUsername" required
								name="USER_LOGIN" maxlength="255" value="<?=$arResult["LAST_LOGIN"];?>"
							>
							<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_PLEASE_LOGIN");?></div>
						</div>
					</div>
		
					<div class="col-12">
						<label for="yourPassword" class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_PASSWORD");?></label>
						<input 
							class="form-control" id="yourPassword" required
							type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off" 
						>
						<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_PLEASE_PASSWORD");?></div>
					</div>
		
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input"
								type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y"
							>
							<label class="form-check-label" for="USER_REMEMBER"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_REMEMBER_ME")?></label>
						</div>
					</div>

					<!-- IF USED CAPTCHA -->
					 <?if($arResult["CAPTCHA_CODE"]):?>

						<div class="col-12">
							<label class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_CAPTCHA_LABEL");?>:
							</label>
							<div class="input-group has-validation">
								<input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
								<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_PLEASE_CAPTCHA");?></div>
							</div>
						</div>
						<div class="col-12">
							<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" /> <!-- CAPTCHA_CODE -->
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
						</div>

					<?endif;?>
					<!-- END CAPTCHA -->

					<div class="col-12">
						<button class="btn btn-primary w-100" type="submit" name="Login"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_BUTTON");?></button>
					</div>
		
					<?if($arParams["NOT_SHOW_LINKS"] != "Y" && $arResult["NEW_USER_REGISTRATION"] == "Y"):?>
						<noindex>
							<div class="col-12">
								<p class="small mb-0"><?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_REGISTER_QUESTION");?>
									<a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow">
										<?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_REGISTER")?>
									</a>
								</p>
							</div>
						</noindex>
					<?endif?>
			
				
					<?if ($arParams["NOT_SHOW_LINKS"] != "Y"):?>
						<noindex>
							<div class="col-12">
								<p class="small mb-0">
									<?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_FORGOT_PASSWORD_QUESTION");?>
									<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow">
										<?=GetMessage("EXAM1_TYPE2_AUTH_AUTHORIZE_FORGOT_PASSWORD");?>
									</a>
								</p>
							</div>
						</noindex>
					<?endif?>
			
				</form>
		
			</div>
		</div>
	</div>
</div>