<?php
class produit
{
    private $id;
    private $libelle;
    private $prix;
    private $qte;
    private $des;
    private $image;
    private $promo;

    public function __construct($id, $libelle, $prix, $qte, $des, $image, $promo)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qte = $qte;
        $this->des = $des;
        $this->image = $image;
        $this->promo = $promo;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     */
    public function setLibelle($libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of qte
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set the value of qte
     */
    public function setQte($qte): self
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get the value of des
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set the value of des
     */
    public function setDes($des): self
    {
        $this->des = $des;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of promo
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set the value of promo
     */
    public function setPromo($promo): self
    {
        $this->promo = $promo;

        return $this;
    }
}
