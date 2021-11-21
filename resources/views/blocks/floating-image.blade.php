<div class="{{ $block->classes }} {{ $first_child === true ? 'wp-block-floating-image--first' : '' }}">
  {!! wp_get_attachment_image($image, 'full', false, ['class' => 'wp-block-floating-image__float']) !!}
  <InnerBlocks />
</div>
