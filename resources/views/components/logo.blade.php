@props(['variant' => 'dark', 'class' => ''])

@php
  $markColor   = '#B5882A'; // gold always
  $textColor   = $variant === 'light' ? '#FFFFFF' : '#1A1A2E';
@endphp

<svg viewBox="0 0 130 38" xmlns="http://www.w3.org/2000/svg"
     class="{{ $class }}" aria-label="Nestora" role="img">

  {{-- Mark: rooftop peak (stroke only, no fill) --}}
  <polyline points="6,30 18,10 30,30"
            fill="none"
            stroke="{{ $markColor }}"
            stroke-width="2.5"
            stroke-linejoin="round"
            stroke-linecap="round"/>

  {{-- Mark: door rectangle inside --}}
  <rect x="13" y="21" width="10" height="9"
        fill="{{ $markColor }}"
        rx="1"/>

  {{-- Thin vertical accent line between mark and wordmark --}}
  <line x1="38" y1="8" x2="38" y2="30"
        stroke="{{ $markColor }}"
        stroke-width="1"
        opacity="0.4"/>

  {{-- Wordmark --}}
  <text x="46" y="27"
        font-family="'Cormorant Garamond', 'Georgia', serif"
        font-size="19"
        font-weight="600"
        fill="{{ $textColor }}"
        letter-spacing="1.5">Nestora</text>

</svg>
