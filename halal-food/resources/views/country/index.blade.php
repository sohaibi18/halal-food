<x-layout>


{{--    <x-slot name = "title">--}}
{{--        Show all countries--}}
{{--    </x-slot>--}}

    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>



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
</x-layout>
