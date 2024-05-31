@extends('site.layout')

@section('conteudo')

<main class="gap-8" >
<section id="sessao-1" class="py-12 bg-yellow-500">
    <form action="{{ route('site.contato') }}" method="post" class="max-w-sm mx-auto">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-white">Nome</label>
                <input type="text" id="name" name="nome"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Digite seu Nome:" required />
            </div>

            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 text-white">Telefone</label>
                <input type="text" id="phone" name="telefone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Digite seu telefone:" required />
            </div>

            <div class="mb-5">
                <label for="address"
                    class="block mb-2 text-sm font-medium text-gray-900 text-white">Endereço</label>
                <input type="text" id="address" name="endereco" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Digite seu endereço:" required />
            </div>

            <div class="mb-5">
                <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 text-white">Selecione
                    seu Gênero:</label>
                <select id="gender" name="genero"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Prefiro não dizer</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>

            <button type="submit"
                class="text-white bg-yellow-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar</button>
        </form>
    </section>
</main>

<footer class="bg-yellow-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <span class="block text-sm font-bold text-yellow-500 sm:text-center dark:text-black">© 2024 | Todos os Direitos
            Reservados</span>
    </div>
</footer>


@endsection