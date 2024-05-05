<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Genre') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{route('genre.store')}}" class="form" method="POST">
            @csrf
            <input type="text" placeholder="Genre" name="genre" class="input"><br>
            <div class="option">
                <a href="{{ route('genre.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>
