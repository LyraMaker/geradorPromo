<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de promoções</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
</head>

<body>
    <header>
    <nav class="navbar">
  <div class="navbar-brand  has-background-info ">
    <a href="index.php" class="navbar-item has-text-white">
      <strong class="is-uppercase">Gerador de promoção</strong>
    </a>

    <a class="navbar-burger has-background-white">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu has-background-white">
    <div class="navbar-end">
      <a href="index.php?id=a" class="navbar-item is-uppercase">
       Gerar promoção
      </a>

      <a href="index.php?id=b" class="navbar-item is-uppercase">
        Visualizar relatório
      </a>

</nav>
       
    </header>
    <main class="section">
        <div class="container">
<?php $op = $_GET['id'];

switch($op){
    case "a": include 'form.php';
    break;
    case "b":
    include('oferta.php');
    break;
}

?>

</div>

    </main>
    <footer class="footer has-background-link is-flex is-justify-content-center">
        <div id="copy">
            <p class="has-text-white">Site desenvolvido por <strong class="has-text-white">LyraMaker</strong></p>
        </div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/funcoes.js"></script>
</body>

</html>