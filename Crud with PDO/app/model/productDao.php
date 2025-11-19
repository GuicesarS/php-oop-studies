<?php 

namespace App\Model;
class ProductDao
{
    public function create(Product $product)
    {
        $sql = 'INSERT INTO products (name, description) VALUES (?,?)';

        $stmt = Connection::getConnection()->prepare($sql);

        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());

        $stmt->execute();
    }

     public function read()
    {
        $sql = 'SELECT * FROM products';

        $stmt = Connection::getConnection()->prepare($sql);

        $stmt->execute();

        if($stmt->rowCount() > 0)
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        else
            return [];
    }

     public function update(Product $productId)
    {
       $sql = 'UPDATE products SET name = ?, description = ? WHERE id = ?';

       $stmt = Connection::getConnection()->prepare($sql);

        $stmt->bindValue(1, $productId->getName());
        $stmt->bindValue(2, $productId->getDescription());
        $stmt->bindValue(3, $productId->getId());

        $stmt->execute();
    }

     public function delete(Product $productId)
    {
        $sql = 'DELETE FROM products WHERE id = ?';
        $stmt = Connection::getConnection()->prepare($sql);

        $stmt->bindValue(1, $productId->getId()); // get the id passed in index.php
         // $stmt->bindValue(1, $productId); // Passing the ID when we call the method in index.php, without setting it beforehand.

        $stmt->execute();
    }

}
?>