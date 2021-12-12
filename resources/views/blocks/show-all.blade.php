<div class="{{ $block->classes }} wp-block-show-all--outer--{{ $bg_outer }} wp-block-show-all--push--{{ $bg_push }} ">
  <svg class="wp-block-show-all__diag" height="361" preserveAspectRatio="xMidYMax slice" viewBox="0 0 1920 361" width="1920" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
    <path class="wp-block-show-all__bg" d="M1349 234L1920 0v361H0z" fill="#000"></path>
    <path class="wp-block-show-all__push" d="M1445 197.5L1920 4v249z" fill="#BE4C4C"></path>
  </svg>
  @if($show_link === true)
    <a class="wp-block-show-all__cta" href="https://www.inrage.fr/portfolio/">
      @svg('svg.icon-more')
      {!! $label !!}
    </a>
  @endif
</div>
