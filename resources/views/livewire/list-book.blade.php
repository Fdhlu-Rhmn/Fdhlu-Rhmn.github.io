<div class="flex justify-center my-8">
    <div
        class="max-w-7xl w-full items-center rounded overflow-hidden shadow-lg px-5 py-5 md:mx-auto border justify-center">
        <div class="mb-4 flex justify-between">
            <div class="space-x-2">
                <button wire:click="setFilter('all')"
                    class="px-4 py-2 {{ $filter == 'all' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">All
                    Books</button>
                <button wire:click="setFilter('new')"
                    class="px-4 py-2 {{ $filter == 'new' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">New
                    Books</button>
                <button wire:click="setFilter('upcoming')"
                    class="px-4 py-2 {{ $filter == 'upcoming' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">Upcoming</button>
                <button wire:click="setFilter('oldbook')"
                    class="px-4 py-2 {{ $filter == 'oldbook' ? 'bg-gray-400' : 'bg-gray-200' }} text-gray-700 rounded hover:bg-gray-300 focus:outline-none">Old
                    Books</button>
            </div>
            <div class="flex space-x-2">
                <input type="text" wire:model.defer="search" wire:keydown.enter="loadBooks"
                    placeholder="Search books..." class="px-4 py-2 border rounded focus:outline-none" />
                <button wire:click="loadBooks" class="px-4 py-2 bg-blue-500 text-white rounded">Search</button>
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($books as $book)
                <a href="books/{{ $book->id }}" class="hover:bg-gray-300">
                    <div class="border-2 border-solid py-4 rounded-md shadow-lg w-full bg-white font-roboto-serif">                            <div class="px-2">
                            <div class="text-xs font-bold border-b-2 px-2 border-color-green pb-2 me-10">
                                {{ $book->title }}
                            </div>
                        </div>
                        

                        <div class="flex flex-col py-3">
                            <div class="w-full h-32 bg-gray-200 overflow-hidden">
                                <img id=""
                                    src=""
                                    data-src="" alt="Book Cover"
                                    class="object-cover object-center w-full h-full">
                            </div>
                            <span class="mb-2 text-center text-s truncate"></span>
                            <span class="text-justify desc text-xs px-2 line-clamp-4 w-auto">1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley 
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
                                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions   </span>
                                
                            <div class="flex justify-between">
                                <div class="flex flex-col">
                                    <div class="flex  space-x-2 justify-start pr-2 mt-4 px-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="8px">
                                            <path fill="#000000" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/>
                                        </svg>
                                        <span class="font-semibold text-size">12 - Oktober - 2024</span>
                                    </div>
                                    <div class="flex  space-x-2 justify-start pr-2 mt-4 px-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  width="8px">
                                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                        </svg>
                                        <span class="font-semibold text-size">Web Admin</span>
                                    </div>
                                </div>
                                
                                <div class="flex items-end space-x-2 justify-end pr-2 mt-4">
                                    <span class="font-semibold text-xs warna-text">Donation</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="2rem" height="2rem">
                                        <path fill="#5faa6f" d="M312 24V34.5c6.4 1.2 12.6 2.7 18.2 4.2c12.8 3.4 20.4 16.6 17 29.4s-16.6 20.4-29.4 17c-10.9-2.9-21.1-4.9-30.2-5c-7.3-.1-14.7 1.7-19.4 4.4c-2.1 1.3-3.1 2.4-3.5 3c-.3 .5-.7 1.2-.7 2.8c0 .3 0 .5 0 .6c.2 .2 .9 1.2 3.3 2.6c5.8 3.5 14.4 6.2 27.4 10.1l.9 .3c11.1 3.3 25.9 7.8 37.9 15.3c13.7 8.6 26.1 22.9 26.4 44.9c.3 22.5-11.4 38.9-26.7 48.5c-6.7 4.1-13.9 7-21.3 8.8V232c0 13.3-10.7 24-24 24s-24-10.7-24-24V220.6c-9.5-2.3-18.2-5.3-25.6-7.8c-2.1-.7-4.1-1.4-6-2c-12.6-4.2-19.4-17.8-15.2-30.4s17.8-19.4 30.4-15.2c2.6 .9 5 1.7 7.3 2.5c13.6 4.6 23.4 7.9 33.9 8.3c8 .3 15.1-1.6 19.2-4.1c1.9-1.2 2.8-2.2 3.2-2.9c.4-.6 .9-1.8 .8-4.1l0-.2c0-1 0-2.1-4-4.6c-5.7-3.6-14.3-6.4-27.1-10.3l-1.9-.6c-10.8-3.2-25-7.5-36.4-14.4c-13.5-8.1-26.5-22-26.6-44.1c-.1-22.9 12.9-38.6 27.7-47.4c6.4-3.8 13.3-6.4 20.2-8.2V24c0-13.3 10.7-24 24-24s24 10.7 24 24zM568.2 336.3c13.1 17.8 9.3 42.8-8.5 55.9L433.1 485.5c-23.4 17.2-51.6 26.5-80.7 26.5H192 32c-17.7 0-32-14.3-32-32V416c0-17.7 14.3-32 32-32H68.8l44.9-36c22.7-18.2 50.9-28 80-28H272h16 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H288 272c-8.8 0-16 7.2-16 16s7.2 16 16 16H392.6l119.7-88.2c17.8-13.1 42.8-9.3 55.9 8.5zM193.6 384l0 0-.9 0c.3 0 .6 0 .9 0z"/>
                                    </svg>
                                </div>  
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
