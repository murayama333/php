<?php
require('../common/functions.php');
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title><?= ADMIN_BLOG_TITLE ?></title>
   </head>
   <body>
     <h1><?= ADMIN_BLOG_TITLE ?></h1>
     <hr>
     <h2>Login</h2>
     <form action="login_post.php" method="post">
       <label>UserID:</label><br>
       <input type="text" name="userid">
       <label>Password:</label><br>
       <input type="password" name="password">
       <input type="submit" value="login">
     </form>
   </body>
 </html>
