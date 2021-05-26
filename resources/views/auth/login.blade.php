@extends("template.layout") 
@section('content')
    <form action="" method="post">
        @csrf       
        <label for="">Email</label>
        <input type="text" id="email" name="email">
        <br/>        
        <label for="">Contraseña</label>
        <input type="password" id="password" name="password">
        <br/>
        <button>Registrar</button>
    </form>
@endsection