<?php
class Ville
{
    /*******************************Attributs*******************************/
    private $_idVille;
    private $_nomVille;
    private $_numeroDepartementVille;
    private $_CPVille;
    private $_DateMAJ;

    /******************************Accesseurs*******************************/
    public function getIdVille()
    {
        return $this->_idVille;
    }
    public function setIdVille($_idVille)
    {
        return $this->_idVille = $_idVille;
    }
    public function getNomVille()
    {
        return $this->_nomVille;
    }
    public function setNomVille($_nomVille)
    {
        return $this->_nomVille = $_nomVille;
    }
    public function getNumeroDepartementVille()
    {
        return $this->_numeroDepartementVille;
    }
    public function setNumeroDepartementVille($_numeroDepartementVille)
    {
        return $this->_numeroDepartementVille = $_numeroDepartementVille;
    }
    public function getCPVille()
    {
        return $this->_CPVille;
    }
    public function setCPVille($_CPVille)
    {
        return $this->_CPVille = $_CPVille;
    }
    public function getDateMAJ()
    {
        return $this->_DateMAJ;
    }
    public function setDateMAJ($_DateMAJ)
    {
        return $this->_DateMAJ = $_DateMAJ;
    }



    /*******************************Construct*******************************/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    /****************************Autres méthodes****************************/
    public function toString()
    {
        return $this->getIdVille() . "\n" . $this->getNomVille() . "\n" . $this->getNumeroDepartementVille() . "\n" . $this->getCPVille() . "\n" . $this->getDateMAJ();
    }
}
