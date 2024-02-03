<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Tudublin\MovieRepository;
use Tudublin\ProductRepository;
use Tudublin\ProductFixtures;

$movieRepository = new MovieRepository();
$productRepository = new ProductRepository();

//------ movies
$movieRepository->resetTable();
// hard code link to Product with ID = 1
$movieRepository->createAndInsert('Jaws', 9.99, 'horror', 1);
// hard code link to Product with ID = 2
$movieRepository->createAndInsert('Jumanji', 7, 'entertainment', 2);

$movies = $movieRepository->findAll();
print '<pre>';
var_dump($movies);

//-------- products
$productRepository->resetTable();
$productFixtures = new ProductFixtures();
$products = $productFixtures->getArray();
$productRepository->insertMany($products);

$products = $productRepository->findAll();
print '<pre>';
var_dump($products);

