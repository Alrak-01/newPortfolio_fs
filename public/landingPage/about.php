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
    <div class='pb-5 dark:bg-black dark:text-white bg-zinc-200 h-auto z-10'>
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

        <div class='lg:px-48 lg:pt-16 px-2 pt-10'>
          <h1 class='lg:text-4xl text-3xl text-gray-900 dark:text-white font-medium pb-6'>About Me.</h1>
          <h1>{props.contact}</h1>
          <h3 class='leading-8 text-gray-800 dark:text-gray-100'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum quos nisi ipsum debitis ad iste sapiente eius id, ipsa harum ut, est obcaecati adipisci dolor. Delectus explicabo ratione perferendis nesciunt porro temporibus et, neque voluptas inventore quis minima, velit ex placeat repellat aut eum, possimus fuga iusto ipsum dolore! Explicabo nihil aut itaque rem molestias voluptatibus dolore, quod aliquid iste mollitia placeat quia illum, similique cum delectus impedit laborum. Qui praesentium quasi non fuga, soluta explicabo aliquid recusandae quis labore quisquam ducimus commodi alias? Consequatur qui quod unde minus consectetur sit vero ipsa ab similique id. Eligendi ab atque deserunt distinctio. Rerum aliquam laborum, temporibus dolorem quidem amet pariatur consectetur repudiandae, adipisci error quam eius quis cupiditate fugit? Ea totam tempore commodi aliquid, expedita quibusdam quod maxime id tenetur, aliquam vitae doloribus incidunt iste temporibus nam officia, esse omnis eius laborum nemo voluptatum. Repudiandae reiciendis quo aspernatur labore, et aut expedita praesentium! Tempore doloribus voluptatibus minima similique officiis vitae placeat est suscipit tenetur, cupiditate inventore voluptate enim soluta consequatur temporibus eos quae aut, pariatur repellat harum totam provident, omnis veritatis. Ad similique, commodi ex nulla minus dolore inventore vel ducimus maxime repudiandae rerum explicabo dolorem sit laudantium earum accusantium iure, accusamus ullam! Deserunt debitis quia tempore voluptatum nisi quos assumenda esse labore autem at quod laboriosam, possimus inventore maiores amet fuga harum ab dolorum dolores quis eveniet, minus sapiente repudiandae quae? Enim neque labore provident nisi laudantium? Facilis quae perferendis, minima modi expedita officiis facere harum nesciunt a iusto quibusdam unde omnis? Cupiditate tempora, temporibus quas similique exercitationem odio quo amet numquam impedit officia. Provident doloribus accusantium consequatur id nulla, porro voluptas ratione, doloremque labore autem in eaque enim error repellat repellendus odio distinctio exercitationem vero? Odit dolor, magnam aperiam at iusto expedita, tempore veniam, eveniet aliquam atque optio?</h3>
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
