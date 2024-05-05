<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publisher Table') }}
        </h2>
    </x-slot>
    <a href="{{ route('publisher.create') }}" class="button-add">Add publisher</a>
    <div class="table-wrapper">
        <table class="table" border="10">
            <thead>
                <tr>
                    <th class="table-header">Name</th>
                    <th class="table-header">Address</th>
                    <th class="table-header">Email</th>
                    <th class="table-header">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publishers as $publisher)
                    <tr>
                        <td class="table-body">{{$publisher->name}}</td>
                        <td class="table-body">{{$publisher->address}}</td>
                        <td class="table-body">{{$publisher->email}}</td>
                        <td class="table-body">
                            <a href="{{route('publisher.edit', $publisher)}}" class="action-button">Edit</a>
                            <form action="{{route('publisher.destroy', $publisher)}}" method="POST" style="margin: 0; padding: 0;">
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
