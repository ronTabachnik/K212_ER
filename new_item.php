<?
include('session.php');
include('db.php');

define("MAX_SIZE", 5 * 1024 * 1024 * 1024);

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['name'])) array_push($errors, 'name is empty');
  if (empty($_POST['contact'])) array_push($errors, 'contact info is empty');
  if ($_FILES["image"]["size"] > 0) {
    if ($_FILES["image"]["size"] > MAX_SIZE) {
      array_push($errors, 'image too big');
    }
    $imgsize = getimagesize($_FILES["image"]["tmp_name"]);
    if ($imgsize === false) {
      array_push($errors, 'not an image');
    }
  }

  if (count($errors) == 0) {
    $stmt = $db->prepare("insert into announcements (user_id, category_id, name, contact, description) values (:user_id, :category_id, :name, :contact, :description)");
    $stmt->bindParam(':user_id', $_SESSION['user']['id']);
    $stmt->bindParam(':category_id', $_POST['category']);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':contact', $_POST['contact']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->execute();
    if ($_FILES["image"]["size"] > 0) {
      $id = $db->lastInsertId();
      $stmt = $db->prepare("update announcements set image = :image where id=:id");
      $tmp_file = $_FILES["image"]["tmp_name"];
      $image_path = "images/".$id.'.'.pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
      rename($tmp_file, $image_path);
      chmod($image_path, 644);
      $stmt->bindParam(':image', $image_path);
      $stmt->bindParam(':id', $id);  
      $stmt->execute();
    }
    header("Location: /market.php");
    exit();
  }
}

$stmt = $db->prepare("select * from categories order by name");
$stmt->execute();
$categories = $stmt->fetchAll();

?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>New item - ER</title>
  <link rel="icon" type="image/x-icon" href="styles/images/ProductLogo.ico">
  <link rel="icon" href="styles/images/ProductLogo.png">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <link href="styles/base.css" rel="stylesheet">
  <!-- <link href="styles/nav.css" rel="stylesheet"> -->
  <link href="styles/sign.css" rel="stylesheet">
  <!-- <link href="styles/product.css" rel="stylesheet"> -->
</head>

<body class="text-center">
<? include('nav_header.php'); ?>

  <main class="form-signin">
    <form method="POST" enctype="multipart/form-data">
      <img src="styles/images/ProductLogo.png" alt="mdo" width="100" height="100" class="rounded  center">
      <h1 class="h3 mb-3 fw-normal">New item</h1>
      <div class="form-floating">
        <select name="category" class="form-control">
<? foreach ($categories as $category) { ?>
          <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
<? } ?>
        </select>
      </div>
      <br>
      <div class="form-floating">
        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="varde">
        <label for="floatingInput">Name</label>
      </div>
      <br>
      <div class="form-floating">
        <input name="contact" type="text" class="form-control" id="contact" placeholder="varde">
        <label for="contact">Contact</label>
      </div>
      <br>
      <div class="form-floating">
        <input name="image" type="file" class="form-control" id="image">
        <label for="image">Image</label>
      </div>
      <br>
      <div class="form-floating">
        <textarea name="description" required class="form-control" id="description" placeholder="Description" rows="8" cols="50"></textarea>
        <label for="description">Description</label>
      </div>
      <br>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>
      <br>

    </form>
    <div class="error"><?= join('<br>', $errors) ?></div>
  </main>

  <? //include("nav_footer.php") ?>

</body>

</html>
