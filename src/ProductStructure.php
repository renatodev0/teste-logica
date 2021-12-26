<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        $products = ProductStructure::products;
        $result = [];

        for($i = 0, $length = count($products, 0) ; $i < $length; $i++){
        
            $color_size = explode("-", $products[$i]);
            $color = $color_size[0];
            $size = $color_size[1];
    
            if(!array_key_exists($color, $result)){
                $result[$color] = [
                ];
            } 
    
            if(!array_key_exists($size, $result[$color])){
                $result[$color][$size] = 1;
            } else {
                $result[$color][$size] += 1;
            }
        }
        return $result;
    }
} 