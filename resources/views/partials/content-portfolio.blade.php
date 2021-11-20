<article class="project-item">
  <a href="{{ get_the_permalink() }}" class="project-item__cover">
    {!! get_the_post_thumbnail(get_the_ID(), 'post-thumbnail') !!}
  </a>
  <h3 class="project-item__title">{!! get_the_title() !!}</h3>
  <span class="project-item__category">{{ $support }}</span>
</article>
