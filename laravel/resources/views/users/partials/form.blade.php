<form action="{{route('users.store')}}"method=POST novalidate>
    @csrf
    <label for="name">name</label>
    <input type="text" name="name" id="name"
     value="{{old('name')? old(name) :(isset($user)? $user->name: '')}}"
    
    ><br>
    @error('name')
        {{$message}}
    @enderror
    <label for="email">email</label>
    <input type="text" name="email" id="email"value=
    "
    @if ((old('email')){{'old'}})
        
    @elseif(isset($user))
        {{$user->email}}
    @endif">
    <br>
    @error('email')
        {{$message}}
    @enderror
    <label for="contraseña">Contraseña</label>
    <input type="password" name="password" id="contraseña"value="{{old('password')}}">
    <br>
    @error('password')
        {{$message}}
    @enderror    
    <button>Guardar</button>
</form>