<header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="header-left" class="flex items-center">
        <div class="text-gray-800 font-semibold">
            <span class="text-blue-500 text-xl">&lt;DEV&gt;</span> Insights
        </div>
        <div class="top-menu ml-10">
            <ul class="flex space-x-4">
                <li>
                    <a class="flex space-x-2 items-center hover:text-blue-900 text-sm text-blue-500"
                       href="http://127.0.0.1:8000">
                        Inicio
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-blue-500 text-sm text-gray-500"
                       href="http://127.0.0.1:8000/blog">
                        Blog
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-blue-500 text-sm text-gray-500"
                       href="http://127.0.0.1:8000/blog">
                        Sobre Nós
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-blue-500 text-sm text-gray-500"
                       href="http://127.0.0.1:8000/blog">
                        Contato
                    </a>
                </li>

                <li>
                    <a class="flex space-x-2 items-center hover:text-blue-500 text-sm text-gray-500"
                       href="http://127.0.0.1:8000/blog">
                        Termos de Uso
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div id="header-right" class="flex items-center md:space-x-6">
        @guest
            @include('layouts.partials.header-right-guest')
        @endguest
        @auth()
            @include('layouts.partials.header-right-auth')
        @endauth
    </div>
</header>
