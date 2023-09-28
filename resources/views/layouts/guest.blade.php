<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=palanquin:400|quicksand:500|roboto:300" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-seasalt">
    <header class="">
        <nav class="sticky bg-gradient-to-b from-carribean/90 to-mint/70 px-4 py-3 lg:px-6">
            <div class="flex flex-wrap justify-center items-center mx-auto max-w-screen-xl">
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <div>
                            <a href="#"
                                class="text-sm font-semibold leading-6 font-p text-seasalt block py-2 pr-4 pl-3 text-seasalt border-b-2 border-transparent hover:border-b-2 hover:border-seasalt hover:transition-all">Accueil</a>
                        </div>
                        <div>
                            <div class="hidden md:flex relative pb-2 mt-2" x-data="{ open: false }">
                                <button type="button" class="flex  gap-x-1 text-sm font-semibold leading-6 font-p text-seasalt" @click="open = !open">
                                    La Mairie
                                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="#FAFAFA" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div x-cloak x-show="open"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-1"
                                    x-description="'Product' flyout menu, show/hide based on flyout menu state."
                                    class="absolute -left-8 top-full z-10 mt-3 max-w-md w-44 overflow-hidden bg-seasalt border-2 border-carribean shadow-lg ring-1 ring-gray-900/5" x-ref="panel" @click.away="open = false">
                                    <div class="p-2 pl-5 ">
                                        <div class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-smocky-black ">
                                                    Conseil municipal
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Délibérations
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent ">
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Services alentours
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="hidden md:flex relative pb-2 mt-2" x-data="{ open: false }">
                                <button type="button" class="flex text-blaitems-center gap-x-1 text-sm font-semibold leading-6 font-p text-white" @click="open = !open">
                                    Le Village
                                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="#FAFAFA" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div x-cloak x-show="open"
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-1"
                                    x-description="'Product' flyout menu, show/hide based on flyout menu state."
                                    class="absolute -left-8 top-full z-10 mt-3 max-w-md w-44 overflow-hidden bg-seasalt border-2 border-carribean shadow-lg ring-1 ring-gray-900/5" x-ref="panel" @click.away="open = false">
                                    <div class="p-2 pl-5">
                                        <div class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Actualités
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent hover:transition-all hover:border-carribean">
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Associations
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="group relative flex gap-x-6 py-2 text-sm leading-6 border-b-2 border-transparent">
                                            <div class="flex-auto">
                                                <a href="#" class="block font-semibold text-gray-900">
                                                    Numéros utiles
                                                    <span class="absolute inset-0"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#"
                                class="text-sm font-semibold leading-6 font-p text-seasalt block py-2 pr-4 pl-3 text-seasalt border-b-2 border-transparent hover:border-b-2 hover:border-seasalt hover:transition-all">Contact</a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="">
            <img class="h-[32rem] w-full object-cover shapedividers_com-410" src="image/header2.jpg"
                alt="Photo du ruisseau de champlive">
            <div class="shapedividers_com-5924 h-32 "></div>
        </div>
    </header>

    <main class="mx-36">
        <div  >
            <h1 class="shadow_text flex justify-center text-smocky-black font-h1 text-3xl mt-10 ">
                Mairie de CHAMPLIVE
            </h1>
            <div class="flex justify-around mt-24">
                <div class="">
                    <div class="flex flex-wrap ">
                        <img class="w-48 mr-36" src="image/blason.png" alt="Blason du village de Champlive" >
                        <img class="w-96 rounded-3xl" src="image/photo_1.jpg" alt="Photographie de la mairie">
                        <img class=" w-1/2 rounded-3xl mt-16" src="image/photo_2.jpg" alt="Photographie du village">
                    </div>
                </div>

                <div class="flex mt-32">
                    Champlive, un petit village pittoresque du Doubs, en Bourgogne-Franche-Comté, offre une évasion
                    parfaite de l'agitation urbaine. Niché dans une vallée verdoyante, il séduit par ses paysages
                    enchanteurs, ses maisons en pierre, et son ambiance chaleureuse. Les amoureux de la nature y
                    trouveront des sentiers de randonnée magnifiques, tandis que les curieux pourront explorer son riche
                    passé historique. Champlive est une invitation à la tranquillité et à l'authenticité de la vie à la
                    campagne française.
                </div>
            </div>


        </div>


    </main>



    {{-- <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div> --}}

    @livewireScripts
</body>
<script>
    AOS.init();
  </script>
</html>
