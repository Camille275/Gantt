<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update a Gantt</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('gantt.update', ['gantt' => $gantt])}}">
        @csrf 
        @method('post')
        <div>
            <label for="taskName">Task Name:</label>
            <input type="text" id="taskName"><br>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" rows="4"></textarea><br>
        </div>
        <div>
            <label for="startDate">Start Date:</label>
            <input type="date" id="startDate"><br>
        </div>
        <div>
            <label for="endDate">End Date:</label>
            <input type="date" id="endDate"><br>
        </div>
        <div>
            <label for="duration">Duration (in days):</label>
            <input type="number" id="duration" min="1"><br>
        </div>
        <div>
            <label for="percentComplete">Percent Complete:</label>
            <input type="number" id="percentComplete" min="0" max="100"><br>
        </div>
        <div>
            <label for="assignedPerson">Assigned Person:</label>
            <input type="text" id="assignedPerson"><br>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>