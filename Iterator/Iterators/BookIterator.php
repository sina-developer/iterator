<?php 

namespace Iterator\Iterators;

use Iterator\Collections\BookCollection;

class BookIterator implements \Iterator{

    private int $i_pos = 0;
    private BookCollection $bookCollection;

    public function __construct(BookCollection $collection){
        $this->bookCollection = $collection;
    }
    
    public function current(){
        return $this->bookCollection->getTitle($this->i_pos);
    }
    
    public function key(){
        return $this->i_pos;
    }
    
    public function next(){
        $this->i_pos++;
    }
    
    public function rewind(){
        $this->i_pos = 0;
    }

    public function valid(){
        return !is_null($this->bookCollection->getTitle($this->i_pos));
    }
}