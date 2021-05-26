@extends("template.layout") 
@section('content')
    <h1>Reestablecer contraseña</h1>
    @if(session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('password.request') }}" method="post">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <button>Enviar</button>
    
    </form>
@endsection