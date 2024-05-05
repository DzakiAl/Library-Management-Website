<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Author') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{route('author.update', $author)}}" class="form" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Author" name="name" class="input" value="{{$author->name}}"><br>
            <input type="text" placeholder="Nationality" name="nationality" class="input" value="{{$author->nationality}}"><br>
            <div class="option">
                <a href="{{ route('author.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>