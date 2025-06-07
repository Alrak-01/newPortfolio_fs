<header class="lg:w-[85vw] lg:ml-[15vw] flex  items-center justify-between px-5 font-medium py-3 text-sm lg:text-md border-b border-stone-900">
            <span id="menu-bar" class=" block lg:hidden">
                    <i class="fa-solid fa-bars text-lg"></i>
                </span>
            <div class="right">
                <h1 class="font-bold text-base">Admin Console</h1>
            </div>
                
            <div class="left lg:flex items-center hidden gap-3">
                <span class="flex items-center gap-2 text-sm">
                    <i class="fa-solid fa-user"></i>
                    <h3><?=ucfirst($_SESSION['lastname'])." ". ucfirst($_SESSION['firstname'])?></h3>
                </span>
                <i class="fa-regular fa-moon lg:text-base dark:bg-white px-2 hover:opacity-50 delay-100 duration-100 transition-opacity"></i>
            </div>

            
        </header>
        <!-- <div id="menu-display" class="px-5 py-5 font-semibold shadow-lg hidden">
                <ul class="grid gap-3">
                    <li>
                        <a href="index.php" class=""> 
                        <i class="fa-solid fa-table-cells pr-5"></i>
                        <span>Dashboard</span>
                    </a>
                    </li>
                    <li>
                        <a href="project.php" class="">
                        <i class="fa-solid fa-list-check pr-5"></i>
                        <span>Project</span>
                    </a>
                    </li>
                    <li>
                        <a href="skill.php" class="">
                        <i class="fa-solid fa-lightbulb pr-5"></i> 
                        <span>Skill</span>
                    </a>                    </li>
                    <li>
                         <a href="about.php" class="">
                        <i class="fa-solid fa-address-card pr-5"></i>
                        <span>About</span>
                    </a>
                    </li>
                    <li>
                        <a href="social.php" class="">
                        <i class="fa-solid fa-comment pr-5"></i> 
                        <span>My socials</span>
                    </a>
                    </li>
                    <li>
                        <a href="#" class="">
                        <i class="fa-solid fa-person-walking-luggage pr-5"></i> 
                        <span>Logout</span>
                    </a>
                    </li>

                </ul>
            </div>

 -->

 <div id="menu-display" class="hidden px-6 py-6 font-semibold shadow-lg bg-white rounded-lg w-64">
  <ul class="space-y-4">
    <li>
      <a href="index.php" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors duration-200">
        <i class="fa-solid fa-table-cells mr-4 text-lg"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="project.php" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors duration-200">
        <i class="fa-solid fa-list-check mr-4 text-lg"></i>
        <span>Project</span>
      </a>
    </li>
    <li>
      <a href="skill.php" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors duration-200">
        <i class="fa-solid fa-lightbulb mr-4 text-lg"></i>
        <span>Skill</span>
      </a>
    </li>
    <li>
      <a href="about.php" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors duration-200">
        <i class="fa-solid fa-address-card mr-4 text-lg"></i>
        <span>About</span>
      </a>
    </li>
    <li>
      <a href="social.php" class="flex items-center text-gray-700 hover:text-blue-600 transition-colors duration-200">
        <i class="fa-solid fa-comment mr-4 text-lg"></i>
        <span>My Socials</span>
      </a>
    </li>
    <li>
      <a href="#" class="flex items-center text-red-600 hover:text-red-800 transition-colors duration-200">
        <i class="fa-solid fa-person-walking-luggage mr-4 text-lg"></i>
        <span>Logout</span>
      </a>
    </li>
  </ul>
</div>
