<?php

// O INNER JOIN TRAZ APENAS OS REGISTROS QUE SE RELACIONAM ENTRE AS TABELAS

$query="
SELECT 
*
FROM
tb_cadastro 
INNER JOIN 
tb_perfil 
ON 
(tb_cadastro.id_usuario = tb_perfil.id_usuario)
";


// OU


$query="
SELECT 
*
FROM
tb_cadastro 
INNER JOIN 
tb_perfil 
ON 
tb_cadastro.id_usuario = tb_perfil.id_usuario;
";




