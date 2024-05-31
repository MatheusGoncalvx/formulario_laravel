@extends('site.layout')

@section('conteudo')


<main>
    <section id="sessao-1" class="sessao-1 bg-yellow-500">
        

<div class="grid grid-cols-2 gap-2">
        <div class="flex items-center justify-center text-justify">
            <div>
            <p class="text-black font-bold text-5xl">Olá! Meu nome é</p>
            <p class="text-white font-bold text-5xl">Matheus Gonçalves</p>
            <p class="text-black font-bold text-sm mt-2">Tenho 17 anos e sou estudante de Análise e Desenvolvimento de Sitemas na Etec Zona Leste</p>
        </div>
        </div>
        <div>
            <img class="h-full max-w-full rounded-lg" src="{{ asset('img/matheus.jpg') }}" alt="">
        </div>
    </div>

        

    </section>
</main>


<footer class="bg-white">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <span class="block text-sm text-black sm:text-center dark:text-black">© 2024 | Todos os Direitos
            Reservados</span>
    </div>
</footer>
@endsection
</body>

</html>