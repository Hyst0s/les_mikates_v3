<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/header.css">
    <link rel="stylesheet" href="../includes/footer.css">
    
    <?php
    
    define('CSS_PATH', '../styles/');

    $page = basename($_SERVER['PHP_SELF']);

    if ($page === 'index.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/index.css'>";
        } elseif ($page === 'mon_histoire.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/mon_histoire.css'>";
        } elseif ($page === 'mes_produits.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/mes_produits.css'>";
        } elseif ($page === 'contact.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/contact.css'>";
        } elseif ($page === 'commander.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/commander.css'>";
        } elseif ($page === 'description_plat.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/description_plat.css'>";
        } elseif ($page === 'utilisateur.php') {
        echo "<link rel='stylesheet' type='text/css' href='" . CSS_PATH . "../styles/utilisateur.css'>";
        }
    ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly:ital@0;1&family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
    <title>Les mikatés de Betti</title>
</head>
<body>
  <header>
    <div class="container">
    <div></div>
    <div class="imgcoin1">
      <img src="../images/accueil/ChatGPT_Image_29_mai_2025__16_36_04-removebg-preview 4.png" alt="">
    </div>

    <nav class="lien">
      <ul>
        <li><a href="../mon_histoire/mon_histoire.php">Mon Histoire</a></li>
        <li><a href="../mes_produits/mes_produits.php">Mes produits</a></li>
        <li><a href="../index.php"><img src="../images/accueil/ChatGPT_Image_28_mai_2025__13_56_47-removebg-preview 1.png" alt=""></a></li>
        <li><a href="../commander\commander.html">Commander</a></li>
        <li><a href="../contact\contact.php">Contact</a></li>
      </ul>
    </nav>

    <div class="icon">
        <a href="../page_utilisateur\utilisateur.php"><img src="../images/accueil/union-1.png" alt=""></a>
        <a href=""><img src="../images/accueil/shopping-basket 1.png" alt=""></a>
    </div>

    <div class="imgcoin">
      <img src="../images/accueil/ChatGPT_Image_29_mai_2025__16_36_04-removebg-preview 4.png" alt="">
    </div>
  </div>
  </header>
</body>
