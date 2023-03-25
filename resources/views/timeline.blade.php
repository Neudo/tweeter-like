<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Timeline') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl m-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Écrivez votre tweet</h2>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-white">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="w-full py-5" method="POST">
                    @csrf
                    <textarea class="w-full" name="message" id="message" cols="30" rows="11"></textarea>
                    <button class="px-5 p-2 mx-2  bg-white text-bg-gray-900" type="submit">Envoyer</button>
                </form>

            </div>
        </div>
    </div>

    <div class="py-12 max-w-4xl m-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Les derniers Tweets</h2>
                </div>
                @if(count($tweets) == 0)
                    <div>
                        <h3 class="text-white">Pas de tweets pour le moment ...</h3>
                    </div>
                @endif
                @foreach ($tweets as $tweet)
                    <div class="card bg-gray-700 rounded-lg text-white p-6 m-5">
                        <td class="uppercase"></td>
                        <h3 class="fs-24">{{ $tweet->user->username}}</h3> <span>{{$tweet->created_at->diffForHumans()}} </span>
                        <p>{{$tweet->message}}</p>
                        @if(auth()->user()->username === $tweet->user->username)
                            <form action="{{ route('tweet.destroy', $tweet->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn text-red-700 btn-danger">Supprimer</button>
                            </form>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
