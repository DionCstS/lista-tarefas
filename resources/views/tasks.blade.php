<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Minhas Tarefas</h1>
    </main>

    <header>
        
        @forelse($tasks as $task)

            <p>{{$task->title}}</p>
            <p>{{$task->description}}</p>
            <p>{{$task->is_completed}}</p>

        @empty

            <p>Nada encontrado</p>
        
        @endforelse

    </header>
</body>
</html>