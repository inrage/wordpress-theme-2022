<article class="article-item">
  <header class="article-item__top">
    <div class="article-item__cover">
      <a href="{{ get_the_permalink() }}">
        {!! get_the_post_thumbnail(get_the_ID(), 'article-item') !!}
      </a>

      <div class="article-item__date">
        <div class="date">
          <div class="date__day">{{ get_the_date('d') }}</div>
          <div class="date__month">{{ get_the_date('M') }}</div>
        </div>
      </div>
    </div>
    <h3 class="article-item__title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h3>
  </header>

  <div class="article-item__excerpt">
    @php the_excerpt() @endphp
  </div>

  @include('modules.link-arrow', ['link' => get_permalink(), 'text' => 'Lire la suite'])
</article>
