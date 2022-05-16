<?php
require "../head/index.php"
?>

<!DOCTYPE html>
<html lang="en">

<?= head("form")?>

<body>

    <div class="w-full h-full p-4 m-8 p-20 m-20 overflow-y-auto">
        <h1 class="text-3xl text-specTextClr font-bold ">
            Add Student
        </h1>

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


        <!-- form  -->

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
                        <option>Math</option>
                        <option>Biology</option>
                        <option>English</option>
                        <option>Arts</option>
                        <option>Economic </option>
                        <option>History</option>
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