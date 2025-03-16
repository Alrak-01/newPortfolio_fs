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
            <h1 class="text-xl font-semibold mb-3">My Social</h1>
            <div class="skill bg-white py-5 rounded-lg">
        
                <div class="skill-container">
                    <!-- <form id="formSocial" class="px-5 rounded-md grid gap-3 text-sm lg:text-lg">
                        <div class="grid lg:grid-cols-2 space-y-4 lg:space-y-0 lg:gap-5">
                            <div class="category grid lg:gap-2">
                                <label for="category" class="font-semibold">
                                    New Social <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input  type="text" placeholder="Skill" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" required>
                            </div>
                            <div class="category grid gap-2">
                                <label for="category" class="font-semibold">
                                    Link <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="https://" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" required>
                            </div>
                        </div>
        
                        <div class="button flex items-end lg:justify-end pb-5">
                            <button type="submit" name="addSocial" class="text-xs lg:text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">
                                Submit
                            </button>
                        </div>
                    </form> -->
                </div>
        
                <div class="displayCategory pl-5 overflow-hidden">
                    <h1 class="lg:text-xl text-lg font-medium mb-5">All Socials</h1>
                    <div>
                        <ul class="list-disc text-sm w-full grid lg:grid-cols-3 grid-cols-2 gap-10">
                            <li class="text-[#3792a5] font-bold w-full">
                                HTML / CSS - 
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                    <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                </span>
                            </li>
        
                            <li class="text-[#3792a5] font-bold w-full">
                                HTML / CSS - 
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                    <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                </span>
                            </li>
        
                            <li class="text-[#3792a5] font-bold w-full">
                                JavaScript - 
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                    <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                </span>
                            </li>
        
                            <li class="text-[#3792a5] font-bold w-full">
                                PHP -
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                    <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                </span>
                            </li>
        
                            <li class="text-[#3792a5] font-bold w-full">
                                React - 
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                    <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                </span>
                            </li>
        
                            <li class="text-[#3792a5] font-bold w-full">
                                HTML / CSS - 
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-trash text-red-600"></i>
                                    <i class="fa-solid fa-pen-to-square text-blue-600"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        
    </div>

  </body>
  </html>