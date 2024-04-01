@extends('layouts.app')


@section('content')
<section class="h-screen flex flex-row w-full items-center justify-center">
    <div class="w-1/2 p-4 h-screen flex flex-row justify-center items-center bg-asset ">
        <img src="{{asset('images/logo.png') }}" class="ml-12 "/>
        <p class="text-6xl mx-2">
            <span class="text-custom-black">Faith</span><span class="text-custom-gold">Sync</span>
        </p>
    </div>

    <div class="w-1/2 flex flex-col items-center justify-center">
        <div class="container-black rounded-xxl px-12 py-12">
            <p class="text-4xl mx-2 mb-4">
                <span class="text-custom-gold">Bem vindo</span><span class="text-custom-black">(a) de volta</span>
            </p>
            <div class="flex flex-row items-center justify-center mt-4">
                <img src="{{asset('images/google.png') }}" class="mr-4"/>
                <img src="{{asset('images/facebook.png') }}"  class="mr-4"/>
                <img src="{{asset('images/linkedin.png') }}" class="mr-4"/>
            </div>
            <form class="mt-4" method="post" action="{{route('login')}}">
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="block text-custom-black text-sm mb-2" for="usuario">Usuário</label>
                    <input name="email" required class="appearance-none border w-full py-4 px-3 text-custom-black leading-tight focus:outline-none focus:shadow-outline" id="usuario" type="text" placeholder="Nome de Usuário">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="block text-custom-black text-sm mb-2" for="password">Senha</label>
                    <input name="password" required class="appearance-none border w-full py-4 px-3 text-custom-black leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Senha">
                </div>
                <div class="flex justify-between items-center">
                    <a href="#" class="text-custom-black">Esqueceu a senha?</a>
                    <a href="/register" class="text-custom-gold">Cadastre-se</a>
                </div>
                <center><button class="mx-auto bg-transparent border border-custom-gold text-black py-2 px-12 rounded-xl mt-4" type="submit">ENTRAR</button></center>
            </form>

        </div>
    </div>


</section>

@if ($errors->any())
<!-- Modal -->
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Panel -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-red-100 px-4 py-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6 text-red-400 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <p class="text-sm font-medium text-red-800" id="modal-title">
                                Erro!
                            </p>
                        </div>

                        <div class="ml-3 h-7 flex items-center">
                            <button type="button" class=" modal-close bg-red-100 rounded-md text-red-400 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500" @click="open = false">
                                <span class="sr-only">Fechar</span>
                                <!-- Heroicon name: outline/x -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>


                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                                Erro!
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                <ul class="mt-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }} <br></li>
                                    @endforeach
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.querySelector('.fixed');
            const closeButton = document.querySelector('.modal-close');
            const overlay = document.querySelector('.bg-gray-500');

            closeButton.addEventListener('click', closeModal);
            overlay.addEventListener('click', closeModal);

            function closeModal() {
                modal.classList.add('hidden');
            }
        });

</script>
@endif

@endsection