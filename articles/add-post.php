<?php
include 'connect.php';
if (isset($_REQUEST['submit'])) {
  $title = $_REQUEST['title'];
  $post = $_REQUEST['post'];
  if (!empty($title) && !empty($post)) {
    $query = "INSERT INTO post(title,post) VALUES('$title', '$post')";
    mysqli_query($conn, $query);
  }
}
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
  <!-- header  -->
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
          <li><a href="#add-post" class="active">Add Post</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>
      <button class="toggle-menu" id="toggle-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <i class="fas fa-times"></i>
      </button>
    </header>
  </div>
  <!-- add post  -->
  <div class="add-post">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <h4>Add Post </h4>
      <label for="title">Title</label>
      <input type="text" placeholder="Enter a Title" id="title" name="title">
      <label for="post">Post</label>
      <input type="text" placeholder="Enter a Post" id="post" name="post">
      <input type="submit" name="submit" id="">
    </form>
    <div class="message <?php echo (isset($_REQUEST['submit']) && !empty($title) && !empty($post)) ?  'active' : ''; ?>">Post Published Successfully</div>
  </div>
  <script src="js/main.js"></script>
</body>

</html>