<?php
if (isset($_POST['id']) === true && empty($_POST['id'])  === false) {
	if ($_POST['id'] === 'wolkita') {
		$resp = exec('/usr/bin/wol c8:60:00:bb:ff:93 >> /var/log/scripts/wol.log 2>&1');
	} elseif($_POST['id'] === 'wolmb01') {
		$resp = exec('/usr/bin/wol 40:61:86:f4:5d:b3 >> /var/log/scripts/wol.log 2>&1');
	}
	#echo $_POST['listid'];
	#echo 'Regeneration complete';
}
?>
