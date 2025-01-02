<footer class="bg-cover bg-no-repeat bg-center text-white"
    style="background-image: url(https://media.istockphoto.com/id/613792084/es/foto/elegante-%C3%A1rbol-de-navidad-con-estrellas.jpg?s=1024x1024&w=is&k=20&c=zyWE5NCfidguc0fj29b2gruwpaweKGKEgT1JR9c3aV0=)">
    <div class="bg-black bg-opacity-50 p-4">

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-6 gap-4 text-center">
            @foreach ([['name' => 'Issam', 'link' => 'https://github.com/issamchlf'], ['name' => 'Fran', 'link' => 'https://github.com/Crudo7'], ['name' => 'Matias', 'link' => 'https://github.com/Matias-Stadler'], ['name' => 'Jonathan', 'link' => 'https://github.com/Leonkeneddy86'], ['name' => 'Jeni', 'link' => 'https://github.com/soyJenifer'], ['name' => 'Rene', 'link' => 'https://github.com/mrene42']] as $person)
                <div class="transform hover:scale-110 transition-transform duration-500">
                    <a href="{{ $person['link'] }}">
                        <p class="font-bold text-base">{{ $person['name'] }}</p>
                        <img src="/image/github.svg" alt="{{ $person['name'] }}"
                            class="w-10 h-10 mx-auto mt-1 rounded-full">
                    </a>
                </div>
            @endforeach
        </div>

        <div>
            <hr class="my-3 border-gray-700">
        </div>

        <div class="text-center">
            <span class="block text-sm text-gray-300">© 2024
                <a href="https://github.com/issamchlf/Santa-claus-factory/tree/main"
                    class="hover:underline">Santa-claus-factory™</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
