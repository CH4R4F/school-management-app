<?php
require "../head/index.php"
?>

<!DOCTYPE html>
<html lang="en">

    <?= head("form")?>

<body>
    <div class="flex">
        <div class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto border-r">
            <h2 class="text-3xl font-semibold text-center text-blue-800">Logo</h2>


            <div class="flex flex-col justify-between mt-6">
                <aside>
                    <ul>
                        <li>
                            <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-md " href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>

                                <span class="mx-4 font-medium">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a class="flex items-center px-4 py-2 mt-5 text-gray-600 rounded-md hover:bg-gray-200"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>

                                <span class="mx-4 font-medium">Settings</span>
                            </a>
                        </li>
                    </ul>

                   

                </aside>

            </div>
        </div>
        <div class="w-full h-full p-4 m-8 p-20 m-20 overflow-y-auto">
            <h1 class="text-3xl text-specTextClr font-bold ">
                Add Student
            </h1>

            <!-- component -->


            <div class="flex flex-col md:flex-row font-Inter ">
                <div class="w-full mx-2 flex-1 ">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Full Name</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Email</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
            </div>


            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Address</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Date Of Birth </div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <label class="block mt-4">
                        <span class="text-subTextClr">Gender</span>
                        <select class="form-select mt-1 block w-full  border-2 border-specTextClr h-12">
                            <option>feminin</option>
                            <option> masculin</option>
                        </select>
                    </label>
                </div>

                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <label class="block mt-4">
                        <span class="text-subTextClr">Class</span>
                        <select class="form-select mt-1 block w-full  border-2 border-specTextClr h-12">
                            <option>Class 1</option>
                            <option>Class 2</option>
                            <option>Class 3</option>
                        </select>
                    </label>
                </div>


            </div>
            <button
                class=" absolute  right-20  my-6 p-1 w3-button w3-right  bg-primary hover:bg-primary text-white font-bold py-2 px-8 border border-primary rounded p-20 m-20">
                Add
            </button>

            
              <!-- form 3 -->

            <h1 class="text-3xl text-specTextClr font-bold ">
               Add Teacher
            </h1>

            <div class="flex flex-col md:flex-row  ">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> First Name</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Last Name</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
            </div>


            <div class="flex flex-col md:flex-row">
            <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <label class="block mt-4">
                        <span class="text-subTextClr">Subject</span>
                        <select class="form-select mt-1 block w-full  border-2 border-specTextClr h-12">
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </label>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <label class="block mt-4">
                        <span class="text-subTextClr">Class</span>
                        <select class="form-select mt-1 block w-full  border-2 border-specTextClr h-12">
                            <option> Class 1</option>
                            <option> Class 2</option>
                            <option> Class 3</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <label class="block mt-5">
                        <span class="text-subTextClr">Gender</span>
                        <select class="form-select mt-1 block w-full  border-2 border-specTextClr h-12">
                            <option>masculin</option>
                            <option>feminin</option>
                        </select>
                    </label>
                </div>

                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Phone </div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
            </div>
<h1 class="text-3xl text-specTextClr font-bold ">
            Add Parent
            </h1>

            <div class="flex flex-col md:flex-row  ">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> First Name</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Last Name </div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
            </div>


            <div class="flex flex-col md:flex-row  ">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Phone</div>
                    <div class="bg-white my-2 p-1 flex  ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> Jub</div>
                    <div class="bg-white my-2 p-1 flex ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row  ">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <div class="font-bold h-6 mt-3 text-subTextClr text-xs leading-8 "> City</div>
                    <div class="bg-white my-2 p-1 flex  ">
                        <input placeholder=""
                            class="p-1 px-2 appearance-none outline-none w-full text-gray-800  border-2 border-specTextClr h-12">
                    </div>
                </div>
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                <div class="flex flex-col md:flex-row">
                <div class="w-full mx-2 flex-1 svelte-1l8159u">
                    <label class="block mt-5">
                        <span class="text-subTextClr">Student</span>
                        <select class="form-select mt-1 block w-full  border-2 border-specTextClr h-12">
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </label>
                </div>
            </div>


            </div>
            <!-- <button
                class=" absolute  right-14  my-6 p-1 w3-button w3-right  bg-primary hover:bg-primary text-white font-bold py-2 px-8 border border-purple-700 rounded">
                Add
            </button> -->

            </div>
           
            
            
        </div>


    </div>

    </div>

    </div>

</body>

</html>