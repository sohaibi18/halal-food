
@props([

    'label' => 'Submit'
])


<button {{ $attributes }} type="submit" class="btn btn-primary">
    {{ $label }}
</button>
