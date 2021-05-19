<?php require_once('role.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>phpJUGGLER</title>
</head>
<body>
 <?php
  $rand = rand(1,210);
  if($rand <= 35){
    $lottery = $grape;
  } elseif($rand > 35 && $rand <= 65) {
      $lottery = $replay;
  } elseif($rand > 65 && $rand <= 72) {
      $lottery = $cherry;
  } elseif($rand > 72 && $rand <= 200) {
      $lottery = $failure;
  } elseif($rand > 200 && $rand <= 203) {
      $lottery = $big;
  } elseif($rand > 203 && $rand <= 205) {
      $lottery = $cBig;
  } elseif($rand > 205 && $rand <= 207) {
      $lottery = $regular;
  } else{
      $lottery = $cRegular;
  }
 ?>

 <div class = "header">
  <p class='phpJUGGLER'>php JUGGGLER</p>
 </div>

 <div class = 'main'>
   <div class = 'banner'>
     <img src="<?php echo $lottery->getBanner() ?>">
   </div>
   
   <div class = 'rolePicture'>
    <!– 謎のエラーで断念 –>
   </div>  
   
   <div class = 'getWinprize'>
    <p><?php echo $lottery->getName(); ?></p>
    <p><?php echo $lottery->getWinprize(); ?></p>
   </div>
   
   <div class = "gogoRamp">
    <?php if($lottery->getName() === 'big' ||
             $lottery->getName() === 'cherryBig' ||
             $lottery->getName() === 'regular' ||
             $lottery->getName() === 'cherryRegular') : ?>
     <img src="gogoW.png" alt="エラー" width="320px" height="255px">
    <?php endif ?>
   </div>
   
 </div>
</body>
</html>