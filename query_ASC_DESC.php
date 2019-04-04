<?php

// SEM FILTRO
$query="
SELECT 
*
FROM 
tb_nome_tabela
ORDER BY 
coluna ASC
";


// SEM FILTRO
$query="
SELECT 
*
FROM 
tb_nome_tabela
ORDER BY 
coluna DESC
";


// COM FILTRO ordem crescente
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
idade BETWEEN 18 AND 50
ORDER BY 
nome ASC
";


// COM FILTRO ordem decrescente
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
idade BETWEEN 18 AND 50
ORDER BY 
nome DESC
";



// COM FILTRO combinacoes
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
idade BETWEEN 18 AND 50
ORDER BY 
nome DESC, idade DESC 
";















