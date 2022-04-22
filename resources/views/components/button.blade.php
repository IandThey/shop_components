<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-100 mt-2 mb-2 btn btn-lg rounded-4 btn-primary']) }}>
    {{ $slot }}
</button>
