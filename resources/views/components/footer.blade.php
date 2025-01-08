<footer class="bg-cover bg-no-repeat bg-center text-white"
    style="background-image: url(https://cdn.pixabay.com/photo/2016/03/31/18/03/christmas-1294090_1280.png)">
    <div class="bg-black bg-opacity-50 p-6 relative">
        <div class="absolute inset-x-0 top-0 text-white-500">
            <marquee class="py-1 font-bold text-md" behavior="scroll" direction="left">
                🎅 Ho Ho Ho! Merry Christmas! 🎄 | Wishing You a Joyful Holiday Season! 🎁 | Happy New Year 2025! ✨
            </marquee>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mt-10">
            <div>
                <h2 class="text-lg font-bold text-white-200 mb-2">Group 1</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach ([['name' => 'Manuel', 'link' => 'https://github.com/Manusitox360'], 
                                ['name' => 'Antonio', 'link' => 'https://github.com/AntonioGuillen123'], 
                                ['name' => 'Alvaro', 'link' => 'https://github.com/Kalixto73a'], 
                                ['name' => 'Miguel', 'link' => 'https://github.com/Mangel111111111'], 
                                ['name' => 'Santino', 'link' => 'https://github.com/SantiVigna']] as $person)
                        <a href="{{ $person['link'] }}" target="_blank" class="block transform hover:scale-110 transition-transform duration-500">
                            <p class="font-bold text-sm hover:text-green-500">{{ $person['name'] }}</p>
                            <img src="/image/github.svg" alt="{{ $person['name'] }}" 
                                class="w-8 h-8 mx-auto rounded-full hover:ring-2 hover:ring-green-500">
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="hidden md:block">
                <div class="w-full flex justify-center items-center">
                    <p class="text-2xl font-christmas text-center  text-white-400 mx-4">Merry Christmas</p>                </div>
                <p class="text-sm text-gray-300 mt-2 italic">Celebrating Joy & Togetherness</p>
            </div>

            <div>
                <h2 class="text-lg font-bold text-white-300 mb-2">Group 2</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    @foreach ([['name' => 'Issam', 'link' => 'https://github.com/issamchlf'], 
                                ['name' => 'Fran', 'link' => 'https://github.com/Crudo7'], 
                                ['name' => 'Matias', 'link' => 'https://github.com/Matias-Stadler'], 
                                ['name' => 'Jonathan', 'link' => 'https://github.com/Leonkeneddy86'], 
                                ['name' => 'Jeni', 'link' => 'https://github.com/soyJenifer'], 
                                ['name' => 'Rene', 'link' => 'https://github.com/mrene42']] as $person)
                        <a href="{{ $person['link'] }}" target="_blank" class="block transform hover:scale-110 transition-transform duration-500">
                            <p class="font-bold text-sm hover:text-red-600">{{ $person['name'] }}</p>
                            <img src="/image/github.svg" alt="{{ $person['name'] }}" 
                                class="w-8 h-8 mx-auto rounded-full hover:ring-2 hover:ring-red-600">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="mt-6">
            <hr class="border-gray-700">
            <div class="text-center text-sm text-gray-300 mt-2">
                <p>© 2024
                    <a href="https://github.com/issamchlf/Santa-claus-factory/tree/main"
                        class="hover:underline">Santa-claus-factory™</a>. All Rights Reserved.
                </p>
            </div>
        </div>

    </div>
</footer>