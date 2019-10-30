<section class="section skills">
    <h2 class="title skills__title">Skills</h2>

    <p class="skills__description">These are the technologies and languages I can work with.</p>

    @foreach($skills as $parent)
        <article class="skills-column">
            <h3 class="title">{{ $parent->name }}</h3>
            <ul>
                @foreach($parent->allChildren as $child)
                    <li>
                        {{ $child->name }}
                        @if(! $child->allChildren->isEmpty())
                            <ul>
                                @foreach($child->allChildren as $child)
                                    <li>{{ $child->name }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </article>
    @endforeach
</section>
