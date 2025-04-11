<!doctype html>
<html lang="en" class="light">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alrak's portfolio</title>
  </head>
  <body>

    <div>
  <?php require_once("sidebar.php"); ?>
     
       <?php require_once("header.php"); ?>
        
        <section class="lg:ml-[15vw] pt-10 px-5 lg:h-[91.5vh]">
            <h1 class="text-xl font-semibold pb-3">Dashboard</h1>
            <div class="cards bg-white dark:bg-opacity-10 rounded-lg py-10 px-5 lg:flex space-y-5 lg:space-y-0 gap-3">
                
                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>All Projects</h3>
                    <span class="text-center">10</span>
                    <a href="project.php" class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">
                        <span>view all</span>
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                </div>
        
                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>All Skills</h3>
                    <span class="text-center">10</span>
                    <a href="skill.php" class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">
                        <span>view all</span>
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                </div>
        
                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>All Projects</h3>
                    <span class="text-center">10</span>
                    <a href="#" class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">
                        <span>view all</span>
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </a>
                </div>
        
            </div>
        </section>
        
        
    </div>

  </body>
  </html>