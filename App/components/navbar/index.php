<?php require_once '../head/index.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo head("navbar") ?>
</head>

<body>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            
            <div class="flex md:order-2">
               
                <div class="hidden relative md:block">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex items-center space-x-3">
                    <input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-lightGrey rounded-3xl border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500  " placeholder="Search...">
                    <i class="fa-solid fa-bell text-2xl text-specTextClr"></i>
                    </div>
                    
                </div>
                
            </div>
            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
                <div class="relative mt-3 md:hidden">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex">
                    <input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                    <i class="fa-solid fa-bell"></i>
                    </div>
                    
                </div>
               
            </div>
        </div>
    </nav>
</body>

</html>