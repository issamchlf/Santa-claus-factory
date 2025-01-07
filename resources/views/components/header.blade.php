<header class="bg-cover bg-top bg-no-repeat bg-center"
    style="background-image: url(https://media.istockphoto.com/id/613792084/es/foto/elegante-%C3%A1rbol-de-navidad-con-estrellas.jpg?s=1024x1024&w=is&k=20&c=zyWE5NCfidguc0fj29b2gruwpaweKGKEgT1JR9c3aV0=)">
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
                    <p class="font-bold">Elves</p>
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
