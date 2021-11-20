<div class="{{ $block->classes }}">
  <div class="job-item">
    <div class="job-item__logo">
      {!! $logo !!}
    </div>

    <h3 class="job-item__title">{{ $title }}</h3>
    <div class="job-item__company">{{ $company }}</div>
    <div class="job-item__duration">{{ $duration }}</div>
    <div class="job-item__content">{{ $description }}</div>
  </div>
</div>
