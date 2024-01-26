<x-layout>
  <x-slot name="title">details:  {{$user->name}} </x-slot>
  <x-slot name="content">signed up with email : {{$user->email}} <br>
   account created at : {{$user->created_at}}
   account created at : {{$user->password}}
    <form action="{{ route('destroyUser', ['id' => $user->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete User</button>
    </form>
  </x-slot>
</x-layout>