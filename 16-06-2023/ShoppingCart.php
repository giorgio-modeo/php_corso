<?php 
class ShoppingCart{
    public array $prodotti =[];

    public function addProdotto(string $prodotto,int $quantity): bool
    {
        if (!isset($this->prodotti[$prodotto])) {
            $this->prodotti[$prodotto] = 0;
            $this->prodotti[$prodotto] = $quantity;
            return true;
        }
    }
    public function removeProdotto(string $prodotto): bool
    {
        if (isset($this->prodotti[$prodotto])) {
            unset($this->prodotti[$prodotto]) ;
            return true;
        }
    }
    public function changeQuantity(string $prodotto,int $quantity): bool
    {
        if (isset($this->prodotti[$prodotto])) {
            $this->prodotti[$prodotto] = $quantity;
            return true;
        }
    }
    public function removeAllProducts(): bool
    {
        
        $this->prodotti = [];
        return true;


    }

}