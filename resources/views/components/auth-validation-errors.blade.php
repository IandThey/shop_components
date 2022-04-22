@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-warning">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="alert alert-error">
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
