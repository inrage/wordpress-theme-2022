<div class="offer-item">
    <div class="offer-item__top">
      <div class="offer-item__image">
        {!! $icon !!}
      </div>

      <div class="offer-item__title">{!! $title !!}</div>
    </div>
    <div class="offer-item__text">{!! $content !!}</div>

    @if($link)
      <div class="offer-item__cta">
        <a href="{{ $link['url'] }}" class="">
          {{ $link['title'] }}
        </a>
      </div>
    @endif
</div>
