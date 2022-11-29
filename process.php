<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Chapter 12</title>

    <link rel="stylesheet" href="css/styles1.css" />

</head>
<body>
<!-- include the hearder file here -->
<?php include ('headerM.php');?>
<body>
<div class="results">
      <legend class="results__caption">Movie Information Saved</legend>
        <p class="form__row">
           <label class="results__label">Title: </label>
           <?php  echo $_POST['title'];?>
       </p>
       <p class="form__row">
           <label class="results__label">Description: </label>
           <?php  echo $_POST['description'];?>
       </p>
       <p class="form__row">
           <label class="results__label">Genre: </label>
           <?php  echo $_POST['genre'];?>
       </p>
       <p class="form__row">
           <label class="results__label">Subject: </label>
           <?php echo $_POST['subject'];?>
       </p>
       <p class="form__row">
           <label class="results__label">Star: </label>
           <?php  echo $_POST['Star'];?>
       </p>
       <p class="form__row">
           <label class="results__label">Year: </label>
           <?php  echo $_POST['year'];?>
       </p>
       <p class="form__row">
           <label class="results__label">Production: </label>
           <?php  echo $_POST['Production'];?>
       </p>
</div>
<!-- include the footer file here -->
<footer>
<?php include ('footerM.php');?>
</footer>
</body>
</html>



