<?php

//-------creating Tables----------

// CREATE TABLE ccc_category (
// category_id INT PRIMARY KEY,
//     category_name VARCHAR(100)
// );


// CREATE TABLE ccc_product (
//     product_id INT PRIMARY KEY,
//     product_name VARCHAR(100),
//     category_id INT,
//     price DECIMAL(10, 2),
//     FOREIGN KEY (category_id) REFERENCES ccc_category(category_id)
// );


//---------select queries---------

// SELECT * FROM ccc_product WHERE product_name = "VisionPro";
// SELECT * FROM ccc_product ORDER BY price DESC; (order by price from Higher to lower)

//-------Group products by category and count the number of products in each category:
// SELECT ccc_category.category_name, COUNT(*)
 AS product_count FROM ccc_product INNER JOIN ccc_category ON ccc_product.category_id = ccc_category.category_id GROUP BY ccc_category.category_name;

//--------SELECT Query with Limit---------
// SELECT * FROM ccc_product WHERE price >= 2000 LIMIT 5;



//-------Basic Insert query----------
//INSERT INTO ccc_product (product_name) VALUES 'smartWatch';

//-------Insert on Update------------
// INSERT INTO ccc_product (product_name, price) VALUES ('VisionPro', $999) ON DUPLICATE KEY UPDATE price = VALUES(price);


//-------Basic Update query----------
// UPDATE ccc_product SET price=$3999 WHERE product_name='VisionPro';

//-------UPDATE Query with INNER JOIN--------------
// UPDATE ccc_product
// INNER JOIN ccc_category ON ccc_product.category_id = ccc_category.category_id SET price = price * 0.9 WHERE ccc_category.category_name = 'Electronics';



?>

INNER JOIN ccc_category ON ccc_product.category_id = ccc_category.category_id