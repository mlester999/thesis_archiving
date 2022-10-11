<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200']) }}>
    {{ $slot }}
</button>
