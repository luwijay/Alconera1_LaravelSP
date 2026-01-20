@props(['route', 'type' => 'primary'])

<a href="{{ $route }}" class="btn btn-sm btn-{{ $type }}">
    {{ $slot }}
</a>