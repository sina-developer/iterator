<?php

namespace Iterator\Collections;

use Iterator\Iterators\BookIterator;

class BookCollection implements \IteratorAggregate{

    public array $a_titles = [];

    public function getIterator(){
        return new BookIterator($this);
    }

    public function addTitle(string $title){
        $this->a_titles [] = $title;
    }

    public function getTitle($key){
        if(isset($this->a_titles[$key])){
            return $this->a_titles[$key];
        }
        return null;
    }

    public function is_empty(){
        return empty($this->a_titles);
    }
}