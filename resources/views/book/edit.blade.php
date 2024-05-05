<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Books') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{ route('book.update', $book) }}" class="form" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Title" name="title" class="input" value="{{ $book->title }}"><br>
            <input type="text" placeholder="Author" name="author" class="input" value="{{ $book->author }}"><br>
            <input type="text" placeholder="Publisher" name="publisher" class="input" value="{{ $book->publisher }}"><br>
            <input type="date" placeholder="Release Date" name="publication_date" class="input" value="{{ $book->publication_date}}"><br>
            <input type="text" placeholder="Genre" name="genre" class="input" value="{{ $book->genre }}"><br>
            <input type="number" placeholder="Number of Copies" name="number_of_copies" class="input" value="{{ $book->number_of_copies }}"><br>
            <div class="option">
                <a href="{{ route('book.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>