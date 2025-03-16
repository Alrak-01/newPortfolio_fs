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
  </head>
  <body>

    <div>
        <section class="sidebar lg:h-screen h-auto lg:w-[15vw] py-3 lg:border-r bg-zinc-100 dark:bg-black dark:border-stone-900 absolute">
            <div class="flex items-center justify-center gap-4 px-2 lg:px-0 text-sm lg:text-md">
                <h3 class="text-center font-serif italic font-bold">Alrak</h3>
                <span>
                    <i class="fa-solid fa-bars lg:text-lg lg:hidden block"></i>
                </span>
            </div>
            <ul class="text-gray-800 space-y-5 pt-10 font-medium hidden lg:block">
                <li class="hover:bg-gray-700 py-1 hover:text-white dark:text-white dark:hover:bg-gray-300 dark:hover:text-black duration-300 delay-100 transition-colors ease-in-out rounded-md border-b dark:border-stone-900">
                    <a href="index.php" class="px-5"> 
                        <i class="fa-solid fa-table-cells pr-5"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="hover:bg-gray-700 py-1 hover:text-white dark:text-white dark:hover:bg-gray-300 dark:hover:text-black duration-300 delay-100 transition-colors ease-in-out rounded-md border-b dark:border-stone-900">
                    <a href="project.php" class="px-5">
                        <i class="fa-solid fa-list-check pr-5"></i>
                        <span>Project</span>
                    </a>
                </li>
                <li class="hover:bg-gray-700 py-1 hover:text-white dark:text-white dark:hover:bg-gray-300 dark:hover:text-black duration-300 delay-100 transition-colors ease-in-out rounded-md border-b dark:border-stone-900">
                    <a href="skill.php" class="px-5">
                        <i class="fa-solid fa-lightbulb pr-5"></i> 
                        <span>Skill</span>
                    </a>
                </li>
                <li class="hover:bg-gray-700 py-1 hover:text-white dark:text-white dark:hover:bg-gray-300 dark:hover:text-black duration-300 delay-100 transition-colors ease-in-out rounded-md border-b dark:border-stone-900">
                    <a href="about.php" class="px-5">
                        <i class="fa-solid fa-address-card pr-5"></i>
                        <span>About</span>
                    </a>
                </li>
                <li class="hover:bg-gray-700 py-1 hover:text-white dark:text-white dark:hover:bg-gray-300 dark:hover:text-black duration-300 delay-100 transition-colors ease-in-out rounded-md border-b dark:border-stone-900">
                    <a href="social.php" class="px-5">
                        <i class="fa-solid fa-comment pr-5"></i> 
                        <span>My socials</span>
                    </a>
                </li>
                <li class="hover:bg-gray-700 py-1 hover:text-white dark:text-white dark:hover:bg-gray-300 dark:hover:text-black duration-300 delay-100 transition-colors ease-in-out rounded-md border-b dark:border-stone-900">
                    <a href="#" class="px-5">
                        <i class="fa-solid fa-person-walking-luggage pr-5"></i> 
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        
        <header class="w-[85vw] ml-[15vw] flex items-center justify-between px-5 font-medium py-3 text-sm lg:text-md border-b border-stone-900">
            <div class="right">
                <h1>Welcome to my console</h1>
            </div>
            <div class="left flex items-center gap-3">
                <span class="flex items-center gap-2 text-sm">
                    <i class="fa-solid fa-user"></i>
                    <h3>Admin Admin</h3>
                </span>
                <i class="fa-regular fa-moon lg:text-lg bg-black bg-opacity-30 dark:bg-opacity-10 dark:bg-white px-2 rounded-full shadow-md hover:opacity-50 delay-100 duration-100 transition-opacity"></i>
            </div>
        </header>


        
        
        
        <section class="lg:ml-[15vw] pt-10 px-5 lg:h-[91.5vh]">
            <div class="flex items-center justify-between mb-5">
                <h1 class='text-xl font-semibold mb-3'>Projects</h1>
                <button class="text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">Add Project</button>
                </div>

            <div class="cards bg-white dark:bg-opacity-10 rounded-lg py-10 px-5 lg:grid space-y-5 lg:space-y-0 grid-cols-4 lg:gap-5">
                
                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>Rasmat limited</h3>
                    <span class="text-center">Frontend</span>
                    <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
                </div>
        
                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>Rasmat limited</h3>
                    <span class="text-center">Frontend</span>
                    <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
                </div>

                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>Rasmat limited</h3>
                    <span class="text-center">Frontend</span>
                    <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
                </div>

                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>Rasmat limited</h3>
                    <span class="text-center">Frontend</span>
                    <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
                </div>

                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>Rasmat limited</h3>
                    <span class="text-center">Frontend</span>
                    <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
                </div>

                <div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
                    <h3>Rasmat limited</h3>
                    <span class="text-center">Frontend</span>
                    <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">2024</span>
                </div>
        
            </div>
        </section>
        
        
    </div>

  </body>
  </html>