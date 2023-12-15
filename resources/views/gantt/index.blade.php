<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Product</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('gantt.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Task Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Duration</th>
                <th>Percent Complete</th>
                <th>Assigned Person</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$gantt->id}}</td>
                    <td>{{$gantt->taskName}}</td>
                    <td>{{$gantt->taskDescription}}</td>
                    <td>{{$gantt->startDate}}</td>
                    <td>{{$gantt->endDate}}</td>
                    <td>{{$gantt->duration}}</td>
                    <td>{{$gantt->percentComplete}}</td>
                    <td>{{$gantt->assignedPerson}}</td>
                    <td>
                        <a href="{{route('gantt.edit', ['gantt' => $gantt])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('gantt.destroy', ['gantt' => $gantt])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>