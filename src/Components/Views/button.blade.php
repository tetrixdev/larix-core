@if($isLink)
    <a  x-data="{
            baseClass: '{{ config('larix.colors.'.$color) }}',
            userClass: '{{ $attributes->get('class') }}',
            mergedClass: twMerge(baseClass, userClass)
        }"
        :class="mergedClass"
        {{ $slot }}
    </a>
@else
    <button x-data="{
                baseClass: '{{ config('larix.colors.'.$color) }}',
                userClass: '{{ $attributes->get('class') }}',
                mergedClass: twMerge(baseClass, userClass)
            }"
            :class="mergedClass"
            :type="$type"
        {{ $slot }}
    </button>
@endif