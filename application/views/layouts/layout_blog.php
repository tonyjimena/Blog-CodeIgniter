<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog con codeigniter by tony</title>

   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body>
<!-- Navigation -->
<?php require_once dirname( dirname( dirname(__FILE__))) . "/views/includes/menu2.php"; ?> <br>
  <!-- Page Content -->
    <?php echo $content_for_layout; ?> <br>

<?php require_once dirname( dirname( dirname(__FILE__))) . "/views/includes/footer.php"; ?>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>
  <!--<script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>-->
  <script type="text/javascript" src="/js/main.js"></script>
  
</body>

</html>