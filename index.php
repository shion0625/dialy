<?php
    if (array_key_exists('email', $_POST) || array_key_exists('password', $_POST)) {
        if ($_POST['email'] == '') {
            ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
          $("#email-error").show();
        </script>
        <?php

        }
        if ($_POST['password'] == '') {
            ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
        </script>
        <?php

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="container main">
    <h1>Secret Diary</h1>
    <p><strong>Store your thoughts permanently and securely</strong></p>
    <p>Interested? Sign up now.</p>
    <form action="" method="POST">
      <div class="form-group email-form"> <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Your Email">
        <p id="email-error">メールアドレスが入力されていません</p>
      </div>
      <div class="form-group"> <input type="password" name="password" class="form-control" placeholder="password">
        <p id="pwd-error">パスワードが入力されていません</p>
      </div>
      <div class="form-group form-check"> <input type="checkbox" class="form-check-input" id="exampleCheck1"> <label class="form-check-label" for="exampleCheck1">Stay logged in</label> </div> <button type="submit" class="btn btn-primary" id="signUp">Sign Up!</button>
      <p><a href="">Log In</a></p>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>