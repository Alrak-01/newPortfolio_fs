<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:authentication/login.php?e=notFound");
}
?>
<!doctype html>
<html lang="en" class="">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alrak's portfolio</title>
     <!-- JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    <div>
       <?php require_once("sidebar.php"); ?>
     
       <?php require_once("header.php"); ?>

        <section class='lg:ml-[15vw] pt-5 px-5 lg:h-[91.5vh]'>
            <div class="flex items-center justify-between mb-5">
            <h1 class='text-xl font-semibold mb-3'>About Me</h1>
            <a href="editAbout.php?about_id=1" class="AddSkill text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90"> Edit About</a>
            </div>
            <div id="displayAbout" class='bg-white py-10 text-sm rounded-lg px-5 leading-10 overflow-y-scroll lg:h-[90%] h-[75vh]'>
            </div>
          </section>  
    </div>
  </body>
  <script src="jquery/about.jquery.js"></script>
  </html>