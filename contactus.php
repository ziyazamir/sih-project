<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="./assets/js/contact.js"></script>
</head>

<body>

    <div class="bg-gradient-to-b from-orange-500 to-orange-400  h-96 w-full">
        <div class="md:px-20 px-4 py-8 ">
            <div class="flex items-center justify-evenly">
                <div>
                    <img src="./assets/img/Dhavni Logo.svg" class="img-responsive w-36 " alt="logo" />
                </div>
                <div class="hidden lg:flex items-center  lg:-mr-[220px] ">
                    <a href="./index.html">
                        <p tabindex="0" role="button" class="text-base focus:outline-none focus:ring-1 p-2 focus:ring-offset-1 focus:ring-white hover:text-gray-300 font-medium mr-10 leading-4 cursor-pointer text-white">
                            Home</p>
                        <a href="./about.html">
                            <p tabindex="0" role="button" class="text-base focus:outline-none focus:ring-1 p-2 focus:ring-offset-1 focus:ring-white hover:text-gray-300 font-medium mr-10 leading-4 text-white">
                                About</p>
                            <a href="./contactus.php">
                                <p tabindex="0" role="button" class="text-base focus:outline-none focus:ring-1 p-2 focus:ring-offset-1 focus:ring-white hover:text-gray-300 font-medium mr-10 leading-4 text-white">
                                    Contact</p>
                                <a href="./contactus.php">
                                    <p tabindex="0" role="button" class="text-base focus:outline-none focus:ring-1 p-2 focus:ring-offset-1 focus:ring-white hover:text-gray-300 font-medium mr-10 leading-4 text-white">
                                        Use cases</p>
                                    <a href=""><button class="text-base font-medium leading-none text-indigo-700 py-4 px-5 bg-white rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white hover:bg-gray-300">Test
                                            out Software</button>
                </div>
                <div class="lg:hidden text-white">
                    <i class="fa fa-bars" id="open" aria-hidden="true" onclick="MenuHandler(true)"></i>

                    <div id="close" class="hidden close-m-menu" onclick="MenuHandler(false)">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/contact1-svg3.svg" alt="close" />

                    </div>
                </div>
            </div>
            <nav class="lg:hidden relative z-40">
                <div class="w-full">
                    <div class="visible flex items-center">
                        <ul id="list" class="hidden p-2 bg-gray-400 absolute rounded top-0 left-0 right-0 shadow mt-6">
                            <li class="flex cursor-pointer text-gray-600 dark:text-gray-200 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-orange-700 focus:text-orange-700 focus:outline-none">
                                <a href="./index.html">
                                    <span class="ml-2 font-bold">Home</span>
                                </a>
                            </li>
                            <li class="flex flex-col cursor-pointer text-gray-600 dark:text-gray-200 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                <a href="./about.html">
                                    <span class="ml-2 font-bold">About</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <form action="" method="post">
            <div class="w-full flex items-center justify-center my-12 rounded-xl ">

                <div class="absolute top-40 bg-white dark:bg-black shadow rounded-xl py-12 lg:px-28 px-8" data-aos="zoom-out">
                    <p class="md:text-3xl text-xl font-bold leading-7 text-center text-gray-700 dark:text-white">Let’s
                        chat and get a
                        quote!</p>
                    <div class="md:flex items-center mt-12">
                        <div class="md:w-72 flex flex-col">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Name</label>
                            <input tabindex="0" arial-label="Please input name" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" name="name" placeholder="Please input  name" />
                        </div>
                        <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Email
                                Address</label>
                            <input tabindex="0" arial-label="Please input email address" type="text" name="email" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input email address" />
                        </div>
                    </div>
                    <div class="md:flex items-center mt-8">
                        <div class="md:w-72 flex flex-col">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Company
                                name</label>
                            <input tabindex="0" role="input" arial-label="Please input company name" name="company" type="text" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input company name" />
                        </div>
                        <!-- <div class="md:w-72 flex flex-col md:ml-6 md:mt-0 mt-4">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Country</label>
                            <input tabindex="0" arial-label="Please input country name" type="name" class="text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100" placeholder="Please input country name" />
                        </div> -->
                    </div>
                    <div>
                        <div class="w-full flex flex-col mt-8">
                            <label class="text-base font-semibold leading-none text-gray-800 dark:text-white">Message</label>
                            <textarea tabindex="0" aria-label="leave a message" role="textbox" class="h-36 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-indigo-700 mt-4 bg-gray-100 border rounded border-gray-200 placeholder-gray-100 resize-none"></textarea>
                        </div>
                    </div>
                    <p class="text-xs leading-3 text-gray-600 dark:text-gray-200 mt-4">By clicking submit you agree to
                        our terms of
                        service, privacy policy and how we use data as stated</p>
                    <div class="flex items-center justify-center w-full">
                        <button class="mt-9 text-base font-semibold leading-none text-white py-4 px-10 bg-indigo-700 rounded hover:bg-indigo-600 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none" type="submit" name="send">SUBMIT</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>