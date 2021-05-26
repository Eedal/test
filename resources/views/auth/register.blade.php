@extends("template.layout") 
@section('content')
    <h1>registro</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input type="text" id="name" name="name">
        <br/>
        <label for="">Email</label>
        <input type="text" id="email" name="email">
        <br/>        
        <label for="">Contraseña</label>
        <input type="password" id="password" name="password">
        <br/>
        <label for="">Confirmar contraseña</label>
        <input type="password" id="password_confirmation" name="password_confirmation">
        <br/>
        <button>Registrar</button>
    </form>
@endsection