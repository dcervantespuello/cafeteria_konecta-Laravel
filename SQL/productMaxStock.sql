SELECT
    name as Nombre,
    stock as Stock
FROM
    products
WHERE
    stock = (
        SELECT
            MAX(stock)
        from
            products
    );