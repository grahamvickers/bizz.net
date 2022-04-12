<?php 

namespace App\Transformers;

abstract class Transformer
{
    /**
     * Transform an item
     * 
     * @param $item
     * @return mixed
     */
    abstract public function transform($item);
}