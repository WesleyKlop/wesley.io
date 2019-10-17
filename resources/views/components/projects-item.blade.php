<article class="projects-item">
    <h3 class="title">{{ $title }}</h3>
    <ul class="projects-item__tech-chips">
      @foreach($tech as $item)
        <li>{!! $item !!}</li>
      @endforeach
    </ul>
    {!! $front !!}
</article>
