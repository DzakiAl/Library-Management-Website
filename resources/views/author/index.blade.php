<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Author Table') }}
        </h2>
    </x-slot>
    <a href="{{route('author.create')}}" class="button-add">Add author</a>
    <div class="table-wrapper">
        <table class="table" border="10">
            <thead>
                <tr>
                    <th class="table-header">Name</th>
                    <th class="table-header">Nationality</th>
                    <th class="table-header">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td class="table-body">{{$author->name}}</td>
                        <td class="table-body">{{$author->nationality}}</td>
                        <td class="table-body">
                            <a href="{{route('author.edit', $author)}}" class="action-button">Edit</a>
                            <form action="{{route('author.destroy', $author)}}" method="POST" style="margin: 0; padding: 0;">
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
