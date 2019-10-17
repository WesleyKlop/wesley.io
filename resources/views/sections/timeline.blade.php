<section class="section timeline">
  <h2 class="title timeline__title">Years in review</h2>
  <div class="timeline__header">
    <a href="#" class="timeline__button" data-year="2014">2014</a> •
    <a href="#" class="timeline__button" data-year="2015">2015</a> •
    <a href="#" class="timeline__button" data-year="2016">2016</a> •
    <a href="#" class="timeline__button" data-year="2017">2017</a> •
    <a href="#" class="timeline__button" data-year="2018">2018</a> •
    <a href="#" class="timeline__button active" data-year="2019">2019</a>
  </div>
  <div class="timeline__content">
    @foreach([2014, 2015, 2016, 2017, 2018] as $year)
      @include('components.timeline-item', [
      'year' => $year,
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cumque, debitis dicta distinctio dolorem dolores earum explicabo id molestiae officia quaerat quia quisquam quo repellendus tempore, tenetur velit voluptatem voluptatum.'
      ])
    @endforeach
    @include('components.timeline-item', [
      'visible' => true,
      'year' => 2019,
      'content' => '<p>
    At the beginning of this year I started my first real development job as a web developer at
    <a href="https://inthere.nl" rel="nofollow noreferrer" target="_blank">InThere</a>. At this company I am
    developing and maintaining a web application that I helped migrate from a custom framework to Laravel!
    I also finished my board year as treasurer at the study association which was a lot of fun.
  </p>'
    ])

  </div>
</section>
