<div class="justify-center my-8">
    <div class="max-w-7xl w-full md:mx-auto">
        <div class="flex justify-center my-8">
            <h1 class="text-2xl h1-color font-bold pb-3 me-10 font-roboto-serif">Donation for Social Movement Events with EcoHUb
            </h1>
        </div>
    </div>
    <div class="max-w-7xl h-auto items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto borde justify-center">
        <form wire:submit.prevent="addData">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium warna-text">Nama Lengkap</label>
                <input wire:model="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Lengkap" >
            </div>
            <div class="mb-6">
                <label for="nohp" class="block mb-2 text-sm font-medium warna-text">No handphone</label>
                <input wire:model="nohp" type="text" id="nohp" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="No hp" >
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium warna-text">Email</label>
                <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Email" >
            </div>
            <div class="mb-6">
                <label for="nominal" class="block mb-2 text-sm font-medium warna-text">Nominal</label>
                <input wire:model="nominal" type="numeric" id="nominal" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nominal" >
            </div>
            <div class="mb-6">
                <label for="desc" class="block mb-2 text-sm font-medium warna-text">Description</label>
                <input wire:model="desc" type="text" id="desc" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Description Donations" >
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium warna-text">password</label>
                <input wire:model="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="password" >
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
</div>


