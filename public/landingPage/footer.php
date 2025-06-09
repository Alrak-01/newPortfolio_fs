 <footer id="contact" class="contact px-10 lg:px-48 lg:py-5 py-10 ">
            <ul class="flex items-center justify-center gap-5 text-xl text-black dark:text-white">
                <!-- LinkedIn -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10 bg-opacity-30">
                    <a href="<?= $row['linkedln']?>" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
                <!-- GitHub -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10 bg-opacity-30">
                    <a href="<?= $row['github']?>" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
                <!-- WhatsApp -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10 bg-opacity-30">
                    <a href="<?= $row['whatsapp']?>" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
                <!-- Skype -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10 bg-opacity-30">
                    <a href="<?= $row['skype']?>" target="_blank">
                        <i class="fa-brands fa-skype"></i>
                    </a>
                </li>
                <!-- Email -->
                <li class="bg-white px-2 py-1 rounded-lg shadow-md hover:opacity-50 delay-100 duration-300 transition-opacity dark:bg-opacity-10 bg-opacity-30">
                    <a href="<?= $row['email']?>" target="_blank">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </footer>
