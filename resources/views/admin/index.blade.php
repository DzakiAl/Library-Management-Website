<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Table') }}
        </h2>
    </x-slot>
    <div class="table-wrapper">
        <table class="table" border="10">
            <thead>
                <tr>
                    <th class="table-header">Name</th>
                    <th class="table-header">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                        <td class="table-body">{{$profile->name}}</td>
                        <td class="table-body">{{$profile->email}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

