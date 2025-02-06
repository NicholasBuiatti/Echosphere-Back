<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica la tua email</title>
</head>
<body>
    <p>Ciao {{ $user->name }},</p>
    <p>Per favore clicca sul link seguente per confermare il tuo indirizzo email:</p>
    <p><a href="{{ $url }}">Conferma la tua email</a></p>
    <p>Se non hai richiesto questa registrazione, ignora questa email.</p>
</body>
</html>
