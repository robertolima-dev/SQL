<?php

// APELIDANDO TABELAS

$query="
SELECT 
*
FROM
tb_cadastro AS cd LEFT JOIN tb_perfil AS pf ON (cd.id_usuario = pf.id_usuario)
";



$query="
SELECT 
cd.id_usuario,
cd.email,
cd.senha,
cd.perfil,
pf.status
FROM
tb_cadastro AS cd LEFT JOIN tb_perfil AS pf ON (cd.id_usuario = pf.id_usuario)
";