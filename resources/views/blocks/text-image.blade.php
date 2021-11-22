<div class="{!! $block->classes !!} {{ $image_position === 'right' ? 'wp-block-text-image--inverse' : '' }}">
  <div class='wp-block-text-image__image'>
    {!! wp_get_attachment_image($image, 'full') !!}
  </div>

  <div class='wp-block-text-image__content'>
    <InnerBlocks />
  </div>
</div>
