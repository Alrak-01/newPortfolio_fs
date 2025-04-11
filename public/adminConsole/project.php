<!doctype html>
<html lang="en" class="">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Alrak's portfolio</title>
  </head> 
  <body>
    <div class="wrapper">
    <?php require_once("sidebar.php"); ?>
 
   <?php require_once("header.php"); ?>
        
    <section class="lg:ml-[15vw] pt-10 px-5 lg:h-[91.5vh]">
        <div class="flex items-center justify-between mb-5">
            <h1 class='text-xl font-semibold mb-3'>Projects</h1>
            <a href="addProject.php" class="text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">Add Project</a> 
        </div>

        <div class="relative  cards bg-white dark:bg-opacity-10 rounded-lg py-10 lg:px-5 lg:grid space-y-5 lg:space-y-0 grid-cols-4 lg:gap-5 overflow-y-scroll lg:h-[87%] h-[75vh]" id="displayProject">
            
           <!--  <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                <div class="flex items-center justify-between pb-5">
                    <h3>Rasmat limited</h3>
                    <span id="menu absolute">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        
                    </span>
                </div>
                <span class="text-center">Frontend</span>
                <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
            </div> -->
             <!-- <span class="text-xs">
                    <i class="fa-solid fa-pencil"></i>
                    <i class="fa-solid fa-trash"></i>
             </span> -->
        </div>
    </section>
        
    </div>

  </body>
  <script src="jquery/project.jquery.js"></script>
  </html>