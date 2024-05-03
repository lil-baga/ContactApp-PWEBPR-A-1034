<?php
require_once __DIR__ . '/../model/contact.php';
if (isset($_POST['submit'])) {
    $id = ''; //Tidak diisi karena Auto_Increment.
    $phone_number = $_POST['phone_number'];
    $owner = $_POST['owner'];
    $users_id = ''; //Tidak diisi karena Nanti digunakan untuk view masing-masing user.
    $result = Contact::create($id, $phone_number, $owner, $users_id);
    echo $result;
  }
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Contact App</title>
</head>

<body>
    <div class="flex flex-row">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-900 h-[100vh] w-full max-w-[20rem] p-4 shadow-xl shadow-gray-900/5">
            <div class="mb-2 p-4 flex flex-col items-center justify-center">
                <img src="public/contact.png" class="w-42" alt="Logo">
                <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">Welcome, User!</h5>
            </div>
            <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-900">
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
                        </svg>
                    </div><a href="<?= urlpath('home') ?>">Contact Lists</a><div class="grid place-items-center ml-auto justify-self-end">
                    </div>
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>Profile
                </div>
                <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-[#8a4647] focus:bg-[#8a4647] active:bg-[#8a4647] hover:text-white focus:text-white active:text-white outline-none">
                    <div class="grid place-items-center mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div><a href="<?= urlpath('home') ?>">Log Out</a>
                </div>
            </nav>
        </div>

        <div class="flex w-full flex-col px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Add Contact</h2>
            </div>
            <form class="space-y-6" action="<?= urlpath('add') ?>" method="POST">
                <div>
                    <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                    <div class="mt-2">
                        <input id="phone_number" name="phone_number" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#8a4647] focus:ring-2 focus:ring-inset focus:ring-[#aa4647] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="owner" class="block text-sm font-medium leading-6 text-gray-900">Owner</label>
                    <div class="mt-2">
                        <input id="owner" name="owner" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-[#8a4647] focus:ring-2 focus:ring-inset focus:ring-[#aa4647] sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" name="submit" class="flex w-full justify-center rounded-md bg-[#8a4647] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#aa4647] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#8a4647]">Add Contact</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>