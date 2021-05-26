@extends("template.layout") 
@section('content')
    <h1>Página de verificación de email</h1>
    @if(session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('verification.send') }}" method="post">
        @csrf
        <button>Confirmar email</button>
    </form>
@endsection