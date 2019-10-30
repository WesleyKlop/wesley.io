<article class="projects-item">
    <h3 class="title">{{ $title }}</h3>
    <ul class="projects-item__tech-chips">
        @foreach($tech as $item)
            <li>{{ $item->shortName }}</li>
        @endforeach
    </ul>
    {!! $description !!}
    @if(isset($source))
        <div>
            <a target="_blank" rel="nofollow noreferrer" href="{{ $source }}">{{ $title }} source code</a>
        </div>
    @endif
</article>
