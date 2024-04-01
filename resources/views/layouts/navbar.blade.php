<nav class="bg-white  dark:bg-gray-900 border-gold-bottom">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{asset('images/logo.png')}}" class="h-8" alt="FaithSync" />
        <span class="self-center text-2xl  whitespace-nowrap dark:text-custom-black text-custom-black">Faith<span class="self-center text-2xl whitespace-nowrap dark:text-custom-gold text-custom-gold">Sync</span></span>

    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:justify-center md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 flex-grow">
            <li>
                <a href="#" class="block py-2 px-3 text-custom-golf rounded md:bg-transparent md:text-custom-gold md:p-0 dark:text-custom-gold md:dark:text-custom-gold text-custom-gold" aria-current="page">Início</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-custom-gold md:p-0 dark:text-white md:dark:hover:text-custom-gold dark:hover:bg-gray-700 dark:hover:text-custom-gold md:dark:hover:bg-transparent">Sobre</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-custom-gold md:p-0 dark:text-white md:dark:hover:text-custom-gold dark:hover:bg-gray-700 dark:hover:text-custom-gold md:dark:hover:bg-transparent">Doar</a>
            </li>
            <div class="flex-grow"></div> <!-- Div vazia para ocupar o espaço restante -->
            <li class="mx-4 px-6 border-gold-left">
                <a href="#" class="flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-custom-gold md:p-0 dark:text-white md:dark:hover:text-custom-gold dark:hover:bg-gray-700 dark:hover:text-custom-gold md:dark:hover:bg-transparent">
                    <img src="{{ asset('images/user-icon.png') }}" class="w-4 h-4 mr-2" alt="Ícone de usuário">
                    <span>Minha Conta</span>
                </a>
            </li>
        </ul>
    </div>
  </div>
</nav>
