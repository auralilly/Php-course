<?php
// footer.php
// Shared footer content. Included from index.php.
// the start of the journey

//car class

class car{
  public string $make;
  public string $model;
  public int $year;

  public function __construct( string $make, string $model,int $year){
    $this-> make = $make;
    $this-> model =$model;
    $this->year = $year; 
  }
  public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}
?>
  