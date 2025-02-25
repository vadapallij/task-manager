<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Task Manager</h1>
    <form action="/tasks" method="POST" class="mb-4">
        @csrf
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Enter a new task" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item">
                {{ $task->title }}
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
