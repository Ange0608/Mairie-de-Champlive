<x-guest-layout>
    <div class="relative flex justify-center">
        <img class="h-[40rem] w-full object-cover " src="image/header2.webp" alt="Photo du ruisseau de champlive">

        <div class="absolute text-seasalt uppercase top-80 font-h1 text-xl md:text-4xl lg:text-5xl whitespace-nowrap">
            <h1 class="typewriter">Bienvenue à champlive</h1>
        </div>
    </div>
    <div class="shapedividers_com-6697 h-36 "></div>

    <div data-aos="fade-right" class="mx-12 lg:mx-16 lg:flex lg:flex-col xl:flex-row xl:my-24 xl:mx-24">
        <div class="flex justify-center lg:flex-col md:mx-32 xl:mx-10 ">
            <div class="mb-5 ml-12  ">
                <img class="w-32 md:w-40" src="image/blason.png" alt="Blason du village de Champlive">
            </div>
            <div class=" flex absolute top-50 right-50 lg:left-[35rem] xl:left-[25rem] shadow-xl">
                <img class="hidden rounded-xl md:w-80 lg:block " src="image/photo_1.webp"
                    alt="Photographie de la mairie">
            </div>
            <div class="flex mt-2 mr-10">
                <img class="hidden rounded-xl md:w-80 lg:block xl:mt-5" src="image/photo_2.webp"
                    alt="Photographie du village">
            </div>
        </div>

        <div
            class="flex flex-col mx-auto mb-10 md:mb-24 lg:w-[47rem] xl:w-96 xl:justify-end xl:ml-96 xl:my-auto 2xl:w-[50rem] xl:ml:-24 ">
            <div class="lg:mt-36 mb-10 ">La première mention du nom Champlive date du XIVème. Son origine vient du fait
                que les terres étaient
                inondées en cas de fortes pluies, donc Champs lavés d'où Champlive. Depuis, un tunnel a été creusé pour
                évacuer l'eau. Le village est traversé par un ruisseau, Le Gour.
            </div>

            <div >Au sommet de la colline, les ruines du Château de Vaite, construit au XIIIème,
                surplombent la vallée du
                Doubs. De cet endroit, on peut avoir un magnifique point de vue. Ce château fut incendié en 1480 par les
                troupes de Louis XI, la famille Lallemand l'entretient jusqu'en 1792 et c'est en 1793 que le Conseil
                Général
                du Doubs le fit démolir en redoutant qu'il devienne un repaire de brigands. Il reste de nos jours une
                tour
                éventrée et des remparts où apparaissent des restes de meurtrières.
            </div>
        </div>

    </div>



    {{-- News --}}

    <div class="shapedividers_com-5351 h-40"></div>
    <div class="relative bg-carribean px-6 pb-20 pt-16 lg:px-8 lg:pb-28 lg:pt-24 z-10 ">
        <div class="relative mx-auto max-w-7xl">
            <div class="text-center">
                <a href="{{ route('nos-articles') }}"
                    class="shadow_text text-3xl font-bold font-h1 text-seasalt sm:text-4xl">
                    <span class="shadow_text border-b-4 border-transparent hover:border-seasalt mb-5">Les
                        actualités du village</span>
                </a>
            </div>
            <div data-aos="fade-right" class="mx-auto mt-24 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3">
                @foreach ($articles as $article)
                    <div
                        class="flex flex-col overflow-hidden rounded-xl shadow-2xl shadow-smocky-black/60 hover:scale-95 transition duration-300">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ Storage::url($article->image) }}"
                                alt="{{ $article->title }}">
                        </div>
                        <div class="flex flex-1 flex-col justify-between bg-seasalt p-6 ">
                            <div class="flex-1">
                                <a href="{{ route('article', $article->id) }}" class="mt-2 block">
                                    <p class="text-xl font-semibold text-gray-900">{{ $article->title }}</p>
                                    <p class="line-clamp-4 mt-3 text-base text-smocky-black font-p ">
                                        {{ $article->content }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="shapedividers_com-1250 h-36"></div>

    {{-- Deliberation --}}
    <div data-aos="fade-right" class="bg-seasalt mt-16 w-10/12 mx-auto ">
        <a href="{{ route('nos-deliberations') }}" class="flex justify-center font-h1 font-bold text-3xl ">
            <span class="shadow_text border-b-4 border-transparent hover:border-carribean mb-5">Délibérations du
                conseil</span>
        </a>

        <div class="bg-seasalt flex flex-wrap justify-center ">
            @foreach ($deliberations as $deliberation)
                <div
                    class="bg-mint/70 w-96 md:mx-10 lg:mx-24 my-12 flex rounded-xl shadow-xl shadow-carribean/50 border-2 border-carribean">
                    <div>
                        <img class="w-40 rounded-l-xl" src="image/reunion.png" alt="">
                    </div>
                    <div
                        class="flex flex-col justify-center mx-auto text-seasalt font-p font-semibold w-24 text-center leading-8 ">
                        Scéance du {{ $deliberation->date }}
                        <a href="{{ url(Storage::url($deliberation->file)) }}" type="button" target="_blank"
                            class="mx-auto py-0.5 mt-2 bg-carribean text-sm rounded-lg w-16 text-seasalt font-p hover:scale-110 border-2  border-transparent">Voir</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>
