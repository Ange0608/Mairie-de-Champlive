<x-app-layout>
    <div class="m-10">
        <div class="pb-3 flex justify-end items-center">
            <a class="border-2 border-carribean bg-carribean text-seasalt rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt"
                href="{{ route('newspapers.index') }}">
                Retour</a>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12 italic pb-4 text-white">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 border-2 border-gray-800 p-4 rounded-xl bg-seasalt text-smocky-black drop-shadow-2xl">
                <div class="row">
                    <div class="pb-5">
                        <label class="font-bold text-lg">Titre</label>
                        {{ $newspaper->title }}
                    </div>
                    <div class="pb-5">
                        <label class="font-bold text-lg">Fichier</label>
                        <embed src="{{ Storage::url($newspaper->file) }}" type="application/pdf" width="600"
                            height="700" alt="pdf"
                            pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
