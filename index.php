<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./drawable/style.css">
    <title>Portfolio</title>
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span
                    class="self-center  font-serif tracking-wider text-blue-500 text-2xl font-semibold whitespace-nowrap dark:text-white">MARKJOEL</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#about"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">About Me</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projects</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact
                            Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="max-w-screen-2xl grid lg:grid-cols-2 gap-6 mx-auto p-4 mt-20">
        <div class="w-full max-w-lg mx-auto lg:mt-[10em]">
            <p class="text-2xl font-mono tracking-wide mt-5 text-left">Full Stack Web Developer</p>
            <p class="text-4xl font-serif tracking-widest mt-5 text-left lg:text-5xl">Hello! I am</p>
            <p id="name" class="text-4xl font-serif tracking-wider text-blue-500 text-left lg:text-5xl"></p>
            <p class="mt-5 text-lg font-mono text-left">I am a website developer with expertise in building intuitive,
                user-centric web applications using Laravel and Livewire.</p>
        </div>
        <div class="w-full max-w-2xl flex items-center justify-center sm:mt-20 lg:mt-0">
            <img src="./drawable/profile.png" alt="Profile"
                class="h-[20em] w-[20em] object-cover rounded-full lg:h-[35em] lg:w-[35em]">
        </div>
    </div>
    <div id="about" class="max-w-screen-2xl mx-auto mt-10 lg:mt-[21em]">
        <div class="flex items-center justify-center">
            <h1 class="text-center text-5xl text-blue-500 font-mono tracking-widest">About Me</h1>
        </div>
        <div class="space-y-[1.5em] mt-[5em]">
            <div class="space-y-5">
                <p class="text-4xl font-mono tracking-tight text-blue-500">Full Name</p>
                <p class="text-2xl font-mono font-bold tracking-tight">Mark Joel Dela Cruz</p>
                <hr class="border-t-2 border-blue-500">
            </div>
            <div class="space-y-5">
                <p class="text-4xl font-mono tracking-tight text-blue-500">Current Address</p>
                <p class="text-2xl font-mono font-bold tracking-tight">Poblacion 1, Peñaranda Nueva Ecija</p>
                <hr class="border-t-2 border-blue-500">
            </div>
            <div class="space-y-5">
                <p class="text-4xl font-mono tracking-tight text-blue-500">Academic Background</p>
                <p class="text-2xl font-mono font-bold tracking-tight">Bachelor of Science in Information Technology</p>
                <p class="text-xl font-mono font-light tracking-tight">Nueva Ecija University of Science and Technology (Aug 2021 - Present)</p>
                <hr class="border-t-2 border-blue-500">
            </div>
            <div class="space-y-5">
                <p class="text-4xl font-mono tracking-tight text-blue-500">Professional Background</p>
                <p class="text-2xl font-mono font-bold tracking-tight">City Collage of Technology and Trade Inc.</p>
                <p class="text-xl font-mono font-light tracking-tight">Computer Systems Servicing NC II (Apr 15, 2024 - May 25, 2024)</p>
                <p class="text-2xl font-mono font-bold tracking-tight">City Collage of Technology and Trade Inc.</p>
                <p class="text-xl font-mono font-light tracking-tight">ELECTRONIC PRODUCTS ASSEMBLY AND SERVICING NC II (Jul 8, 2024 - Aug 10, 2024)</p>
                <hr class="border-t-2 border-blue-500">
            </div>
            <div class="space-y-5">
                <p class="text-4xl font-mono tracking-tight text-blue-500">Work Projects</p>
                <hr class="border-t-2 border-blue-500">
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>

</html>