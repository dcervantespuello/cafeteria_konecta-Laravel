SELECT
    a.name as Nombre,
    SUM(sold) as Vendidos
FROM
    products a
    JOIN sales b ON a.id = b.product_id
GROUP BY
    Nombre
ORDER BY
    Vendidos DESC
LIMIT
    1;