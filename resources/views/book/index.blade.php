<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books Table') }}
        </h2>
    </x-slot>
    <a href="{{ route('book.create') }}" class="button-add">Add books</a>
    <div class="table-wrapper">
        <table class="table" border="10">
            <thead>
                <tr>
                    <th class="table-header">Title</th>
                    <th class="table-header">Author</th>
                    <th class="table-header">Publisher</th>
                    <th class="table-header">Publication Date</th>
                    <th class="table-header">Genre</th>
                    <th class="table-header">Number of Copies</th>
                    <th class="table-header">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="table-body">{{ $book->title }}</td>
                        <td class="table-body">{{ $book->author }}</td>
                        <td class="table-body">{{ $book->publisher }}</td>
                        <td class="table-body">{{ $book->publication_date }}</td>
                        <td class="table-body">{{ $book->genre }}</td>
                        <td class="table-body">{{ $book->number_of_copies }}</td>
                        <td class="table-body">
                            <a href="{{ route('book.edit', $book) }}" class="action-button">Edit</a>
                            <form action="{{ route('book.destroy', $book) }}" method="POST" style="margin: 0; padding: 0;">
                                @csrf
                                @method('DELETE')
                                <button class="action-button">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
