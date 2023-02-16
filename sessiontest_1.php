<?php
session_start();
?>

<html>
  <head></head>
</html>

<?php
if(!isset($_SESSION['visited'])){
  echo '初回の訪問です';

  $_SESSION['visited'] = 1;
  $_SESSION['date'] = date('c');
}else {
  $visited = $_SESSION['visited'];
  $visited++;
  $_SESSION['visited'] = $visited;

  echo $visited.'回目の訪問です<br>';

  if(isset($_SESSION['date'])){
    echo '前回の訪問は'.$_SESSION['date'].'です';
    $_SESSION['date'] = date('c');
  }
}