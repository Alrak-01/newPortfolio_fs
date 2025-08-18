<?php
require_once("../../autoload/autoload.php");
$result = $social->selectAdmin();
$row = $result->fetch(PDO::FETCH_ASSOC);
$skill->instance = "WHERE `type` = ?";
?>

<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alrak's portfolio</title>
    <script type="text/javascript" src="jquery/theme.js"></script>
  </head>
  <body>
    <div class="dark:border-stone-800 bg-zinc-200 dark:bg-black dark:text-white">
       <!-- LINKED HEADER STARTS -->
       <?php include("header.php");?>
       <!-- LINKED HEADER ENDS -->

        <div class="lg:px-48 px-2 lg:pt-16 pt-10 flex items-start lg:flex-row flex-col-reverse w-full z-0">
            <div class="text lg:w-1/2 space-y-10">
                <!-- <h1 class="lg:text-5xl text-4xl text-gray-900 dark:text-white font-medium">Hey, I'm Tania</h1> -->
                <h1 class="lg:text-5xl text-4xl text-gray-900 dark:text-white font-medium">Hey, I'm Alrak</h1>
                <h3 class="lg:text-xl text-lg text-gray-800 dark:text-gray-100">
                    <!-- I'm a fullstack developer who builds and maintains open-source projects, with a focus on clean, efficient code. -->
                     I build full-stack web applications with a focus on performance, usability, and long-term scalability.
                </h3>
                <h3 class="lg:text-xl text-lg text-gray-800 dark:text-gray-100">
                    On this site, you’ll find my <a href="project.php" class="text-[#3792a5] font-semibold">projects</a>, a list of my core <a href="#skill" class="text-[#3792a5] font-semibold">skills</a>, and a brief <a href="about.php" class="text-[#3792a5] font-semibold">about me</a> section that highlights my work as a fullstack developer.
                </h3>
            </div>
            <div class="logo lg:w-1/2 hidden lg:block">
                <img src="../images/img1.png" alt="Alrak Logo" class="object-cover w-60 lg:w-full">
            </div>
        </div>

        <!-- SKILLS SECTION STARTS -->
        <div id="skill" class="lg:px-48 mx-2 pt-16 whitespace-nowrap">
            <h1 class="lg:text-4xl text-3xl text-gray-900 dark:text-white font-medium lg:pb-10 pb-5">
                Tech Stack - Experience
            </h1>
            <ol class="list-disc space-y-5">
            <!-- DISPLAY LANGUAGES STARTS -->
                <li class="font-medium text-lg">Languages</li>
                <div>
                     <ul class="lg:grid grid-cols-4 gap-5 w-full pl-6 space-y-5 lg:space-y-0 capitalize">
                        <?php 
                        $skillResult = $skill->selectSkill(1);
                        if ($skillResult == 0) {
                            echo "No language added yet.";
                        }
                        else{
                            while ($rows = $skillResult->fetch(PDO::FETCH_ASSOC)) {
                                echo '
                                    <li class="list-disc text-[#3792a5] font-bold">'.$rows['name'].' <span>'.$rows['experience'].' years</span></li>
                                ';
                            }
                        }
                        ?>
                        <!-- <li class="text-[#3792a5] font-bold">HTML / CSS - <span>3 years</span></li>-->
                    </ul>
                </div>
            <!-- DISPLAY LANGUAGES ENDS -->

            <!-- DISPLAY FRAMEWORKS STARTS -->
                <li class="font-medium text-lg">Frameworks</li>
                <div>
                    <ul class="lg:grid grid-cols-4 gap-5 w-full pl-6 space-y-5 lg:space-y-0 capitalize">

                        <?php 
                        $skillResult = $skill->selectSkill(2);
                        if ($skillResult == 0) {
                            echo "No language added yet.";
                        }
                        else{
                            while ($rows = $skillResult->fetch(PDO::FETCH_ASSOC)) {
                                echo '
                                    <li class="list-disc text-[#3792a5] font-bold">'.$rows['name'].' <span>'.$rows['experience'].' years</span></li>
                                ';
                            }
                        }
                        ?>
                    </ul>
                </div>
            <!-- DISPLAY FRAMEWORKS ENDS -->

            <!-- DISPLAY OTHERS STARTS -->
                <li class="font-medium text-lg">Others</li>
                <div>
                     <ul class="lg:grid grid-cols-4 gap-5 w-full pl-6 space-y-5 lg:space-y-0 capitalize">
                        <?php 
                        $skillResult = $skill->selectSkill(3);
                        if ($skillResult == 0) {
                            echo "No language added yet.";
                        }
                        else{
                            while ($rows = $skillResult->fetch(PDO::FETCH_ASSOC)) {
                                echo '
                                    <li class="list-disc text-[#3792a5] font-bold">'.$rows['name'].' <span>'.$rows['experience'].' years</span></li>
                                ';
                            }
                        }
                        ?>
                    </ul>
                </div>
            <!-- DISPLAY OTHERS ENDS -->

            </ol>
        </div>
        <!-- SKILLS SECTION ENDS -->

        <!-- PROJECT STARTS -->
        <div class="lg:px-48 mx-2 pt-16">
            <div class="flex items-center justify-between w-full pb-10">
                <h1 class="lg:text-4xl text-3xl font-medium">Projects</h1>
                <a href="project.php" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-3 py-2 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                    All Projects
                </a>
            </div>
            
            <div class="cards grid lg:grid-cols-3 gap-5">
                <!-- Project Card Start -->
                <?php
                $projectResult = $project->selectProject(6);
                if ($projectResult == 0) {
                    echo "No projects yet";
                }
                else{
                    while($rows = $projectResult->fetch(PDO::FETCH_ASSOC)){
                      echo '
                        <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                    <p class="text-sm text-gray-800 dark:text-[#3792a5]">'.$rows['date'].'</p>
                    <span href="#" class="block font-medium text-xl">'.$rows['stack'].'</span>
                    <h3 class="text-md text-gray-800 dark:text-gray-100">'.$rows['title'].'</h3>
                    <div class="button flex items-center gap-3 pt-1">
                        <a href="'.$rows['live_link'].'" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            Live Preview
                        </a>
                        <a href="'.$rows['github_link'].'" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                            GitHub
                        </a>
                    </div>
                </div>
                      ';  
                    }
                }
                ?>
                <!-- <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
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
                </div>-->
                
            </div>
        </div>
        <!-- PROJECT ENDS -->

        <!-- LINKED FOOTER STARTS -->
       <?php include("footer.php");?>
        <!-- LINKED FOOTER ENDS -->
    </div>
</body>
</html>
