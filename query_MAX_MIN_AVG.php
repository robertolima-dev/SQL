<?php


// FUNCAO DE AGREGACAO MIN -> 
$query="
SELECT 
MIN(coluna) 
FROM 
tb_nome_tabela
WHERE 
filtro
";


// FUNCAO DE AGREGACAO MIN -> com filtro
$query="
SELECT 
MIN(investimento) 
FROM 
tb_nome_tabela
WHERE 
ativo = true
";


// FUNCAO DE AGREGACAO MAX -> com filtro
$query="
SELECT 
MAX(investimento) 
FROM 
tb_nome_tabela
WHERE 
ativo = true
";


// FUNCAO DE AGREGACAO AVG -> MEDIA -> com filtro
$query="
SELECT 
AVG(investimento) 
FROM 
tb_nome_tabela
WHERE 
ativo = true
";














