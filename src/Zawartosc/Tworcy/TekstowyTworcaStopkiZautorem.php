<?php
namespace TygrolewGmail\Zawartosc\Tworcy;

class TekstowyTworcaStopkiZautorem implements ITworcaStopki
{
  private $autor;
  private $stopka;

  public function __construct($autor = null)
  {
    $this->autor = $autor;
    $this->tworzStopke();
  }

  public function getStopka()
  {
    return $this->stopka;
  }

  private function tworzStopke()
  {
    $this->stopka = "<hr/>\n";
    if($this->autor !== null) {
      $this->stopka .= "<div>&copy;" . $this->stopka . "<div/>\n";
    }
    else {
      $this->stopka .= "<div>Stopka<div/>\n";
    }
  }

}
