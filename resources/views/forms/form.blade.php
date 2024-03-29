<x-layout>
  <x-slot name="title">Hello forms </x-slot>
  <x-slot name="content">
    <form action="{{route('handleRegister')}}" method='post'>
      @csrf
      {{-- @if (isset($error))
      @if($error =='23000')<p style='color:rgb(255, 0, 0)'>{{"a user with this email already exists! (error $error)"}}</p>
      @endif 
      add other errors ,use switch/match
      @endif --}}
      @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $e)
          <li style='color:red'>{{ $e }}</li>
        @endforeach
      </ul>
      @endif

      <label for="name">name: </label>
      <input type="name" name="name" value="name" />
      <label for="email">Email: </label>
      <input type="email" name="email" value="email@laravel.com" />
      <label for="password  ">Password: </label>
      <input type="password" name="password" value="password" />
      {{-- <button type="submit" value='submit' @disabled($errors->isNotEmpty())>Submit</button> --}}
      <button type="submit" value='submit'>Submit</button>
    </form>
  </x-slot>
</x-layout>