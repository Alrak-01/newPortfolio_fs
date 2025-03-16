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
  </head>
  <body>
    <div class="dark:border-stone-800 bg-zinc-200 dark:bg-black z-10 dark:text-white">
        <header class="whitespace-nowrap flex items-center justify-between font-medium border-b border-stone-300  py-5 px-2 lg:px-48 sticky top-0 z-50 ">
            <div class="left">
                <a href="/" class="flex items-center gap-3 text-md lg:text-xl">
                    <i class="fa-solid fa-book text-gray-600 lg:text-xl"></i>
                    <p class="">Tania Rascia</p>
                </a>
            </div>
            <div class="right">
                <ul class="flex items-center lg:gap-5 text-sm lg:text-base dark:text-gray-100">
                    <li class="hover:bg-white delay-50 duration-100 transition-color px-2 lg:px-3 py-1 rounded-md hover:shadow-md dark:hover:bg-opacity-10">
                        <a href="/about">About Me</a>
                    </li>
                    <li class="hover:bg-white delay-50 duration-100 transition-color px-2 lg:px-3 py-1 rounded-md hover:shadow-md dark:hover:bg-opacity-10 cursor-pointer">
                        <a href="#skill">Stacks</a>
                    </li>
                    <li class="hover:bg-white delay-50 duration-100 transition-color px-2 lg:px-3 py-1 rounded-md hover:shadow-md dark:hover:bg-opacity-10">
                        <a href="/project">Projects</a>
                    </li>
                    <li class="hover:bg-white delay-50 duration-100 transition-color px-2 lg:px-3 py-1 rounded-md hover:shadow-md dark:hover:bg-opacity-10 cursor-pointer">
                        <a href="#contact">Socials</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-sun bg-white p-2 rounded-lg shadow-md hover:opacity-50 delay-100 duration-100 transition-opacity dark:bg-black"></i>
                    </li>
                </ul>
            </div>
        </header>


        <div class="lg:px-48 px-2 pt-16 flex items-start lg:flex-row flex-col-reverse w-full">
            <div class="text lg:w-1/2 space-y-10">
                <h1 class="lg:text-5xl text-4xl text-gray-900 dark:text-white font-medium">Hey, I'm Tania</h1>
                <h3 class="lg:text-xl text-lg text-gray-800 dark:text-gray-100">
                    I'm a software developer who makes open-source projects and writes about code and life.
                </h3>
                <h3 class="lg:text-xl text-lg text-gray-800 dark:text-gray-100">
                    On this site, you can check out all the 
                    <a href="/project" class="text-[#3792a5] font-semibold">projects</a> I've worked on, 
                    check some of my 
                    <a href="#skill" class="text-[#3792a5] font-semibold">skills</a>, 
                    or learn more 
                    <a href="/about" class="text-[#3792a5] font-semibold">about me</a>.
                </h3>
            </div>
            <div class="logo lg:w-1/2 hidden lg:block">
                <img src="../images/img1.png" alt="Alrak Logo" class="object-cover w-60 lg:w-full">
            </div>
        </div>

        <div id="skill" class="lg:px-48 mx-2 pt-16 whitespace-nowrap">
            <h1 class="lg:text-4xl text-3xl text-gray-900 dark:text-white font-medium lg:pb-10 pb-5">
                Tech Stack - Experience
            </h1>
            <ol class="list-disc space-y-5">
                <li class="font-medium text-lg">Languages</li>
                <div>
                    <ul class="list-disc pl-6 lg:flex items-center gap-20 w-full space-y-5 lg:space-y-0">
                        <li class="text-[#3792a5] font-bold">HTML / CSS - <span>3 years</span></li>
                        <li class="text-[#3792a5] font-bold">JavaScript - <span>3 years</span></li>
                        <li class="text-[#3792a5] font-bold">PHP - <span>3 years</span></li>
                    </ul>
                </div>
        
                <li class="font-medium text-lg">Frameworks</li>
                <div>
                    <ul class="list-disc pl-6 lg:flex items-center gap-20 w-full space-y-5 lg:space-y-0">
                        <li class="text-[#3792a5] font-bold">Tailwind CSS - <span>3 years</span></li>
                        <li class="text-[#3792a5] font-bold">React.js - <span>1 year</span></li>
                        <li class="text-[#3792a5] font-bold">Bootstrap - <span>3 years</span></li>
                    </ul>
                </div>
        
                <li class="font-medium text-lg">Others</li>
                <div>
                    <ul class="list-disc pl-6 lg:flex items-center gap-20 w-full space-y-5 lg:space-y-0">
                        <li class="text-[#3792a5] font-bold">Git/GitHub - <span>3 years</span></li>
                        <li class="text-[#3792a5] font-bold">MySQL - <span>3 years</span></li>
                        <li class="text-[#3792a5] font-bold">REST API - <span>2 years</span></li>
                    </ul>
                </div>
            </ol>
        </div>
        


        <div class="lg:px-48 mx-2 py-16">
            <div class="flex items-center justify-between w-full pb-10">
                <h1 class="lg:text-4xl text-3xl font-medium">Projects</h1>
                <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-3 py-2 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                    All Projects
                </a>
            </div>
            
            <div class="cards grid lg:grid-cols-3 gap-5">
                <!-- Project Card Start -->
                <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">2023</p>
                    <a href="#" class="block hover:underline font-medium text-xl delay-100 duration-100">TakeNote</a>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">A free, open-source notes app for the web</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>

                <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">2023</p>
                    <a href="#" class="block hover:underline font-medium text-xl delay-100 duration-100">TakeNote</a>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">A free, open-source notes app for the web</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>

                <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">2023</p>
                    <a href="#" class="block hover:underline font-medium text-xl delay-100 duration-100">TakeNote</a>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">A free, open-source notes app for the web</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>

                <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">2023</p>
                    <a href="#" class="block hover:underline font-medium text-xl delay-100 duration-100">TakeNote</a>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">A free, open-source notes app for the web</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>

                <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">2023</p>
                    <a href="#" class="block hover:underline font-medium text-xl delay-100 duration-100">TakeNote</a>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">A free, open-source notes app for the web</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>

                <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">2023</p>
                    <a href="#" class="block hover:underline font-medium text-xl delay-100 duration-100">TakeNote</a>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">A free, open-source notes app for the web</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="#" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>
                
            </div>
        </div>

        <div id="contact" class="contact px-10 lg:px-48 pb-5 ">
            <ul class="flex items-center justify-center gap-5 text-xl text-white">
                <!-- LinkedIn -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10">
                    <a href="https://www.linkedin.com/in/yourprofile">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <!-- GitHub -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10">
                    <a href="https://github.com/yourgithub">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <!-- WhatsApp -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10">
                    <a href="https://wa.me/yourwhatsappnumber">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
                <!-- Skype -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10">
                    <a href="skype:your.skype?chat">
                        <i class="fa-brands fa-skype"></i>
                    </a>
                </li>
                <!-- Email -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10">
                    <a href="mailto:your@email.com">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </div>

        
    </div>
</body>
</html>
