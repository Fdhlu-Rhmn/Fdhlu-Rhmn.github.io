<div class="justify-center my-8">
    <div class="max-w-7xl w-full md:mx-auto">
        <div class="flex justify-center my-8">
            <h1 class="text-2xl h1-color font-bold pb-3 me-10 font-roboto-serif">Recycle 2 earn Token and with innovative blockchain-based solutions. 
            </h1>
        </div>
    </div>
    <div class="max-w-7xl h-auto items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border bg-color justify-center">
        <div class="py-5 px-10">
            <button class="text-white bg-color-button items-center flex px-6 py-2 rounded-full space-x-4">
                <x-phosphor-brain-bold class="w-16 h-16" style="width: 3rem; height: 3rem; font-weight:bold;"/>               
                <span class="text-4xl font-roboto-serif mr-5 py-2">Ai Result</span>
            </button>
        </div>
        <div class="py-5 px-10">
            <form wire:submit="save">
                <div class="flex space-x-4">
                    <div class="text-white bg-color-button items-center flex px-6 py-2 rounded-md space-x-4 w-1/2" style="width: 24rem;">
                        <x-bi-images class="w-16 h-16 py-2" style="width: 3rem; height: 3rem;"/>
                        <input type="file" wire:model="photos" multiple class="">
                        @error('photos.*') 
                        <span class="error">{{ $message }}</span> 
                        @enderror
                    </div>
                    <button class="text-white bg-color-button items-center flex px-6 py-2 rounded-md space-x-4 w-1/2" style="width: 24rem;">
                        <a href=""  class="text-xl">Send The Barcode</a>
                    </button> 
                </div>
            </form>
            
        </div>
        <div class="flex justify-between py-4 px-10 space-x-6">
            <img src="{{ asset('assets/barcode.jpg') }}" alt="barcode" style="width: 32rem; height: 32rem;">
            <div class="bg-color-button items-center px-6 py-6 rounded-md">
                <ul>
                    <li class="flex text-white py-4 px-4 font-bold space-x-4 items-center">
                        <x-phosphor-brain-bold class="w-16 h-16" style="width: 3rem; height: 3rem; font-weight:bold;"/>
                        <div class="flex flex-col">               
                            <span class="text-white text-2xl font-bold font-roboto-serif">Ai Result Recomendations </span>
                            <span class="text-white text-2xl font-bold font-roboto-serif">for Processing</span>
                            <span class="text-white text-2xl font-bold font-roboto-serif"> Recycle Materials</span>
                        </div>
                    </li>
                    <li class="flex text-white py-4 px-4 font-bold space-x-4 items-center">
                        <div class="flex flex-col">               
                            <span id="text" class="text-white text-l font-bold font-roboto-serif break-words">                                
                                {{$results}}
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

