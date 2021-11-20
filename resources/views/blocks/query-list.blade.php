<div class="{{ $block->classes }} wp-block-query-list--{{ $posts_per_page }}">
  @while($query_list->have_posts()) @php $query_list->the_post() @endphp
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile @php wp_reset_postdata() @endphp
</div>
