<div class="new-card">
    <a href="{{route('news.new', $new)}}">
        <img class="bg-card" src="{{ $new->{'image-url'} }}" alt="media">
        <h4 class="new-card__title">{{ $new->title }}</h4>
        <h6 class="new-card__desc">{{ $new->description }}</h6>
    </a>
</div>
