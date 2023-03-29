<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'root_gabriel');
define('SENHA', 'puchini22puchini');
define('DB', 'gsp_host');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');