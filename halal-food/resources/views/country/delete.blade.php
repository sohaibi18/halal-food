<x-layout>

    <x-slot name="title">
        Delete Country
    </x-slot>

<div class="container">
    <h2 style="text-align: center">Delete Country</h2>
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
            @method('DELETE')
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
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>
</div>

</x-layout>
