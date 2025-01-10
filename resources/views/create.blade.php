<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Criar nova Tarefa</h1>
    </header>

    <main>
        <form action="{{ route('task.store') }}" method="post">
            @csrf

            <div class="input-box">
                <label for="idtitulo">Título</label>
                <input type="text" name="title" id="idtitulo">
            </div>

            <div class="input-box">
                <label for="iddescricao">Descrição</label>
                <input type="text" name="description" id="iddescricao">
            </div>

            <button type="submit">Enviar</button>

        </form>
    </main>
</body>
</html>