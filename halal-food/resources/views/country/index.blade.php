<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
</head>
<body>
<a class="btn btn-primary float-end mb-3" href="/country/create">Add a New Country</a>
@if(session('message'))
    <div class="alert alert-success">{{ session('message') }}</div>
@endif

<div class="container">

<table class="table">
    <thead>
        <th>Id</th>
        <th>Country Name</th>
        <th>Country Code</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach($countries as $country)
            <tr>
                <td>{{ $country['id'] }}</td>
                <td>{{ $country['Country'] }}</td>
                <td>{{ $country['Code'] }}</td>
                <td>
                    <a href="/country/{{$country['id'] }}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/country/{{$country['id']}}/delete" class="btn btn-primary btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</body>
</html>
