<?php include("head.php") ?>
<?php include("header.php") ?>

  <?php 
      switch($v){
        case '':
          include('home.php'); 
        break;
        case 'a':
            include('account.php');
          break;
        case 'd':
          include('documents.php');
        break;
        case 's':
            include('search.php');
        break;
     }
  ?>
  <br><br>
        
    <?php include("footer.php") ?>