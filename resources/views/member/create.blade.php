<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Member') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{route('member.store')}}" class="form" method="POST">
            @csrf
            <input type="text" placeholder="Name" name="name" class="input"><br>
            <input type="text" placeholder="Email" name="email" class="input"><br>
            <input type="text" placeholder="Address" name="address" class="input"><br>
            <input type="text" placeholder="Phone" name="phone" class="input"><br>
            <div class="option">
                <a href="{{ route('member.index') }}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>
