<?php

abstract class Tasit
{
  protected $plakaNo;
  protected $marka;
  protected $model;
  protected $tekerlekSayisi;
  protected $kanatAcikligi;

  public function __construct($marka, $model, $plakaNo, $tekerlekSayisi, $kanatAcikligi)
  {
    $this->marka = $marka;
    $this->model = $model;
    $this->plakaNo = $plakaNo;
    $this->tekerlekSayisi = $tekerlekSayisi;
    $this->kanatAcikligi = $kanatAcikligi;
  }

  abstract function ozellikYazdir();
}

class Araba extends Tasit
{
  public function __construct($marka, $model, $plakaNo = null, $tekerlekSayisi = null, $kanatAcikligi = null)
  {
    parent::__construct($marka, $model, $plakaNo, $tekerlekSayisi, $kanatAcikligi);
  }

  public function ozellikYazdir()
  {
    echo "Plaka No        : {$this->plakaNo}\n";
    echo "Marka           : {$this->marka}\n";
    echo "Model           : {$this->model}\n";
    echo "Tekerlek Sayısı : {$this->tekerlekSayisi}\n";
  }
}

class Motorsiklet extends Tasit
{
  public function __construct($marka, $model, $plakaNo = null, $tekerlekSayisi = null, $kanatAcikligi = null)
  {
    parent::__construct($marka, $model, $plakaNo, $tekerlekSayisi, $kanatAcikligi);
  }

  public function ozellikYazdir()
  {
    echo "Plaka No        : {$this->plakaNo}\n";
    echo "Marka           : {$this->marka}\n";
    echo "Model           : {$this->model}\n";
    echo "Tekerlek Sayısı : {$this->tekerlekSayisi}\n";
  }
}

class Ucak extends Tasit
{
  public function __construct($marka, $model, $plakaNo = null, $tekerlekSayisi = null, $kanatAcikligi = null)
  {
    parent::__construct($marka, $model, $plakaNo, $tekerlekSayisi, $kanatAcikligi);
  }

  public function ozellikYazdir()
  {
    echo "Marka          : {$this->marka}\n";
    echo "Model          : {$this->model}\n";
    echo "Kanat Açıklığı : {$this->kanatAcikligi}\n";
  }
}

$araba = new Araba("Mercedes", "C180", "06 ARAC 06", 4);
$araba->ozellikYazdir();
echo "\n";
$motorsiklet = new Motorsiklet("Honda", "Forza 700", "06 MOTOR 06", 2);
$motorsiklet->ozellikYazdir();
echo "\n";
$ucak = new Ucak("Airbus", "A380", null, null, "80m");
$ucak->ozellikYazdir();
