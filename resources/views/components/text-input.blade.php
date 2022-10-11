@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-t-0 border-x-0 border-gray-300 focus:border-green-600 transition duration-500 px-3 pb-3']) !!}>
