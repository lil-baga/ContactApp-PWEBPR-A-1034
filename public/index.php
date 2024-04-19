<?php
require_once 'C:\laragon\www\ContactApp-PWEBPR-A-1034\app\Models\Database.php';
// var_dump($arr);
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/src/output.css">
  <title>Contact App</title>
</head>

<body>
  <div class="flex flex-row">
    <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 h-[calc(100vh-2rem)] w-full max-w-[20rem] p-4 shadow-xl shadow-red-gray-900/5">
      <div class="mb-2 p-4 flex">
        <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-gray-900">Contact App.</h5>
      </div>
      <nav class="flex flex-col gap-1 min-w-[240px] p-2 font-sans text-base font-normal text-gray-700">
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-red-50 hover:bg-opacity-80 focus:bg-red-50 focus:bg-opacity-80 active:bg-red-50 active:bg-opacity-80 hover:text-red-900 focus:text-red-900 active:text-red-900 outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M6.912 3a3 3 0 00-2.868 2.118l-2.411 7.838a3 3 0 00-.133.882V18a3 3 0 003 3h15a3 3 0 003-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0017.088 3H6.912zm13.823 9.75l-2.213-7.191A1.5 1.5 0 0017.088 4.5H6.912a1.5 1.5 0 00-1.434 1.059L3.265 12.75H6.11a3 3 0 012.684 1.658l.256.513a1.5 1.5 0 001.342.829h3.218a1.5 1.5 0 001.342-.83l.256-.512a3 3 0 012.684-1.658h2.844z" clip-rule="evenodd"></path>
            </svg>
          </div>Contact Lists <div class="grid place-items-center ml-auto justify-self-end">
            <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none bg-red-500/20 text-red-900 py-1 px-2 text-xs rounded-full" style="opacity: 1;">
              <span class="">14</span>
            </div>
          </div>
        </div>
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-red-50 hover:bg-opacity-80 focus:bg-red-50 focus:bg-opacity-80 active:bg-red-50 active:bg-opacity-80 hover:text-red-900 focus:text-red-900 active:text-red-900 outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd"></path>
            </svg>
          </div>Profile
        </div>
        <div role="button" tabindex="0" class="flex items-center w-full p-3 rounded-lg text-start leading-tight transition-all hover:bg-red-50 hover:bg-opacity-80 focus:bg-red-50 focus:bg-opacity-80 active:bg-red-50 active:bg-opacity-80 hover:text-red-900 focus:text-red-900 active:text-red-900 outline-none">
          <div class="grid place-items-center mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5">
              <path fill-rule="evenodd" d="M12 2.25a.75.75 0 01.75.75v9a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM6.166 5.106a.75.75 0 010 1.06 8.25 8.25 0 1011.668 0 .75.75 0 111.06-1.06c3.808 3.807 3.808 9.98 0 13.788-3.807 3.808-9.98 3.808-13.788 0-3.808-3.807-3.808-9.98 0-13.788a.75.75 0 011.06 0z" clip-rule="evenodd"></path>
            </svg>
          </div><a href="login.php">Log Out</a>
        </div>
      </nav>
    </div>

    <div class="w-screen px-0 flex flex-col">
      <table class="w-full min-w-max table-auto text-left items-center justify-center">
        <thead>
          <tr>
            <th class="cursor-pointer border-y border-red-gray-100 bg-red-gray-50/50 p-3 transition-colors hover:bg-red-gray-50">
              <p class="antialiased font-sans text-sm text-red-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">No.</p>
            </th>
            <th class="cursor-pointer border-y border-red-gray-100 bg-red-gray-50/50 p-3 transition-colors hover:bg-red-gray-50">
              <p class="antialiased font-sans text-sm text-red-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Id</p>
            </th>
            <th class="cursor-pointer border-y border-red-gray-100 bg-red-gray-50/50 p-3 transition-colors hover:bg-red-gray-50">
              <p class="antialiased font-sans text-sm text-red-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Phone Number</p>
            </th>
            <th class="cursor-pointer border-y border-red-gray-100 bg-red-gray-50/50 p-3 transition-colors hover:bg-red-gray-50">
              <p class="antialiased font-sans text-sm text-red-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Owner</p>
            </th>
            <th class="cursor-pointer border-y border-red-gray-100 bg-red-gray-50/50 p-3 transition-colors hover:bg-red-gray-50">
              <p class="antialiased font-sans text-sm text-red-gray-900 flex items-center justify-around gap-2 font-normal leading-none opacity-70">Actions</p>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($idx = 0; $idx < count($arr['id']); $idx++) {

          ?>
            <tr>
              <td class="p-3 border-b border-red-gray-50">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-red-gray-900 font-normal"><?= $idx ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-red-gray-50">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-red-gray-900 font-normal"><?= $arr['id'][$idx] ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-red-gray-50">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-red-gray-900 font-normal"><?= $arr['phone_number'][$idx] ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-red-gray-50">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-red-gray-900 font-normal"><?= $arr['owner'][$idx] ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-red-gray-50">
                <div class="flex items-center justify-center gap-4">
                  <button class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium py-1 px-2 rounded">
                    Edit
                  </button>
                  <button class="bg-red-500 hover:bg-red-700 text-white text-sm font-medium py-1 px-2 rounded">
                    Delete
                  </button>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
      <div class="flex items-center justify-center">
        <button class="bg-green-500 flex mt-6 hover:bg-green-700 text-white text-sm font-medium py-1 px-2 rounded">
          Add Contact
        </button>
      </div>
    </div>
  </div>
</body>