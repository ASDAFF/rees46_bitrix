<?php

if (!check_bitrix_sessid()) {
	return;
}

CAdminMessage::ShowNote('������ REES46 ����������');

?>
<form action="<?= $APPLICATION->GetCurPage() ?>">
	<input type="hidden" name="lang" value="<?= LANG ?>">
	<input type="submit" value="<?= GetMessage('MOD_BACK') ?>">
<form>
