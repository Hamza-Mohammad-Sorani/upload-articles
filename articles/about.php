<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>acticles</title>
  <!-- google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <!-- style  -->
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!-- header -->
  <div class="container">
    <header id="header">
      <div class="logo">
        <a href="index.php">
          <h2>Acticles</h2>
        </a>
      </div>
      <nav id="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="add-post.php">Add Post</a></li>
          <li><a href="#about" class="active">About</a></li>
        </ul>
      </nav>
      <button class="toggle-menu" id="toggle-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <i class="fas fa-times"></i>
      </button>
    </header>
  </div>
  <!-- About  -->
  <div class="about">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque eveniet deleniti fuga totam omnis sit similique debitis facilis nostrum, nulla quam voluptate repudiandae voluptatum porro nemo fugit, iste eos eligendi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio fuga, deserunt suscipit magni quaerat labore nobis est esse quis incidunt, nihil sequi voluptates! Labore voluptatem voluptas minima facilis nisi vel! consectetur adipisicing elit. Quaerat praesentium facilis suscipit odio quidem distinctio voluptas adipisci culpa nam. Iusto laudantium commodi at natus dolore repudiandae. Ut asperiores quasi repellendus!</p>

  </div>
  <script src="js/main.js"></script>
</body>

</html>