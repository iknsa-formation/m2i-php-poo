<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 14:06
 */


namespace Itech\Repository;


use Itech\Model\Product;
use Itech\Model\User;
use Simplex\Repository;
use Simplex\Service\Hydrator;

class ProductManager extends Repository
{
    public function create(Product $product)
    {
        try {
            $statement = $this->db->prepare(
                "INSERT INTO `product` (title, price, sellable, user) VALUES  (:title, :price, :sellable, :user)"
            );
            $statement->bindValue('title', $product->getTitle());
            $statement->bindValue('price', $product->getPrice());
            $statement->bindValue('sellable', $product->isSellable());
            $statement->bindValue('user', $product->getUser()->getId());

            if (!$statement->execute()) {
                return $statement->errorInfo();
            }

            $product->setId($this->db->lastInsertId());
        } catch (\PDOException $exception) {
            dd($exception);
        }

        return true;
    }

    public function findOneById($id)
    {
        $statement = $this->db->prepare(
            "SELECT * FROM product WHERE id=:id"
        );
        $statement->bindValue('id', $id);

        $statement->execute();
        $productData = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$productData) return false;

        $statement = $this->db->query(
            'SELECT * FROM user WHERE id=' . $productData['user']
        );
        $userData = $statement->fetch(\PDO::FETCH_ASSOC);
        $productData['user'] = Hydrator::hydrate(User::class, $userData);

        return Hydrator::hydrate(Product::class, $productData);
    }

    public function findBySellable()
    {
        $statement = $this->db->query(
            'SELECT * FROM product WHERE sellable=1'
        );
        $productsData = $statement->fetchAll(\PDO::FETCH_ASSOC);

        if (!$productsData) {
            return false;
        }

        $products = [];
        foreach ($productsData as $productData) {

            $statement = $this->db->query(
                'SELECT * FROM user WHERE id=' . $productData['user']
            );
            $userData = $statement->fetch(\PDO::FETCH_ASSOC);
            $productData['user'] = Hydrator::hydrate(User::class, $userData);
            $products[] = Hydrator::hydrate(Product::class, $productData);
        }

        return $products;
    }

    public function findByUser(User $user)
    {
        $statement = $this->db->query(
            'SELECT * FROM product WHERE user=' . $user->getId()
        );
        $productsData = $statement->fetchAll(\PDO::FETCH_ASSOC);

        if (!$productsData) {
            return false;
        }

        $products = [];
        foreach ($productsData as $productData) {

            $statement = $this->db->query(
                'SELECT * FROM user WHERE id=' . $productData['user']
            );
            $userData = $statement->fetch(\PDO::FETCH_ASSOC);
            $productData['user'] = Hydrator::hydrate(User::class, $userData);
            $products[] = Hydrator::hydrate(Product::class, $productData);
        }

        return $products;
    }

    public function edit(Product $product)
    {
        try {
            $statement = $this->db->prepare(
                "UPDATE `product` SET title=:title, price=:price, sellable=:sellable WHERE id=:id"
            );
            $statement->bindValue('title', $product->getTitle());
            $statement->bindValue('price', $product->getPrice());
            $statement->bindValue('sellable', (int) $product->isSellable());
            $statement->bindValue('id', $product->getId());

            if (!$statement->execute()) {
                dd($statement->errorInfo());
            }

            return $product;
        } catch (\PDOException $exception) {
            dd($exception);
        }
    }
}