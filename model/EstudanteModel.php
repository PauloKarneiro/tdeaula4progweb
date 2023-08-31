<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/aula3/model/Database.php';

class estudantemodel
{
    private int $idade;
    
    private string $nome;

    private $database;
    
    //Getters and Setters

    public function __construct()
    {
        $this->database = new Database();
    }
    
    public function listarModel(): array
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");

        return $dadosArray;
    }
    
    public function salvaModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudantes ('nome, idade') values ('$nome, $idade')";
        $this->database->insert($sql);

        echo "Estudante salvo com sucesso!";
    }
}