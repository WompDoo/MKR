<?php
$product_id = !empty($_GET['id']) ? $_GET['id'] : 1;


//Retrieve product data from database
$product = get_first("SELECT *, product.product_name as name, stock.quantity as quantity,
                         FROM product
                         JOIN stock on stock.product_id = product.product_id
                         WHERE product_id=$product_id");

//Retrieve all relationships for the author from database
$relationships = get_all("SELECT link_type.name as type, film.name as film
                            FROM l_author_film
                            JOIN film ON film.film_id = l_author_film.film_id
                            JOIN link_type ON link_type.type_id = l_author_film.type_id
                            WHERE author_id=$author_id");
