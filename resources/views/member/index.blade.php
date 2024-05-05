<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Member Table') }}
        </h2>
    </x-slot>
    <a href="{{ route('member.create') }}" class="button-add">Add Member</a>
    <div class="table-wrapper">
        <table class="table" border="10">
            <thead>
                <tr>
                    <th class="table-header">Member</th>
                    <th class="table-header">Email</th>
                    <th class="table-header">Address</th>
                    <th class="table-header">Phone</th>
                    <th class="table-header">Option</th>
                </tr>
            </thead>
            @foreach ($members as $member)
                <tr>
                    <td class="table-body">{{$member->name}}</td>
                    <td class="table-body">{{$member->email}}</td>
                    <td class="table-body">{{$member->address}}</td>
                    <td class="table-body">{{$member->phone}}</td>
                    <td class="table-body">
                        <a href="{{route('member.edit', $member)}}" class="action-button">Edit</a>
                        <form action="{{route('member.destroy', $member)}}" method="POST" style="margin: 0; padding: 0;">
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
