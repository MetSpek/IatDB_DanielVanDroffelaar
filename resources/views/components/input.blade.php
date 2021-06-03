@props(['disabled' => false])

<input class="auth__input" {{ $disabled ? 'disabled' : '' }} {!! $attributes !!}>
