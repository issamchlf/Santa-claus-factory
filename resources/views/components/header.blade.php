<header class="bg-cover bg-top bg-no-repeat bg-center"
    style="background-image: url(https://img.freepik.com/vector-gratis/borde-copo-nieve-realista_23-2149230658.jpg?t=st=1736339145~exp=1736342745~hmac=8b0a689992936436574afb8a916d4ba920cf902a7502a6feff26a38c1acb14a1&w=826)">
    <div>
        <div class="text-center text-5xl p-2 pb-4 font-christmas font-bold text-sky-50">
            Christmas Toy Factory
        </div>
        <div class="flex justify-center gap-8">
            <a href="{{ route('home') }}">
                <button type="button"
                    class="flex text-[1.3rem] gap-2 focus:outline-none text-white bg-amber-600 duration-1000 hover:bg-amber-700 hover:scale-110 transition-transform font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2">
                    <p>🏠</p>
                    <p class="font-bold">Home</p>
                </button>
            </a>
            <a href="{{ route('elve') }}">
                <button type="button"
                    class="flex text-[1.3rem] gap-2 focus:outline-none text-white bg-green-600 duration-1000 hover:bg-green-700 hover:scale-110 transition-transform font-medium rounded-lg text-sm px-[.8rem] py-2.5 me-2 mb-2">
                    <p>🧝🏻</p>
                    <p class="font-bold">Elfes</p>
                </button>
            </a>
            <a href="{{ route('santa') }}">
                <button type="button"
                    class="flex text-[1.3rem] gap-2 focus:outline-none text-white bg-red-600 duration-1000 hover:bg-red-700 hover:scale-110 transition-transform font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2">
                    <p>🎅🏻</p>
                    <p class="font-bold">Santa</p>
                </button>
            </a>

        </div>
    </div>
</header>
