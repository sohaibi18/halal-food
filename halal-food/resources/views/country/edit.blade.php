<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>

</head>
<body>
<div class="container">


    <h2 style="text-align: center">Update Country</h2>
    {{--    @if($errors->any())--}}
    {{--    <p class="text-danger">Fix the Following errors</p>--}}
    {{--    <ul>--}}
    {{--        @foreach($errors->all() as $error)--}}
    {{--            <li class="mt-1"{{ '$error' }}></li>--}}
    {{--        @endforeach--}}
    {{--    </ul>--}}
    {{--    @endif--}}
    <div class="container">
        <form action="/country/{{$data['id']}}" method="post">
            @method('PUT')
            @csrf
            <label for="country">Country Name</label><br>
            <input type="text" id="fname" class="form-control" name="Country" value="{{ $data['Country'] }}"><br>
            @error('Country')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <label for="Code">Code</label><br>
            <input type="text" id="lname" class="form-control" name="Code" value="{{ $data['Code'] }}"><br><br>
            @error('Code')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <input type="submit"class="btn btn-default"  value="Update">
        </form>
    </div>
</div>
</body>

</html>
