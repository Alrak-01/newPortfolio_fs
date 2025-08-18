<?php
require_once("../../autoload/autoload.php");
?>
<!doctype html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/public/images/img.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../src/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Alrak's portfolio</title>
    <script type="text/javascript" src="jquery/theme.js"></script>
  </head>
  <body> 
    <div class="dark:border-stone-800 bg-zinc-200 dark:bg-black z-10 dark:text-white">
       <div class="min-h-screen">
        <?php include("header.php");?>
        <div class="lg:px-48 mx-2 lg:pt-16 pt-10">
            <div class="flex items-center justify-between w-full pb-10">
                <h1 class="lg:text-4xl text-3xl font-medium">Projects</h1>
            </div>
            <div class="cards grid lg:grid-cols-3 gap-5">
                <?php
                        $itemsPerPage = 6;
                        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                        $currentPage = max($currentPage, 1);
                        $offset = ($currentPage - 1) * $itemsPerPage;

                        $totalProjects = $project->getTotalProjects();
                        $totalPages = ceil($totalProjects / $itemsPerPage);

                        $projectResult = $project->selectProjectSpecial($itemsPerPage, $offset);

                        if ($projectResult == 0) {
                            echo "No project Found...";
                        } else {
                        while ($rows = $projectResult->fetch(PDO::FETCH_ASSOC)) {
                            echo '
                                  <div class="card h-auto w-full border border-zinc-400 p-5 rounded-lg space-y-2 shadow-lg bg-white dark:bg-neutral-950 dark:border-stone-800">
                                  <span href="#" class="block font-medium text-xl text-left">'.$rows['title'].'</span>
                        <p class="text-sm text-gray-800 dark:text-[#3792a5] text-center">'.$rows['date'].'</p>
                        <h3 class="text-md text-gray-800 dark:text-gray-100 font-medium text-right">'.$rows['stack'].'</h3>
                        <div class="button flex items-center gap-3 pt-1">
                            <a href="'.$rows['live_link'].'" target="_blank" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
                                Live Preview
                            </a>
                            <a href="'.$rows['github_link'].'" target="_blank" class="border dark:text-gray-100 border-gray-400 dark:border-stone-800 rounded-lg px-2 py-1 text-gray-800 delay-100 duration-100 transition-opacity hover:bg-black hover:bg-opacity-5">
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
        <div class="pagnation flex items-center justify-end pt-5 gap-3 font-semibold">
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?= $currentPage - 1 ?>" class="bg-gray-100 rounded-md py-1 px-3 dark:bg-neutral-950 hover:bg-gray-300 dark:hover:bg-gray-800 transition">
            <i class="fas fa-angle-left"></i>
        </a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?= $i ?>" class="py-1 px-3 rounded-md 
                <?= $i == $currentPage ? 'bg-blue-500 text-white dark:bg-blue-600' : 'bg-gray-100 dark:bg-neutral-950 hover:bg-gray-300 dark:hover:bg-gray-800' ?> transition">
                <?= $i ?>
            </a>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?= $currentPage + 1 ?>" class="bg-gray-100 rounded-md py-1 px-3 dark:bg-neutral-950 hover:bg-gray-300 dark:hover:bg-gray-800 transition">
                <i class="fas fa-angle-right"></i>
            </a>
        <?php endif; ?>
        </div>
            <?php include("footer.php");?>
       </div>
            
        </div>
</body>
</html>
