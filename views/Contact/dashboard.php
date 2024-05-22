<body>
  <div class="w-screen px-0 flex flex-col">
    <table class="w-full min-w-max table-auto text-left items-center justify-center">
      <thead>
        <tr>
          <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
            <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">No.</p>
          </th>
          <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
            <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Id</p>
          </th>
          <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
            <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Phone Number</p>
          </th>
          <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
            <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Owner</p>
          </th>
          <th class="cursor-pointer bg-[#8a4647] p-3 transition-colors hover:bg-[#aa4647]">
            <p class="antialiased font-sans text-sm text-white flex items-center justify-around gap-2 font-normal leading-none">Actions</p>
          </th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($contacts)) : ?>
          <tr class="flex justify-center items-center">
            <td colspan="5">No contacts found.</td>
          </tr>
        <?php else : ?>
          <?php foreach ($contacts as $index => $contact) : ?>
            <tr>
              <td class="p-3 border-b border-gray-200">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?php echo $index + 1; ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-gray-200">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?php echo $contact['id']; ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-gray-200">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?php echo $contact['phone_number']; ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-gray-200">
                <div class="flex items-center justify-around">
                  <p class="block antialiased font-sans text-sm leading-normal text-gray-900 font-normal"><?php echo $contact['owner']; ?></p>
                </div>
              </td>
              <td class="p-3 border-b border-gray-200">
                <div class="flex flex-row items-center justify-center">
                  <div class="flex flex-row items-center justify-center gap-4">
                    <a href="<?= urlpath('edit/?id=' . $contact['id']) ?>" class="bg-blue-500 flex hover:bg-blue-700 text-white text-sm font-medium py-2 px-2 rounded">
                      Edit
                    </a>
                    <button onclick="showDelButton(<?php echo $contact['id']; ?>)" class="bg-red-500 hover:bg-red-700 text-white text-sm font-medium py-2 px-2 rounded">
                      Delete
                    </button>
                  </div>
                  <div id="delbutton_<?php echo $contact['id']; ?>" class="fixed top-0 left-0 items-center justify-center hidden w-screen h-screen transition-opacity duration-500 bg-black opacity-0 bg-opacity-40">
                    <div class="bg-white rounded shadow-md p-8 w-[25%] gap-5 flex-col overflow-hidden">
                      <div class="flex gap-3">
                        <div class="flex items-center justify-center h-10 text-red-600 bg-red-100 rounded-full min-w-10">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                          </svg>
                        </div>
                        <div class="flex-grow">
                          <h1 class="mb-2 text-lg font-bold text-gray-700">Menghapus Data</h1>
                          <p class="text-gray-600">Apakah anda ingin menghapus data ?</p>
                        </div>
                      </div>
                      <div class="flex justify-end mt-3 ">
                        <button onclick="hideDelButton(<?php echo $contact['id']; ?>)" class="px-4 py-2 mr-3 text-black bg-white rounded cursor-pointer hover:bg-gray-300">Batal</button>
                        <form class="flex" id="deleteForm_<?php echo $contact['id']; ?>" action="<?= urlpath('delete'); ?>" method="POST">
                          <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                          <button type="submit" class="px-4 py-2 font-semibold text-white bg-red-600 rounded hover:bg-red-700">Hapus</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
    <form action="<?= urlpath('add') ?>" method="GET">
      <div class="flex items-center justify-center">
        <button class="bg-green-500 flex mt-6 hover:bg-green-700 text-white text-sm font-medium py-2 px-2 rounded">
          Add Contact
        </button>
      </div>
    </form>
  </div>
  </div>

  <script>
    function showDelButton(id) {
      console.log("ID received:", id);
      let delbutton = document.getElementById('delbutton_' + id)


      delbutton.classList.remove('hidden')
      delbutton.classList.add('flex')
      setTimeout(() => {
        delbutton.classList.add('opacity-100')
      }, 20);

    }


    function hideDelButton(id) {
      let delbutton = document.getElementById('delbutton_' + id);
      delbutton.classList.add('opacity-0')
      setTimeout(() => {
        delbutton.classList.add('hidden')
        delbutton.classList.remove('flex')
      }, 500);
    }
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>