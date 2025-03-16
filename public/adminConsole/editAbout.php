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
                    <!-- <form action="includes/skill.inc.php?skill_id=3" method="post" id="editSkillForm" class="rounded-md grid gap-3 text-sm lg:text-lg"> -->

                    <form id="editAboutForm" class="rounded-md grid gap-3 text-sm lg:text-lg">
                        <div class="grid space-y-4 lg:space-y-0 lg:gap-5">
                            <div class="about grid lg:gap-2">
                                <label for="about" class="font-semibold">
                                    About <span class="text-red-600 text-sm">*</span>
                                </label>
                                <textarea name="text" id="text" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75 h-36" spellcheck="false" ></textarea>
                            </div>
                        </div>
        
                        <div class="button flex items-end lg:justify-end pb-5">
                            <button type="submit" id="editAbout" name="editAbout" class="text-xs lg:text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </section>


    </div>

  </body>
  <script src="jquery/about.jquery.js"></script>
  </html>