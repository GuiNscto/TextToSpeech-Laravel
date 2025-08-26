<!DOCTYPE html>
<html>
<head>
    <title>Text to Speech Laravel</title>
</head>
<body>
    <h1>Text to Speech</h1>
    <form action="{{ route('speak') }}" method="POST">
        @csrf
        <textarea name="text" rows="5" cols="50" placeholder="Digite seu texto aqui"></textarea><br><br>
        <button type="submit">Ouvir</button>
    </form>

    @if(isset($audioUrl))
        <h2>Resultado:</h2>
        <audio controls autoplay>
            <source src="{{ $audioUrl }}" type="audio/mpeg">
        </audio>
    @endif

    @if($errors->any())
        <div style="color:red;">
            {{ $errors->first() }}
        </div>
    @endif
</body>
</html>
