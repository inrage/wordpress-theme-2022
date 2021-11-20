<div class="push-diag push-diag--top--{{ $bg_top_outer }} push-diag--bottom--{{ $bg_bottom_outer }} fullsize {{ $block->classes }}" {!! $bg_img ? 'style="background-image: url('.$bg_img.');"' : null !!}>
  <svg class="push-diag__top" height="361" preserveAspectRatio="xMidYMax slice" viewBox="0 0 1920 361" width="1920" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
    <path class="push-diag__top-bg" d="M1349 234L1920 0v361H0z" fill="#000"></path>
    <path class="push-diag__top-corner" d="M1445 197.5L1920 4v249z" fill="#BE4C4C"></path>
  </svg>
  <div class="push-diag__content">
    <div class="container">
      <InnerBlocks />
    </div>
  </div>
  <svg class="push-diag__bottom" height="361" preserveAspectRatio="xMidYMax slice" viewBox="0 0 1920 361" width="1920" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
    <path class="push-diag__bottom-bg" d="M1349 234L1920 0v361H0z" fill="#000"></path>
    <path class="push-diag__bottom-corner" d="M1445 197.5L1920 4v249z" fill="#BE4C4C"></path>
  </svg>
</div>
