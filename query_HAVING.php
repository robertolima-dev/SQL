<?php


// HAVING -> filtros de agrupamento -> nao existe sem o GROUP BY
$query="
SELECT 
*
FROM 
tb_nome_tabela
WHERE 
filtos 
GROUP BY 
agrupamento 
HAVING 
filtro do agrupamento
ORDER BY 
ordenacao 
LIMIT
0, 10
";


// HAVING -> filtros de agrupamento -> nao existe sem o GROUP BY
$query="
SELECT 
estado, count(*) as total_de_registro_por_estado
FROM 
tb_nome_tabela 
GROUP BY 
estado
HAVING 
total_de_registro_por_estado >= 5
";


// HAVING -> filtros de agrupamento -> duas condicoes devem ser atendidas
$query="
SELECT 
estado, count(*) as total_de_registro_por_estado
FROM 
tb_nome_tabela 
GROUP BY 
estado
HAVING 
estado IN('MG', 'SP') AND total_de_registro_por_estado > 3
";


// HAVING -> filtros de agrupamento -> duas condicoes devem ser atendidas
$query="
SELECT 
estado, count(*) as total_de_registro_por_estado
FROM 
tb_nome_tabela 
WHERE 
salario > 2000
GROUP BY 
estado
HAVING 
estado IN('MG', 'SP') AND total_de_registro_por_estado > 3
";




