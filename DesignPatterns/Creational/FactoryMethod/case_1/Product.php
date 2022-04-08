<?php

abstract class Product
{
    private $sku;
    private $name;
    protected $type = null;

    public function __construct($sku, $name)
    {
        $this->sku = $sku;
        $this->name = $name;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
}


class ProductChair extends Product
{
    protected $type = 'chair';
}

class ProductTable extends Product
{
    protected $type = 'table';
}

class ProductBookcase extends Product
{
    protected $type = 'bookcase';
}

class ProductSofa extends Product
{
    protected $type = 'sofa';
}
