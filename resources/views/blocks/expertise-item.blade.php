<div class="expertise-item">
    <div class="expertise-item__image">
        @if($logo)
          {!! $logo !!}
        @endif
    </div>
    <div class="expertise-item__content">
        <h3 class="expertise-item__title">{{ $title }}</h3>
        <p class="expertise-item__text">
            {!! $excerpt !!}
        </p>

        @if($link)
          @include('modules.link-arrow', ['link' => $link['url'], 'text' => 'Voir plus'])
        @endif
    </div>
</div>
