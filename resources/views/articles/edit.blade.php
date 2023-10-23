<x-app-layout>
    <div class="m-10">
        <div class="pb-3 flex justify-end items-center">
            <a class="border-2 border-carribean bg-carribean text-white rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt" href="{{ route('articles.index') }}">
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
            <div class="col-lg-12 border-2 border-carribean p-4 rounded-xl bg-seasalt text-smocky-black drop-shadow-2xl">
                @if ($errors->any())
                <div class="alert alert-danger">
                    Il y a un problème avec votre enregistrement.<br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Titre </label>
                                <input type="text" name="title" value="{{ $article->title }}" class="form-control w-full" placeholder="Titre">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Contenu </label>
                                <input class="form-control w-full text-black" rows="6" name="content" value="{{ $article->content }}" placeholder="Description"></input>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Date </label>
                                <input class="form-control w-full text-black" rows="6" name="date" type="date" value="{{ $article->date }}" placeholder="Contenu"></input>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 pb-5">
                            <label class="font-bold text-lg">Lieu </label>
                                <input class="form-control w-full text-black" rows="6" name="location" value="{{ $article->location }}" placeholder="Contenu"></input>
                        </div>
                        <div class="form-group py-2">
                            <label class="font-bold text-lg" for="image">Image </label>
                            <input type="file" name="image" id="image" class="form-control-file" value="{{ $article->image }}">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="border-2 border-carribean bg-carribean  text-seasalt rounded-xl p-2 px-5 hover:text-carribean hover:font-bold hover:bg-seasalt">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>