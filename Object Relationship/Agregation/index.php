<?php 
class Product{
    public $name;
    public $value;

    function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

}

class Cart
{
    public $products;

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function display()
    {
        foreach ($this->products as $product)
        {
            echo $product->name . '<br>';
            echo $product->value . '<hr>';
        }
    }
}

$product1 = new Product("Notebook", "3000");
$product2 = new Product("Cellphone", "2000");
$product3 = new Product("Bed", "4000");

$cart = new Cart();
$cart->add($product1);
$cart->add($product2);
$cart->add($product3);

$cart->display();


?>