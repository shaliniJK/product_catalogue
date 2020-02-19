<?php

namespace App\Repository;

use App\Product;
use Symfony\Component\Yaml\Yaml;

class ProductRepository
{

    private static function parseCatalogue()
    {
        $contents = Yaml::parseFile('../database/data/catalogue.yaml');

        $dumped = Yaml::dump(['contents' => $contents], 2, 4, Yaml::DUMP_OBJECT_AS_MAP);

        $parsed = Yaml::parse($dumped, Yaml::PARSE_OBJECT_FOR_MAP);

        $catalogue = $parsed->contents;

        $products = [];

        foreach($catalogue->products as $key => $value) {
            $product = new Product(
                $key,
                $value->name, 
                $value->price, 
                $value->description
            );

            $products[] = $product;
        }

        return $products;

    }

    public static function findAll()
    {
        $products = self::parseCatalogue();

        return $products;
    }

    public static function findOne($id)
    {
        $products = self::parseCatalogue();
             
        return $products[$id];
    }
}