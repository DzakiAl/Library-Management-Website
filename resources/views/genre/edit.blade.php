<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Genre') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{route('genre.update', $genre)}}" class="form" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Genre" name="genre" class="input" value="{{$genre->genre}}"><br>
            <div class="option">
                <a href="{{ route('genre.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>
