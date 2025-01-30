<?php

class Librery{
    public $name;
    public $author;
    public $is_borrow;

    function __construct($name, $author) {
        $this->name = $name;
        $this->author = $author;
        $this->is_borrow = false;
    }

    function borrow() {
        if($this->is_borrow) {
            return "This {$this->name} is already borrowed.<br>";
        } else {
            $this->is_borrow = true; 
            return "You borrowed this {$this->name}.<br>";
        }
    }

    function returnBook() {
        if(!$this->is_borrow) {
            return "This {$this->name} is not borrowed.<br>";
        } else {
            $this->is_borrow = false;
            return "This {$this->name} is returned.<br>";
        }
    }
}

$book1 = new Librery("Navneet", "Rakesh");
$book2 = new Librery("PHP", "Feldge");

echo $book1->borrow();
echo $book1->borrow();
echo $book1->returnBook();
echo $book2->borrow();
echo $book2->borrow();
echo $book2->returnBook();

?>
