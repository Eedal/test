@extends("template.layout") 
@section('content')
<form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <label for="password">Confirmar contraseña</label>
    <input id="password" type="password" name="password" required>
    <button type="submit" >
        Confirmar contraseña
    </button>
</form>
@endsection