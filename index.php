<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie2_Exo2</title>
</head>
<body>
    <?php
        $isEasy = false;
      if($isEasy === true){
        echo "C'est facile !!!";
      }else{
          echo "Cest difficile !!!";
      }
/*2ème methode avec les ternaires
  echo ($isEasy == true) ? 'C\'est facile' : 'C\'est difficile !!!';
*/
    ?>
</body>
</html>
