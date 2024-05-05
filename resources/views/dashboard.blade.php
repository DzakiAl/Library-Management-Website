 <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Dashboard') }}
         </h2>
     </x-slot>
     <div class="body">
         <div class="content">
             <a href="{{ route('book.index') }}">
                 <div class="container">
                     <img src="{{ asset('storage/asset/book-logo.svg') }}" class="logo">
                     <h1 class="title">Books</h1>
                 </div>
             </a>
             <a href="{{ route('author.index') }}">
                 <div class="container">
                     <img src="{{ asset('storage/asset/author-logo.svg') }}" class="logo">
                     <h1 class="title">Author</h1>
                 </div>
             </a>
             <a href="{{ route('genre.index') }}">
                 <div class="container">
                     <img src="{{ asset('storage/asset/genre-logo.svg') }}" class="logo">
                     <h1 class="title">Genre</h1>
                 </div>
             </a>
         </div>
         <div class="content">
            <a href="{{ route('member.index') }}">
                <div class="container">
                    <img src="{{ asset('storage/asset/member-logo.svg') }}" class="logo">
                    <h1 class="title">Member</h1>
                </div>
            </a>
            <a href="{{ route('publisher.index') }}">
                <div class="container">
                    <img src="{{ asset('storage/asset/publisher-logo.svg') }}" class="logo">
                    <h1 class="title">Publisher</h1>
                </div>
            </a>
            <a href="{{ route('admin.index') }}">
                <div class="container">
                    <img src="{{ asset('storage/asset/admin-logo.svg') }}" class="logo">
                    <h1 class="title">Admin</h1>
                </div>
            </a>
        </div>
     </div>
 </x-app-layout>
