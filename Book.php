<?php
class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'Number of Pages' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return null;
        }
    }
}

$author = new Author("George Orwell", "British author, best known for the novel 1984.");

$publisher = new Publisher("Secker & Warburg", "London, United Kingdom", "987654321");

$book = new Book(9780451524935, "1984", "A dystopian social science fiction novel.", "Dystopian", "English", 328, $author->show("name"), $publisher->name);

echo "Detail Buku: \n";
print_r($book->showAll());

echo "\nDetail Buku Berdasarkan ISBN: \n";
print_r($book->detail(9780451524935));
?>