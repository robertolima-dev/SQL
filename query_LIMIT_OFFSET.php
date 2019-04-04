<?php


// OPERADOR LIMIT -> limita a quantidade de registros que sao retornados -> LIMIT sempre no final da query -> 0 ao 5 registros
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
idade BETWEEN 18 AND 50
ORDER BY 
nome ASC
LIMIT 
5
";


// OPERADOR LIMIT e OFFSET -> Offset so pode ser declarado se tiver o limit declarado -> 2 ao 12 registros
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
aluno LIKE 'João'
ORDER BY 
idade ASC
LIMIT 
12
OFFSET 
2
";


// OPERADOR LIMIT -> retorna 4 registros -> 0,1,2,3 -> paginacao pg1
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
aluno LIKE 'João'
ORDER BY 
idade ASC
LIMIT 
4
OFFSET
0
";

// OPERADOR LIMIT -> retorna 4 registros -> 4,5,6,7 -> paginacao pg2
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
aluno LIKE 'João'
ORDER BY 
idade ASC
LIMIT 
4
OFFSET
4
";


// OPERADOR LIMIT -> retorna 4 registros -> 8,9,10,11 -> paginacao pg3
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
aluno LIKE 'João'
ORDER BY 
idade ASC
LIMIT 
4
OFFSET
8
";















