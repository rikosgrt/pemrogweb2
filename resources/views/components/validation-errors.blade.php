@props(['erorrs'])

@if ($errors->any())
    <div {{ $attributes}}>
        <div class=" font-medium text-sm text-red-600">
            {{ __('Sayang! Jangan Ada Yang Kosong Yah ') }}
        </div>
         <ul class="mt-3 list-dist list-inside text-sm text-red-600">
        @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
    </div>
@endif

