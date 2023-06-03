<?php

require 'vendor/autoload.php';

use Slim\Factory\AppFactory;
use Illuminate\Database\Capsule\Manager as Capsule;

$app = AppFactory::create();

// Configuración de la conexión a la base de datos SQLite
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => ':memory:',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Definición del modelo de Producto
class Product extends Illuminate\Database\Eloquent\Model {
    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'quantity'];
}

// Ruta para consultar todos los productos ordenados por precio
$app->get('/products', function ($request, $response, $args) {
    $products = Product::orderBy('price')->get();
    return $response->withJson($products);
});

// Ruta para consultar un producto por ID
$app->get('/products/{id}', function ($request, $response, $args) {
    $id = $args['id'];
    $product = Product::find($id);
    
    if (!$product) {
        return $response->withStatus(404)->withJson(['error' => 'Product not found']);
    }
    
    return $response->withJson($product);
});

// Ruta para crear un nuevo producto
$app->post('/products', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    
    $product = Product::create($data);
    
    return $response->withJson($product)->withStatus(201);
});

// Ruta para actualizar un producto existente
$app->put('/products/{id}', function ($request, $response, $args) {
    $id = $args['id'];
    $product = Product::find($id);
    
    if (!$product) {
        return $response->withStatus(404)->withJson(['error' => 'Product not found']);
    }
    
    $data = $request->getParsedBody();
    
    $product->fill($data);
    $product->save();
    
    return $response->withJson($product);
});

// Ruta para eliminar un producto existente
$app->delete('/products/{id}', function ($request, $response, $args) {
    $id = $args['id'];
    $product = Product::find($id);
    
    if (!$product) {
        return $response->withStatus(404)->withJson(['error' => 'Product not found']);
    }
    
    $product->delete();
    
    return $response->withJson(['message' => 'Product deleted']);
});

$app->run();