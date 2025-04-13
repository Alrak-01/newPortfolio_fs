<!doctype html>
<html lang="en" class="">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../src/output.css">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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
            <h1 class="text-xl font-semibold mb-3">Edit Skills</h1>
            <div class="skill bg-white py-5 rounded-lg">
        
                <div class="skill-container">
                    <form id="editSkillForm" class="rounded-md grid gap-3 text-sm lg:text-lg">
                        <div class="grid lg:grid-cols-3 space-y-4 lg:space-y-0 lg:gap-5">
                            <div class="category grid lg:gap-2">
                                <label for="category" class="font-semibold">
                                    Name <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Name" id="name" name="name" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" required value="#">
                            </div>
                            <div class="category grid gap-2">
                                <label for="category" class="font-semibold">
                                    Experience <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="number" id="experience" name="experience" placeholder="Years" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" value="#">
                            </div>
                            <div class="category grid gap-2">
                                <label for="category" class="font-semibold">
                                    Type <span class="text-red-600 text-sm">*</span>
                                </label>
                                <select name="type" id="type" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                                    <!-- IMPORTED FROM JQUERY -->
                                </select>
                            </div>
                        </div>
        
                        <div class="button flex items-end lg:justify-end pb-5">
                            <button type="submit" id="editSkill" name="editSkill" class="text-xs lg:text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </section>


    </div>

  </body>
  <script src="jquery/skill.jquery.js"></script>
  </html>