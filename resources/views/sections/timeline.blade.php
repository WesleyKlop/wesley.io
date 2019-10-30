<section class="section timeline">
    <h2 class="title timeline__title">Years in review</h2>
    <div class="timeline__header">
        <div class="timeline__line"></div>
        @foreach($timeline->keys() as $year)
            <a href="#" class="timeline__button" data-year="{{ $year }}">{{ $year }}</a>
        @endforeach
    </div>
    <div class="timeline__content">
        @foreach($timeline as $item)
            @include('components.timeline-item', [
            'year' => $item->year,
            'content' => $item->text,
            'visible' => $loop->first
            ])
        @endforeach
    </div>
</section>
