<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Member') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{route('member.update', $member)}}" class="form" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Name" name="name" class="input" value="{{$member->name}}"><br>
            <input type="text" placeholder="Email" name="email" class="input" value="{{$member->email}}"><br>
            <input type="text" placeholder="Address" name="address" class="input" value="{{$member->address}}"><br>
            <input type="text" placeholder="Phone" name="phone" class="input" value="{{$member->phone}}"><br>
            <div class="option">
                <a href="{{ route('member.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>

