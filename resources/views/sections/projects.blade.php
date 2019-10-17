<section class="section projects">
  <h2 class="title projects__title">Projects</h2>
  @include('components.projects-item', [
    'title' => 'StemApp',
    'front' => '<p>
        For school I worked together with four other students to create an application that\'s supposed
        to be used in classrooms to help the political involvement of students.
      </p>
      <p>It\'s written using Laravel and React and using a PostgresQL database</p>
      <a target="_blank" rel="nofollow noreferrer" href="https://github.com/WesleyKlop/ipsen5">StemApp on Github</a>',
      'tech' => ['React', 'Laravel', 'PostgreSQL', 'Git', 'CI'],
  ])
  @include('components.projects-item', [
    'title' => '',
    'front' => '',
    'tech' => []
  ])
</section>
