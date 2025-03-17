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
            <h1 class="text-xl font-semibold mb-3">Edit Project</h1>
            <div class="Project bg-white py-5 rounded-lg">
        
                <div class="project-container">
                    <form id="addProjectForm" class="rounded-md grid gap-3 text-sm lg:text-lg">
                        <div class="grid lg:grid-cols-3 space-y-4 lg:space-y-0 lg:gap-5">
                            <div class="stack grid lg:gap-2">
                                <label for="stack" class="font-semibold">
                                    Stack <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Stack" id="stack" name="stack" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="title grid lg:gap-2">
                                <label for="title" class="font-semibold">
                                    Title <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Title" id="title" name="title" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="liveLink grid lg:gap-2">
                                <label for="liveLink" class="font-semibold">
                                   Live Link <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Live Link" id="liveLink" name="liveLink" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="githubLink grid lg:gap-2">
                                <label for="githubLink" class="font-semibold">
                                    Github Link <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="text" placeholder="Github Link" id="githubLink" name="githubLink" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75" spellcheck="false" >
                            </div>

                            <div class="date grid lg:gap-2">
                                <label for="date" class="font-semibold">
                                    Date <span class="text-red-600 text-sm">*</span>
                                </label>
                                <input type="date" id="date" name="date" class="border border-gray-300 p-2 text-sm rounded-md outline-none focus:border-green-900 transition-all duration-300 delay-75">
                            </div>
                        </div>
                        <div class="button flex items-end lg:justify-end pb-5">
                            <button type="submit" id="addProject" name="addProject" class="text-xs lg:text-sm bg-black text-white py-2 px-4 rounded-md hover:bg-opacity-90">
                                Add
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </section>


    </div>

  </body>
  <script src="jquery/project.jquery.js"></script>
  </html>