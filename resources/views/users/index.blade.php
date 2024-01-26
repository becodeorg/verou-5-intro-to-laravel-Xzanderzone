<x-layout>
  <x-slot name="title">Hello userss </x-slot>
  <x-slot name="content">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    <ul>
      @foreach($users as $user)
      <li><a href="{{ route("showUser", ["user" => $user]) }}">{{ $user->name }}</a></li>
      @endforeach
    </ul>
  </x-slot>
</x-layout>