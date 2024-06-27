<div class="justify-center my-8">
    <div class="max-w-7xl w-full md:mx-auto">
        <div class="flex justify-center my-8">
            <h1 class="text-2xl h1-color font-bold pb-3 me-10 font-roboto-serif">Recycle 2 earn Token and with innovative blockchain-based solutions. 
            </h1>
        </div>
    </div>

    <div class="space-y-6">
        <div class=" max-w-7xl rounded-lg overflow-hidden shadow-lg px-5 mb-10 md:mx-auto border bg-color justify-center">
            <div class="flex flex-col">
                <div class="flex py-2 px-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="32px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#299c64" d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>                    
                    <span class="text-l font-roboto-serif mr-5 py-2 text-left px-2 h1-color">Hello Mr M. Fadhlu Rahman Faisal</span>
                </div>
                <div class="flex py-2 px-10 justify-between">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#299c64" d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"/></svg>                        
                        <span class="text-l font-roboto-serif mr-5 py-2 text-left px-2 h1-color">E-Wallet</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-l font-bold font-roboto-serif mr-5 py-2 text-left h1-color">0</span>
                        <img src="{{ asset('assets/ecohub-nobg.png') }}" alt="Logo" class="h-10 w-12">
                    </div>
                </div>
                <div class="flex py-2 px-10 justify-between">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="32px"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#299c64" d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"/></svg>                        
                        <span class="text-l font-roboto-serif mr-5 py-2 text-left px-2  h1-color">Eco Wallet</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-l font-bold font-roboto-serif mr-5 py-2 text-left h1-color">0</span>
                        <img src="{{ asset('assets/ecohub-nobg.png') }}" alt="Logo" class="h-10 w-12">
                    </div>
                </div>


            </div>
            
        </div>

        <div class="flex justify-center my-8">
            <h1 class="text-2xl h1-color font-bold pb-3 me-10 font-roboto-serif">Upload Your Image Barcode to Claim the Token
            </h1>
        </div>
 
        <div class="max-w-7xl h-auto items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border bg-color justify-center">
            
            {{-- <div class="py-5 px-10 flex  justify-center">
                <button class="text-white bg-color-button items-center flex px-6 py-2 rounded-md space-x-4">
                    <x-bi-qr-code-scan class="w-16 h-16 ml-3 py-2" style="width: 4rem; height: 4rem; "/>
                    <span class="text-2xl font-roboto-serif mr-5 py-2">Scan Barcode</span>
                </button>
            </div> --}}
            <div class="py-2 px-10">
                {{-- <button class="text-white bg-color-button items-center flex px-6 py-2 rounded-md space-x-4">
                    <span class="text-2xl font-roboto-serif mr-5 py-2">Upload Barcode</span>
                </button> --}}
    
                <form wire:submit="save">
                    <div class="flex space-x-4">
                        <div class="text-white bg-color-button items-center flex px-6 py-2 rounded-md space-x-4 w-1/2" style="width: 24rem;">
                            <x-bi-images class="w-16 h-16 py-2" style="width: 3rem; height: 3rem;"/>
                            <label for="file-upload" class="text-white font-bold py-2 rounded cursor-pointer font-roboto-serif">
                                Upload Barcode
                            </label>
                            <input id="file-upload" type="file" wire:model="photos" multiple class="hidden">
                            @error('photos.*') 
                            <span class="error">{{ $message }}</span> 
                            @enderror
                        </div>
                        <button class="text-white bg-color-button items-center flex px-2 py-2 rounded-md space-x-4 width: 10rem;">
                            <a href="/token-pages"  class="text-l font-roboto-serif px-2">Send The Barcode</a>
                        </button>
                            
                    </div>
                    
                    {{-- <div class="flex space-x-4">
                        <div class="text-white bg-color-button items-center flex px-6 py-2 rounded-md space-x-4 w-1/2" style="width: 24rem;">
                            <x-bi-images class="w-16 h-16 py-2" style="width: 3rem; height: 3rem;"/>
                            <input type="file" wire:model="photos" multiple class="">
                            @error('photos.*') 
                            <span class="error">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div> --}}
                </form>
                
    
                {{-- <form wire:submit="save" class="flex flex-col">
                    <x-bi-images class="w-16 h-16 py-2" style="width: 3rem; height: 3rem;"/>
    
                    <input type="file" wire:model="photos" multiple class="">
                    <label for="file" class="cursor-pointer font-roboto-serif  text-white p-2 border-none rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                        Choose Files
                    </label>             
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                 
                         
                </form> --}}
                
            </div>
            
            <div class="flex justify-between py-2 px-10">
                <img src="{{ asset('assets/barcode.jpg') }}" alt="barcode" style="width: 36rem; height: 36rem;">
                <div class="flex bg-color-button items-center px-6 py-4npm rounded-md">
                    <ul>
                        <li class="flex text-white py-2 px-4 font-bold space-x-4 items-center">
                            <x-bi-recycle class="w-16 h-16" style="width: 3rem; height: 3rem; font-weight:bold;"/>
                            <div class="flex flex-col">
                                <span class="text-white text-2xl font-bold font-roboto-serif">Scan the recyclable </span>
                                <span class="text-white text-2xl font-bold font-roboto-serif">products</span>
                            </div>
                        </li>
                        <li class="flex text-white py-6 px-4 font-bold space-x-4 items-center">
                            <x-bi-qr-code-scan class="w-16 h-16" style="width: 3rem; height: 3rem; font-weight:bold;"/>
                            <div class="flex flex-col">
                                <span class="text-white text-xl font-roboto-serif">Upload your barcode</span>
                                <span class="text-white text-xl font-bold font-roboto-serif">image</span>
                            </div>
                        </li>
                        <li class="flex text-white py-6 px-4 font-bold space-x-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="3rem">
                                <path fill="#ffffff" d="M184 0c30.9 0 56 25.1 56 56V456c0 30.9-25.1 56-56 56c-28.9 0-52.7-21.9-55.7-50.1c-5.2 1.4-10.7 2.1-16.3 2.1c-35.3 0-64-28.7-64-64c0-7.4 1.3-14.6 3.6-21.2C21.4 367.4 0 338.2 0 304c0-31.9 18.7-59.5 45.8-72.3C37.1 220.8 32 207 32 192c0-30.7 21.6-56.3 50.4-62.6C80.8 123.9 80 118 80 112c0-29.9 20.6-55.1 48.3-62.1C131.3 21.9 155.1 0 184 0zM328 0c28.9 0 52.6 21.9 55.7 49.9c27.8 7 48.3 32.1 48.3 62.1c0 6-.8 11.9-2.4 17.4c28.8 6.2 50.4 31.9 50.4 62.6c0 15-5.1 28.8-13.8 39.7C493.3 244.5 512 272.1 512 304c0 34.2-21.4 63.4-51.6 74.8c2.3 6.6 3.6 13.8 3.6 21.2c0 35.3-28.7 64-64 64c-5.6 0-11.1-.7-16.3-2.1c-3 28.2-26.8 50.1-55.7 50.1c-30.9 0-56-25.1-56-56V56c0-30.9 25.1-56 56-56z"/>
                            </svg>                        
                            <div class="flex flex-col">
                                <span class="text-white text-xl font-roboto-serif">AI will help you </span>
                                <span class="text-white text-xl font-roboto-serif">Provide Recycled Materials</span>
                                <span class="flex flex-col text-white text-xl font-roboto-serif">   </span>
                            </div>
                        </li>
                        <li class="flex text-white py-6 px-4 font-bold space-x-4 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="3rem">
                                <path fill="#ffffff" d="M312 24V34.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8V232c0 13.3-10.7 24-24 24s-24-10.7-24-24V220.6c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2V24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z"/>
                            </svg>
                            <div class="flex flex-col">
                                <span class="text-white text-xl font-roboto-serif">Get the tokens</span>
                                <span class="text-white text-xl font-roboto-serif">according to the </span>
                                <span class="flex flex-col text-white text-xl font-roboto-serif">product you uploaded</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>
</div>

{{-- <script>
    // Configure Webcam.js
    Webcam.set({
        width: 640,
        height: 480,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    Webcam.attach('#my_camera');

    // Take a snapshot and display it
    function takeSnapshot() {
        Webcam.snap(function(data_uri) {
            // Display the result
            document.getElementById('my_result').innerHTML = 
                '<img src="' + data_uri + '"/>';
        });
    }
</script> --}}
