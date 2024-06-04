<?php

class Product {

    protected int $id_product;
    protected string $name;
    protected float $price;
    private string $image;
    protected Category $category;

    public function __construct(int $_id_product, string $_name, float $_price, Category $_category ) {
        
        $this->id_product = $_id_product;
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getId() {
        return $this->id_product;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getImage(): string {
        if (isset($this->image) && !empty($this->image)) {
          return $this->image;
        }
    
        return "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fpixy.org%2Fimages%2Fplaceholder.png&f=1&nofb=1&ipt=07d4732dce811b1108de5d752a6d9184d789fe2bb220acedf2e70e60456fbb9a&ipo=images";
      }
    
      
      public function setImage(string $_image): void {
        if ($_image === "") {
          throw new Exception("L'articolo deve avere un immagine");
        }
        $this->image = $_image;
      }
    
}
