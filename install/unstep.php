<?php

if (!check_bitrix_sessid()) {
	return;
}

CAdminMessage::ShowNote('������ ������� ������ �� �������');

?>
<form action="<?= $APPLICATION->GetCurPage() ?>">
  <input type="hidden" name="lang" value="<?= LANG ?>">
  <input type="submit" value="<?= GetMessage("MOD_BACK") ?>">
<form>
