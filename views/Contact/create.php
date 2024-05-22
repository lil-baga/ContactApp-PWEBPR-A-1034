<body>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>