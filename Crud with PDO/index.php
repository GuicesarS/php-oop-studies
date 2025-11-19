<?php 

require_once 'vendor/autoload.php';

$product = new \App\Model\Product();
$product->setId(9);
$product->setName("Air Fryer");
$product->setDescription("8.5L");

$productDao = new \App\Model\ProductDao();

//$productDao->create($product);
$productDao->read();
//$productDao->update($product);
//$productDao->delete($product);

foreach ($productDao->read() as $items)
{
    echo $items['name'] . "<br>"  . $items['description'] . "<hr>"; //FETCH_ASSOC returns an array of associations.
}
?>