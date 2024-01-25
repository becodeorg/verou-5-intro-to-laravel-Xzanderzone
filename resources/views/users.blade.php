<x-layout>
  <x-slot name="title">Hello userss </x-slot>
  <x-slot name="content">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    {{"testing"}}
    <ul>
      @foreach($users as $user)
      {{-- {{$user->name}} --}}
      <li><a href="{{ route("showUser", ["id" => $user->id]) }}">{{ $user->name }}</a></li>
      @endforeach
    </ul>
  </x-slot>
</x-layout>