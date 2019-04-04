<?php

// O RIGHT JOIN PRIORIZA OS REGISTROS DA TABELA A DIREITA (tb_perfil) QUE SE RELACIONAM ENTRE AS TABELAS

$query="
SELECT 
*
FROM
tb_cadastro 
RIGHT JOIN 
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
RIGHT JOIN 
tb_perfil 
ON 
tb_cadastro.id_usuario = tb_perfil.id_usuario;
";




