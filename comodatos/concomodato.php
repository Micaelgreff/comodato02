<?php

define ('HOSTCOMODATO', '127.0.0.1');
define ('USUARIOCOMODATO', 'root');
define ('SENHACOMODATO', '');
define ('DBCOMODATO', 'rbdata');

$concomodato = mysqli_connect(HOSTCOMODATO, USUARIOCOMODATO, SENHACOMODATO, DBCOMODATO) or die('Não foi possível conectar');

?>