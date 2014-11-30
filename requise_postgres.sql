/**
*в данном примере береться таблица с древовидной структурой, создаётся таблица temp1, в которую влаживается запись
*родительская ячейка, потом через оператор union создаётся рекурсивный запрос, который добавляет по одной записи на 
*каждый проход, добавляя тем самым строки в таблицу temp1
*
**/
WITH RECURSIVE temp1("id","title","parent_id",path, level) AS (SELECT r."id", r."title",r."parent_id", ARRAY[r."parent_id"],1 FROM specification r WHERE r."parent_id"=0
union ALL
SELECT r."id", r."title",r."parent_id" , path || r."parent_id",level+1 FROM specification r, temp1 t1 WHERE r."parent_id" = t1."id")
SELECT * FROM temp1;
