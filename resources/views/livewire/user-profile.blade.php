<div class="justify-center my-8">
    <div class="max-w-7xl w-full md:mx-auto">
        <div class="flex justify-center my-8">
            <h1 class="text-2xl h1-color font-bold pb-3 me-10 font-roboto-serif">User Profile Management Ecohub
            </h1>
        </div>
    </div>
    <div class="max-w-7xl h-auto items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto borde justify-center bg-color">
        <form wire:submit.prevent="addData">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium warna-text">Full Name</label>
                <input wire:model="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="M. Fadhlu Rahman Faisal" >
            </div>
            <div class="mb-6">
                <label for="nohp" class="block mb-2 text-sm font-medium warna-text">Phone Number</label>
                <input wire:model="nohp" type="text" id="nohp" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="0823-xxxx-xxxx" >
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium warna-text">Email</label>
                <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="admin@admin.com" >
            </div>
            <div class="mb-6">
                <label for="weight" class="block mb-2 text-sm font-medium warna-text">Weight</label>
                <input wire:model="weight" type="numeric" id="weight" class="bg-gray-50 border border-g ray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="2.25kg" >
            </div>
            <div class="mb-6">
                <label for="token" class="block mb-2 text-sm font-medium warna-text">Token</label>
                <input wire:model="token" type="numeric" id="token" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="2,25" >
            </div>
            <div class="mb-6">
                <label for="carbon" class="block mb-2 text-sm font-medium warna-text">Carbon</label>
                <input wire:model="carbon" type="numeric" id="carbon" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="225,5" >
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
</div>


