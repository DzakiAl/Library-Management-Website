<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genre Table') }}
        </h2>
    </x-slot>
    <a href="{{ route('genre.create') }}" class="button-add">Add genre</a>
    <div class="table-wrapper">
        <table class="table" border="10">
            <thead>
                <tr>
                    <th class="table-header">Genre</th>
                    <th class="table-header">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <td class="table-body">{{$genre->genre}}</td>
                        <td class="table-body">
                            <a href="{{route('genre.edit', $genre)}}" class="action-button">Edit</a>
                            <form action="{{route('genre.destroy', $genre)}}" method="POST" style="margin: 0; padding: 0;">
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
