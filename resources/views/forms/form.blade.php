<x-layout>
  <x-slot name="title">Hello forms </x-slot>
  <x-slot name="content">
    <form action="{{route('handleRegister')}}" method='post'>
      @csrf
      <label for="name">name: </label>
      <input type="name" name="name" value="name" />
      <label for="Email">Email: </label>
      <input type="email" name="email" value="email@laravel.com" />
      <label for="password  ">Password: </label>
      <input type="password" name="password" value="password" />
      <button type="submit" value='submit' @disabled($errors->isNotEmpty())>Submit</button>
    </form>
  </x-slot>
</x-layout>