<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php

    /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */

    class Persona
    {

        private $nome;
        private $cognome;
        private $dataNascita;

        public function __construct($nome, $cognome, $dataNascita)
        {

            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->dataNascita = $dataNascita;
        }

        public function getNome()
        {

            return $this->nome;
        }
        public function setNome($nome)
        {

            $this->nome;
        }
        public function getCognome()
        {

            return $this->cognome;
        }
        public function setCognome($cognome)
        {

            $this->cognome;
        }
        public function getData()
        {

            return $this->dataNascita;
        }
        public function setData($dataNascita)
        {

            $this->dataNascita;
        }

        public function printFullPerson()
        {
            return $this->getNome() . " " . $this->getCognome() . "<br> Data di Nascita: " . $this->getData();
        }


        public function __toString()
        {

            return $this->printFullPerson();
        }
    }


    class Employee extends Persona
    {

        private $stipendio;
        private $dataAssunzione;

        public function __construct($nome, $cognome, $dataNascita, $stipendio, $dataAssunzione)
        {

            parent::__construct($nome, $cognome, $dataNascita);
            $this->stipendio = $stipendio;
            $this->dataAssunzione = $dataAssunzione;
        }

        public function getStipendio()
        {

            return $this->stipendio;
        }
        public function setStipendio($stipendio)
        {

            $this->stipendio;
        }

        public function getDataAssunzione()
        {

            return $this->dataAssunzione;
        }

        public function setDataAssunzione()
        {

            $this->dataAssunzione;
        }

        public function printFullEmployee()
        {
            return parent::printFullPerson() . " " . "<br>" . "Stipendio: " . $this->getStipendio()
                . "<br>Data di Assunzione ( " . $this->getDataAssunzione() . " )";
        }

        public function __toString()
        {


            return $this->printFullEmployee();
        }
    }

    $p1 = new Persona("Pinco", "Pallo", "20/07/1970");

    $p1->setData("29/07/1970");

    echo "<h4>Persona:</h4><br>" . $p1;

    echo "<br><br>------------------<br><br>";

    $e1 = new Employee("Pinco", "Pallo", "20/07/1970", "1300$", "11/01/2019");



    echo "<h4>Employee:</h4><br>" . $e1;

    ?>

</body>

</html>