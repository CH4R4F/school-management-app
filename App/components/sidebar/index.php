<?php require_once '../head/index.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo head("sidebar") ?>
</head>

<body class="flex">
    <div>
    <i id="barsopen" class="fa-solid fa-bars text-3xl m-1 cursor-pointer md:hidden "></i>
    </div>

    <!-- mobile -->
<aside id="hamburger"  class="block w-screen h-screen fixed top-0 -left-full  transition-all dark:bg-lightGrey bg-gray-50 duration-400 md:hidden"  aria-label="Sidebar">
        <div  class=" overflow-hidden relative py-4 px-3 h-screen rounded  flex flex-col justify-between">
            <div>
            <i id="barsclose" class="fa-solid fa-bars text-3xl cursor-pointer m-1 "></i>
                <ul class="  mt-11 space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2   text-xl font-normal rounded-lg active">
                            <i class="fa-solid fa-table-columns hover:rotate-[360deg]"></i>
                            <span  class="  ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2   text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-users hover:rotate-[360deg]"></i>
                            <span  class="  flex-1 ml-3 specTextClrspace-nowrap">Students</span>
                            <!-- <span  class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2   text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-user-graduate hover:rotate-[360deg]"></i>
                            <span  class="  flex-1 ml-3 specTextClrspace-nowrap">Teachers</span>
                            <!-- <span  class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2   text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-house-chimney-window hover:rotate-[360deg]"></i>
                            <span class="  flex-1 ml-3 specTextClrspace-nowrap">Parents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2   text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-gear hover:rotate-[360deg]"></i>
                            <span  class="  flex-1 ml-3 specTextClrspace-nowrap">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>

            <ul class=" ">
                <li>
                    <a href="#" class=" flex items-center p-2  text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200  whitespace-nowrap">
                        <i class="fa-solid fa-arrow-right-from-bracket hover:rotate-[360deg]"></i>
                        <span  class="  flex-1 ml-3 specTextClrspace-nowrap">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- desktop -->


    <aside id="sidebar" class="hidden md:block w-16 transition-all duration-400 "  aria-label="Sidebar">
        <div class="overflow-hidden relative py-4 px-3 h-screen bg-gray-50  rounded dark:bg-lightGrey flex flex-col justify-between">
            <div>
                <a href="">
                    <img href="#" src="../../assets/images/logo.png" class="h-9 m-0 mr-4 sm:h-12" alt="Logo YouCode  ">
                    <!-- <span  class="self-center text-xl font-semibold specTextClrspace-nowrap dark:text-specTextClr">Flowbite</span> -->
                </a>
                <ul class=" mt-11 space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2  text-xl font-normal rounded-lg active">
                            <i class="fa-solid fa-table-columns hover:rotate-[360deg]"></i>
                            <span  class=" invisible ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2  text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-users hover:rotate-[360deg]"></i>
                            <span  class=" invisible flex-1 ml-3 specTextClrspace-nowrap">Students</span>
                            <!-- <span  class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2  text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-user-graduate hover:rotate-[360deg]"></i>
                            <span  class=" invisible flex-1 ml-3 specTextClrspace-nowrap">Teachers</span>
                            <!-- <span  class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span> -->
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2  text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-house-chimney-window hover:rotate-[360deg]"></i>
                            <span class=" invisible flex-1 ml-3 specTextClrspace-nowrap">Parents</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2  text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200 ">
                            <i class="fa-solid fa-gear hover:rotate-[360deg]"></i>
                            <span  class=" invisible flex-1 ml-3 specTextClrspace-nowrap">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>

            <ul>
                <li>
                    <a href="#" class=" flex items-center p-2  text-xl font-normal text-gray-900 rounded-lg dark:text-specTextClr hover:bg-gray-200  whitespace-nowrap">
                        <i class="fa-solid fa-arrow-right-from-bracket hover:rotate-[360deg]"></i>
                        <span  class=" invisible flex-1 ml-3 specTextClrspace-nowrap">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    
<script src="../../assets/js/index.js"></script>
</body>

</html>