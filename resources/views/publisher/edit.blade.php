<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Publisher') }}
        </h2>
    </x-slot>
    <center>
        <form action="{{route('publisher.update', $publisher)}}" class="form" method="POST">
            @csrf
            @method('PUT')
            <input type="text" placeholder="Name" name="name" class="input" value="{{$publisher->name}}"><br>
            <input type="text" placeholder="Address" name="address" class="input" value="{{$publisher->address}}"><br>
            <input type="text" placeholder="Email" name="email" class="input" value="{{$publisher->email}}"><br>
            <div class="option">
                <a href="{{route('publisher.index')}}" class="button-cancel">Cancel</a>
                <button type="submit" class="button-submit">Submit</button>
            </div>
        </form>
    </center>
</x-app-layout>

