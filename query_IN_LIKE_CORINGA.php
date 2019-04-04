<?php

// OPERADOR IN -> filtros
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna 
IN 
('A', 'B', 'C')
";


// OPERADOR NOT IN -> filtros
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna 
NOT IN ('A', 'B', 'C')
";


// OPERADOR LIKE -> filtros
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE 'Nome do campo'
";


// OPERADOR LIKE e CORINGA % -> pesquisa com ultima letra 'e'
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE '%e'
";


// OPERADOR LIKE e CORINGA % -> pesquisa com letra 'e' entre caracteres
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE '%e%'
";


// OPERADOR LIKE e CORINGA % -> pesquisa que começa com a letra 'C'
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE 'C%'
";


// OPERADOR LIKE e CORINGA _ -> pesquisa que tem um caracter indefinido e terminado em 'riel' -> Uriel ou Ariel etc
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE '_riel'
";


// OPERADOR LIKE e CORINGA _ -> pesquisa que tem um caracter indefinido no comeco e no fim com 'ru' no meio
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE '_ru_'
";


// OPERADOR LIKE e CORINGA _ -> pesquisa que incia com S e contem mais dois caracteres indefinidos
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE 'S__'
";


// OPERADOR LIKE e CORINGAS % _ 
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
nome_coluna LIKE '%li_'
";







































