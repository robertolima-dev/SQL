<?php


// GROUP BY -> agrupamento
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
filtos 
GROUP BY 
agrupamento 
ORDER BY 
ordenacao 
LIMIT
0, 10
";


// GROUP BY -> agrupamento
$query="
SELECT 
*, count(*)
FROM 
tb_nome_tabela
GROUP BY 
coluna_agrupada
";


// GROUP BY -> agrupamento
$query="
SELECT 
coluna_agrupada, count(*)
FROM 
tb_nome_tabela
GROUP BY 
coluna_agrupada
";



// GROUP BY -> agrupamento -> estado é um nome de uma coluna de um db
$query="
SELECT 
estado, count(*) as total_por_estado
FROM 
tb_nome_tabela
GROUP BY 
estado
";





