<?php
$link = mysql_connect('mysql://root:qcfjxFtnHiAAmvHgVKIdvbaOLWonAmtI@autorack.proxy.rlwy.net:19606/railway')
if (!$link){
die ('não pode ser conectado: ' .mysql_error());
}
echo 'conexão com secesso!';
mysql_close($link);
?>