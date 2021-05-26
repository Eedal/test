@extends("template.layout") 
@section('content')
    <h1>Reseteo de contraseña</h1>
    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{$request->email}}">
        <br/>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <br/>
        <label for="password_confirmation">Confirmación de contraseña</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br/>
        <button>Enviar</button>
    </form>
@endsection