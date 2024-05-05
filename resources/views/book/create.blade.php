<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Books') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{ route('book.store') }}" class="form" method="POST">
            @csrf
            <input type="text" placeholder="Title" name="title" class="input"><br>
            <input type="text" placeholder="Author" name="author" class="input"><br>
            <input type="text" placeholder="Publisher" name="publisher" class="input"><br>
            <input type="date" placeholder="Release Date" name="publication_date" class="input"><br>
            <input type="text" placeholder="Genre" name="genre" class="input"><br>
            <input type="number" placeholder="Number of Copies" name="number_of_copies" class="input"><br>
            <div class="option">
                <a href="{{ route('book.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>
