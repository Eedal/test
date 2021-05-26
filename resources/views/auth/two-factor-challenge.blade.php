@extends("template.layout") 
@section('content')
<form method="POST" action="{{ route('two-factor.login') }}">
    @csrf
        <label for="code">Código de autenticación</label>
        <input id="code" type="code" name="code" required>
        <button type="submit">
            Enviar
        </button>
</form>

<form method="POST" action="{{ route('two-factor.login') }}">
    @csrf
        <label for="recovery_code">Código de recuperación</label>
        <input id="recovery_code" type="recovery_code" name="recovery_code" required>
        <button type="submit">
            Enviar
        </button>
</form>
@endsection