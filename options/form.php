<form method="POST" action="<?=$APPLICATION->GetCurPage()?>?mid=<?= rees46recommender::MODULE_ID ?>&lang=<?=LANGUAGE_ID?>" id="FORMACTION">
	<input type="hidden" name="back_url" value="<?=htmlspecialcharsbx($back_url)?>" />
	<?= bitrix_sessid_post() ?>

	<?php
		$tabControl = new CAdminTabControl('tabControl', array(array(
			'DIV' => 'edit1',
			'TAB' => '���������',
			'TITLE' => '���������',
		)));
		$tabControl->Begin();
		$tabControl->BeginNextTab();
	?>

	<label for="REES46_shopid">ID ��������</label>
	<br/>
	<input type="text" id="REES46_shopid" value="<?= COption::GetOptionString(rees46recommender::MODULE_ID, 'shop_id') ?>" name="shop_id"/>

	<?php $tabControl->Buttons(array('disabled' => false)) ?>
	<?php $tabControl->End(); ?>
</form>
