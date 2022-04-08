<?php

/**
 * Static functions defines a function that dont need an instanced object
 */

class ProductFactory
{
  public static function build($productType, $sku, $name)
  {
    $product = "Product" . ucwords($productType);

    if (class_exists($product)) {
      return new $product($sku, $name);
    } else {
      throw new Exception("Invalid product type given.");
    }
  }
}
