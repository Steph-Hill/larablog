<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Créer un Post') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="my-5">

            @foreach ($errors->all() as $error)

                    <span class="block text-red-800">{{ $error }}</span>

            @endforeach

        </div>
            

            <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data" class="mt-10">

                @csrf

                <x-label value="Nom du post" for="title"/>
                <x-input id="title" name="title"/>
                 
                <x-label value="Contenu du post" for="content"/>
                <textarea id="content" name="content" > </textarea>

                <x-label value="Image du post" for="image"/>
                <x-input id="image" type="file" name="image"/>

                <x-label value="Categorie du post" for="category"/>

                <select name="category" id="category">

                    @foreach ($categories as $category)
                            
                        <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach


                </select>

                <x-button style="display:block !important; " class="mt-10">Créer mon post </x-button>


            </form>
       
       
    </div>

</x-app-layout>