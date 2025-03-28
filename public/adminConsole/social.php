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

    <div>
    <?php require_once("sidebar.php"); ?>
       <?php require_once("header.php"); ?>

        <section class="lg:ml-[15vw] pt-10 px-5 lg:h-[91.5vh]">
            <div class="flex items-center justify-between ">
                <h1 class="text-xl font-semibold mb-3">All Socials</h1>
                    <button id="editSocialBtn" class="text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">Open Form</button>
            </div>
            <div class="skill bg-white py-5 rounded-lg">
                <div class="displayCategory pl-5 overflow-hidden">

                    <div class="Social-container hidden" id="editSocialContainer">
                    <form id="editSocialForm" class="rounded-md grid gap-3 text-sm lg:text-lg">
                        <div class="grid lg:grid-cols-3 space-y-4 lg:space-y-0 lg:gap-5">
                            <div class="linkedin grid lg:gap-2">
                                <label for="linkedin" class="font-semibold">
                                    Linkedin <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Linkedin" id="linkedin" name="linkedin" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="github grid lg:gap-2">
                                <label for="github" class="font-semibold">
                                    Github <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Github" id="github" name="github" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="whatsapp grid lg:gap-2">
                                <label for="whatsapp" class="font-semibold">
                                    Whatsapp <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Whatsapp" id="whatsapp" name="whatsapp" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="skype grid lg:gap-2">
                                <label for="skype" class="font-semibold">
                                    Skype <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Skype" id="skype" name="skype" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="mobile grid lg:gap-2">
                                <label for="mobile" class="font-semibold">
                                    Mobile <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Mobile" id="mobile" name="mobile" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>
                        </div>
                        <div class="button flex items-end lg:justify-end pb-10">
                            <button type="submit" id="editSocial" name="editSocial" class="text-xs lg:text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
                    <div>
                        <ul id="displaySocial" class="list-disc text-sm w-full grid lg:grid-cols-3 grid-cols-2 gap-10">
                            <!-- <li class="text-[#3792a5] font-bold w-full">
                                HTML / CSS - 
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-square-arrow-up-right text-blue-600"></i>
                                </span>
                            </li> -->
        
                            <!-- <li class="font-bold w-full">
                                PHP -
                                <span class="pl-3 space-x-2">
                                    <i class="fa-solid fa-square-arrow-up-right text-blue-600"></i>
                                </span>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
        
    </div>

  </body>
  <script src="jquery/social.jquery.js"></script>
  </html>