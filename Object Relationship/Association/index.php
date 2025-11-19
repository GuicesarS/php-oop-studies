<?php 

class Order
{
    public $number;
    public $customer;
}

class Customer
{
    public $name;
    public $address;
}

$customer = new Customer();
$customer->name = "Guilherme César";
$customer->address = "Street xxx, Number: 123";

$order = new Order();
$order->number = "123";
$order->customer = $customer;

$data = array(
    'number' => $order->number,
    'customer_name' => $order->customer->name,
    'customer_address' => $order->customer->address
);

var_dump($data);
?>