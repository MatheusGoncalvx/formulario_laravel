@extends('site.layout')

@section('conteudo')


<main class="gap-8">
    <section id="sessao-1" class="sessao-1 py-12 bg-yellow-500">
        <div class="grid grid-cols-2 gap-2">
            <div class="flex items-center justify-center text-justify">
                <div>
                    <p class="text-orange-800 font-bold text-5xl">Olá! Meu nome é</p>
                    <p class="text-white font-bold text-5xl">Matheus Gonçalves</p>
                    <p class="text-orange-800 font-bold text-sm mt-2">Tenho 17 anos e sou estudante de Análise e
                        Desenvolvimento de Sitemas na Etec Zona Leste</p>
                </div>
            </div>
            <div class="max-w-md p-4">
                <img class="h-full max-w-full rounded-full border-stone-950" src="{{ asset('img/matheus.jpg') }}"
                    alt="">
            </div>
        </div>
    </section>
</main>

<footer class="bg-yellow-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <span class="block text-sm font-bold text-yellow-500 sm:text-center dark:text-black">© 2024 | Todos os Direitos
            Reservados</span>
    </div>
</footer>
@endsection
</body>

</html>