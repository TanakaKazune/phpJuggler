<?php
 class Role {
    private $name;
    private $rolePicture;
    private $winPrize;
    private $gogoPicture;
    private $banner;

    public function __construct($name, $rolePicture, $winPrize, $gogoPicture, $banner) {
      $this->name = $name;
      $this->rolepicture = $rolePicture;
      $this->winPrize = $winPrize;
      $this->gogopicture =$gogoPicture;
      $this->banner =$banner;
    }

    public function getName() {
      return $this->name;
    }

    public function getRolePicture() {
      return $this->rolePicture;
    }

    public function getWinPrize() {
      return $this->winPrize;
    }

    public function getGoGoPicture() {
      return $this->gogoPicture;
    }

    public function getBanner() {
      return $this->banner;
    }
  }

 $grape = new Role('ぶどう', 'grape.png', '7 Medals Get!', 'gogoF.png', 'jugguler.png');
 $replay = new Role('replay','rhino.png', 'Replay', 'gogoF.png', 'jugguler.png');
 $cherry = new Role('cherry', 'cherry.png', '2 Medals Get!', 'gogoF.png', 'jugguler.png');
 $failure = new Role('外れ', 'failure.png', 'Insert Medals', 'gogoF.png', 'jugguler.png');
 $big = new Role('big', 'failure.png', 'Insert Medals', 'gogoW.png', '777.png');
 $cBig = new Role('cherryBig', 'cherry.png', '2 Medals Get!', 'gogoW.png', '777.png');
 $regular = new Role('regular', 'failure.png', 'Insert Medals', 'gogoW.png', '77R.png');
 $cRegular = new Role('cherryRegular', 'cherry.png', '2 Medals Get!', 'gogoW.png', '77R.png');
?>