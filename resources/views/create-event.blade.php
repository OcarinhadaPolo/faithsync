@extends('layouts.app')


@section('content')
<section class="h-screen flex flex-row w-full items-center justify-center">
    <div class="w-1/2 p-4 h-screen flex flex-row justify-center items-center bg-asset border-gold-right ">
        <img src="{{asset('images/logo.png') }}" class="ml-12 "/>
        <p class="text-6xl mx-2">
            <span class="text-custom-black">Faith</span><span class="text-custom-gold">Sync</span>
        </p>
    </div>

    <div class="w-1/2 flex flex-col items-center justify-center px-4 py-4">
 
        <h2 class="text-custom-black text-4xl mb-12">Vamos criar o seu evento</h2>
   
    <form class="w-full max-w-lg">
        <div class="flex flex-col mb-4">
            <label class="block text-custom-black text-sm  mb-2" for="nome-evento">Qual o nome do evento?</label>
            <input class="appearance-none border w-full py-4 px-3 text-custom-black leading-tight focus:outline-none focus:shadow-outline" id="nome-evento" type="text" placeholder="Nome do Evento">
        </div>
        <div class="flex flex-col mb-4">
            <label class="block text-custom-black text-sm  mb-2" for="expectativa-participantes">A expectativa de participantes</label>
            <select class="appearance-none border  w-full py-4 px-3 text-custom-black leading-tight focus:outline-none focus:shadow-outline" id="expectativa-participantes">
                <option value="">-- Selecione a opção --</option>
                <option value="0 a 5">0 - 5 Participantes</option>
                <option value="6 a 10">6 - 10 Participantes</option>
                <option value="11 a 25">11 - 25 Participantes</option>
                <option value="26 a 50">26 - 50 Participantes</option>
                <option value="51 a 50">51 -  100 Participantes</option>
                <option value="101+">101 ou mais Participantes</option>
            </select>
        </div>
        <div class="flex flex-col mb-4">
            <label class="block text-custom-black text-sm mb-2" for="tipo-evento">O tipo - Retiro/Encontro/Beneficente</label>
            <select class="appearance-none border  w-full py-4 px-3 text-custom-black leading-tight focus:outline-none focus:shadow-outline" id="tipo-evento">
                <option value="">-- Selecione a opção --</option>
                <option value="retiro">Retiro</option>
                <option value="beneficente">Beneficente</option>
                <option value="encontro">Encontro</option>
            </select>
        </div>
        <div class="mb-4 flex flex-col">
            <label class="block text-custom-black text-sm  mb-2">Seu evento é:</label>

            <div class="flex flex-row">
                <div class="flex">
                    <input type="radio" checked class="form-radio text-custom-black" name="formato-evento" value="presencial" id="formato-presencial">
                    <label for="formato-presencial" class="ml-2">Presencial</label>
                </div>
                <div class="flex ml-4">
                    <input type="radio" class="form-radio text-custom-black" name="formato-evento" value="hibrido" id="formato-hibrido">
                    <label for="formato-hibrido" class="ml-2">Híbrido</label>
                </div>
                <div class="flex ml-4">
                    <input type="radio" class="form-radio text-custom-black" name="formato-evento" value="online" id="formato-online">
                    <label for="formato-online" class="ml-2">Online</label>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-custom-gold text-white py-2 px-4 rounded-xl" type="submit">Criar Evento</button>
        </div>
    </form>
</div>

</section>

@endsection