<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 13:44
 */


namespace Itech\Model;


class Product
{
    private int $id;

    private string $title;

    private string $price;

    private bool $sellable = true;

    private User $user;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Product
     */
    public function setId(int $id): Product
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Product
     */
    public function setTitle(string $title): Product
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @param string $price
     * @return Product
     */
    public function setPrice(string $price): Product
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSellable(): bool
    {
        return $this->sellable;
    }

    /**
     * @param bool $sellable
     * @return Product
     */
    public function setSellable(bool $sellable): Product
    {
        $this->sellable = $sellable;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Product
     */
    public function setUser(User $user): Product
    {
        $this->user = $user;
        return $this;
    }
}
