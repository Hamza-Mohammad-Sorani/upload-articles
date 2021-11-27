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
  <div class="container">
    <header id="header">
      <div class="logo">
        <a href="#home">
          <h2>Acticles</h2>
        </a>
      </div>
      <nav id="nav">
        <ul>
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="add-post.php">Add Post</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>
      <button class="toggle-menu" id="toggle-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <i class="fas fa-times"></i>
      </button>
    </header>
  </div>
  <script src="js/main.js"></script>
</body>

</html>

<?php
include 'connect.php';
$query = 'SELECT * FROM post';
$result = mysqli_query($conn, $query);
if (isset($result)) {
?>
  <div class="parent">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <div class="article">
        <h5><a href="article.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h5>
        <p> <?php echo $row['post']; ?> </p>
        <a href="article.php?id=<?php echo $row['id']; ?>">Read More</a>
      </div>
  <?php
    }
  }
  ?>
  </div>