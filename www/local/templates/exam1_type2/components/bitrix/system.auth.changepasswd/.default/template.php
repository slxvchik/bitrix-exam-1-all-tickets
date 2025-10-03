<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<div class="row justify-content-center">
	<div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
		<div class="card mb-3">
			<div class="card-body">

				<div class="pt-4 pb-2">
					<? if (!empty($arParams["~AUTH_RESULT"])) { ?><p class="small"><?ShowMessage($arParams["~AUTH_RESULT"]);?></p><? } ?>
				</div>

				<form class="row g-3 needs-validation" novalidate method="post" action="<?=$arResult["AUTH_URL"]?>" name="bform">

					<?if ($arResult["BACKURL"] <> ''): ?>
					<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
					<? endif ?>
					<input type="hidden" name="AUTH_FORM" value="Y">
					<input type="hidden" name="TYPE" value="CHANGE_PWD">
		
					<div class="col-12">
						<label class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_LOGIN");?></label>
						<div class="input-group has-validation">
						<input class="form-control" required type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />
						<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_PLEASE_LOGIN");?></div>
						</div>
					</div>
					<div class="col-12">
						<label class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_CONTROL_LINE");?></label>
						<div class="input-group has-validation">
						<input class="form-control" required type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" />
						<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_PLEASE_CONTROL_LINE");?></div>
						</div>
					</div>
					<div class="col-12">
						<label class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_NEW_PASSWORD");?></label>
						<div class="input-group has-validation">
						<input class="form-control" required type="password" name="USER_PASSWORD" maxlength="255" value="<?=$arResult["USER_PASSWORD"];?>" />
						<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_PLEASE_NEW_PASSWORD");?></div>
						</div>
					</div>
					<div class="col-12">
						<label class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_PASSWORD_CONFIRM");?></label>
						<div class="input-group has-validation">
						<input class="form-control" type="password" required name="USER_CONFIRM_PASSWORD" maxlength="255" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" />
						<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_PLEASE_PASSWORD_CONFIRM");?></div>
						</div>
					</div>

					<!-- IF USED CAPTCHA -->
					<?if($arResult["USE_CAPTCHA"]):?>
						<div class="col-12">
							<label class="form-label"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_CAPTCHA_LABEL");?></label>
							<div class="input-group has-validation">
								<input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
								<div class="invalid-feedback"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_PLEASE_CAPTCHA");?></div>
							</div>
						</div>
						<div class="col-12">
							<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" /> <!-- CAPTCHA_CODE -->
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
						</div>
					<?endif?>
					<!-- END CAPTCHA -->
		
		
					<div class="col-12">
						<button class="btn btn-primary w-100" type="submit" name="change_pwd" value="Изменить пароль"><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_BUTTON");?></button>
					</div>
			
					<div class="col-12">
						<p class="small"><?= $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>  <!-- GROUP_POLICY / PASSWORD_REQUIREMENTS-->
					</div>

					<div class="field">
						<p class="small"><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("EXAM1_TYPE2_AUTH_CHANGEPASSWD_AUTH_LINK");?></b></a></p>  <!-- AUTH_URL -->
					</div>
			
				</form>

			</div>
		</div>
	</div>
</div>