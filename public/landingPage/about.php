<?php
require_once("../../autoload/autoload.php");

$result = $social->selectAdmin();
$row = $result->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alrak's portfolio</title>
    <script type="text/javascript" src="jquery/theme.js"></script>
  </head>
  <body>
    <div class='dark:bg-black dark:text-white bg-zinc-200 min-h-[100vh] z-10'>
        
      <div class="h-screen">
         <?php include("header.php");?>
 
        <div class='lg:px-48 lg:pt-16 pt-10 px-2'>
          <h1 class='lg:text-4xl text-3xl text-gray-900 dark:text-white font-medium pb-6'>About Me.</h1>
          <h3 class='leading-8 text-gray-800 dark:text-gray-100'><?=$row['about_me']?></h3>
      </div>

       <?php include("footer.php");?>
      </div>

      </div>
</body>
</html>
