<?php


// FUNCAO DE AGREGACAO SUM -> soma
$query="
SELECT 
SUM(investimento) 
FROM 
tb_nome_tabela
WHERE 
ativo - true
";



// FUNCAO DE AGREGACAO COUNT -> conta a quantidade de registros referentes ao filtro -> ativo = true
$query="
SELECT 
COUNT(*) 
FROM 
tb_nome_tabela
WHERE 
ativo - true
";











