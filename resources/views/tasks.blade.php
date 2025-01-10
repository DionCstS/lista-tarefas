<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Tarefas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 min-h-screen flex justify-center items-center">
    <main class="w-full max-w-6xl mx-auto p-6">
        <h1 class="text-4xl font-bold text-center mb-8">Minhas Tarefas</h1>

        <header class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($tasks as $task)
            <div class="bg-gray-800 shadow-md rounded-lg p-4 border border-gray-700 flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-100 truncate">{{$task->title}}</h2>
                        <span 
                            class="text-xs font-bold px-2 py-1 rounded-lg 
                            {{ $task->is_completed ? 'bg-green-500 text-gray-900' : 'bg-red-500 text-gray-100' }}">
                            {{ $task->is_completed ? '✔️ Concluída' : '⏳ Pendente' }}
                        </span>
                    </div>
                    <p class="text-gray-400 text-sm line-clamp-3">{{$task->description}}</p>
                </div>

                <div class="flex justify-between items-center mt-4">
                    <button class="flex items-center bg-blue-600 hover:bg-blue-500 text-white font-medium px-3 py-2 rounded-md transition text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                        </svg>
                        Editar
                    </button>
                    <button class="flex items-center bg-red-600 hover:bg-red-500 text-white font-medium px-3 py-2 rounded-md transition text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        Remover
                    </button>
                </div>
            </div>
            @empty
            <p class="text-gray-400 text-center col-span-full">Nada encontrado</p>
            @endforelse
        </header>

        <a href="{{ route('task.create') }}">Nova Tarefa</a>
    </main>
</body>
</html>
