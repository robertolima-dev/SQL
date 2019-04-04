<?php

// O LEFT JOIN PRIORIZA OS REGISTROS DA TABELA A ESQUERDA (tb_cadastro) QUE SE RELACIONAM ENTRE AS TABELAS

$query="
SELECT 
*
FROM
tb_cadastro 
LEFT JOIN 
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
LEFT JOIN 
tb_perfil 
ON 
tb_cadastro.id_usuario = tb_perfil.id_usuario;
";