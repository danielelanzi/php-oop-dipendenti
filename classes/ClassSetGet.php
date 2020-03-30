<?php

class Dipendente
{
  protected $id;
  protected $nome;
  protected $ruolo;
  protected $contratto;

  public function __construct($_id,$_nome,$_ruolo,$_contratto)
  {

    if (!is_numeric($_id)) 
    {
      throw new Exception('Non hai inserito un numero');
    } 
    else 
    {
      $this->id = $_id;
    }
    $this->nome = $_nome;
    $this->ruolo = $_ruolo;
    $this->contratto = $_contratto;
  }

    public function getId()
    {
      if (!is_numeric($this->id)) {
        throw new Exception('Non hai inserito un numero');
      }
      return $this->id;
    }

    public function setId($_id)
    {
      $this->id = $_id;
    }

    public function getNome()
    {
      return $this->nome;
    }

    public function setNome($_nome)
    {
      $this->nome = $_nome;
    }

    public function getRuolo()
    {
      return $this->ruolo;
    }

    public function setRuolo($_ruolo)
    {
      $this->ruolo = $_ruolo;
    }

    public function getContratto()
    {
      return $this->contratto;
    }

    public function setContratto($_contratto)
    {
      $this->contratto = $_contratto;
    }

  public function getAll()
  {
    return [
      'ID Dipendente: ' => $this->id, 
      'Nome: ' => $this->nome,
      'Ruolo: ' => $this->ruolo, 
      'Contratto: ' => $this->contratto,
    ];
  }
}