<?php

class Name{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

class Author extends Name{
    public $author;

    function __construct($name, $author){
        parent::__construct($name);
        $this->author = $author;
    }
}

class Borrow extends Author{
    public $is_borrow;

    function __construct($name, $author){
        parent::__construct($name, $author);
        $this->is_borrow = false;
    }

    function borrow(){
        if($this->is_borrow){
            return "This {$this->name} is already borrowed<br>";
        }else{
            $this->is_borrow = true;
            return "The book {$this->name} is borrowed<br>"; 
        }
    }

    function isReturn(){
        if($this->is_borrow){
            $this->is_borrow = false;
            return "The book {$this->name} is returned<br>";
        }else{
            return "This {$this->name} is not borrowed<br>";
        }
    }
}

$book1 = new Borrow("Navneet","Raju");
$book2 = new Borrow("PHP","Fledge");

echo $book1->borrow();
echo $book1->isReturn();

echo $book2->borrow();
echo $book2->isReturn();
?>
