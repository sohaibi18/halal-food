<x-layout xmlns="http://www.w3.org/1999/html">
{{--    this style can be use for specific view--}}
    @push('styles')
        <link rel="stylesheet" href="abc.css">
    @endpush

    <x-slot name="title">
        Add new Country
    </x-slot>
    <div class="container">


    <h2 style="text-align: center">Add Country</h2>
    {{--    @if($errors->any())--}}
    {{--    <p class="text-danger">Fix the Following errors</p>--}}
    {{--    <ul>--}}
    {{--        @foreach($errors->all() as $error)--}}
    {{--            <li class="mt-1"{{ '$error' }}></li>--}}
    {{--        @endforeach--}}
    {{--    </ul>--}}
    {{--    @endif--}}
    <div class="container">
        <form action="/country" method="post">
            @csrf
            <label for="country">Country Name</label><br>
            <input type="text" id="fname" class="form-control" name="Country" value="{{ old('Country') }}"><br>
            @error('Country')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <label for="Code">Code</label><br>
            <input type="text" id="lname" class="form-control" name="Code" value="{{ old('Code') }}"><br><br>
            @error('Code')
            <p class="text-danger text-sm">{{ $message }}</p>
            @enderror
            <x-button label="Save"/>
        </form>
    </div>
</div>
</x-layout>
