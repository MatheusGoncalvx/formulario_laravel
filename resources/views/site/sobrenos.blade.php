@extends('site.layout')

@section('conteudo')

<main class="gap-8">
    <section id="sessao-1" class="h-80 py-12 bg-yellow-500 flex flex-col justify-center">
        <h5 class="text-orange-800 font-extrabold text-3xl text-center mb-8">Sobre Mim</h5>
        <p class="text-lg font-normal text-white text-justify px-4 md:px-8">Meu nome é <strong>Matheus Gonçalves</strong>, estou cursando
            <strong>Desenvolvimento de Sistemas</strong> na Etec Zona Leste atualmente no terceiro ano do ensino médio, não possuo
            experiencia profissional, mas no curso estou <strong>aprendendo</strong> habilidades em <strong>análise de
                dados e linguagens de programação.</strong></p>
    </section>

    <section id="sessao-2" class="h-80 py-12 bg-yellow-800 flex flex-col justify-center">
        <h5 class="text-yellow-500 font-extrabold text-3xl text-center mb-8">Minhas Experiências</h5>
        
<ul class="flex flex-wrap items-center justify-center text-white">
    <li>
        <a href="#" class="me-4 hover:underline md:me-6 ">Html</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Css</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6 ">Javascript</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Php</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Laravel</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Bootstrap</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Tailwind</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">MySql</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">SqlServer</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Java</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">C++</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">No-Code</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Kotlin</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">Git</a>
    </li>
    <li>
        <a href="#" class="me-4 hover:underline md:me-6">GitHub</a>
    </li>
</ul>

    </section>


</main>

<footer class="bg-yellow-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <span class="block text-sm font-bold text-yellow-500 sm:text-center dark:text-black">© 2024 | Todos os Direitos
            Reservados</span>
    </div>
</footer>

@endsection