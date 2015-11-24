<?php
namespace TygrolewGmail\Zawartosc\Tworcy;

class TekstowyTworcaNaglowkaZtytulem implements ITworcaNaglowka
{
  private $tytul;
  private $naglowek;

  public function __construct($tytul = null)
  {
    $this->tytul = $tytul;
    $this->tworzNaglowek();
  }

  public function getNaglowek()
  {
    return $this->naglowek;
  }

  private function tworzNaglowek()
  {
    $this->naglowek = "";
    if($this->tytul !== null) {
      $this->naglowek .= "<div><strong>" . $this->naglowek . "</strong><div/>\n";
    }
    else {
      $this->naglowek .= "<div><strong>Wstaw nagłówek</strong><div/>\n";
    }
    $this->naglowek .= "<hr/>\n";
  }

}
