<?php
class Producte
{
    private $id;
    private $nom;
    private $preu;
    private $image;

    public function __construct($id, $nom, $preu, $image)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->preu = $preu;
        $this->image = $image;
    }

    public function __get($valor)
    {
        return $this->$valor;
    }
   
    public function __set($valor, $n_valor){
        if(property_exists($this,$valor)){
        $this->$valor = $n_valor;
        }
    }
}
