<section class="section projects">
  <h2 class="title projects__title">Projects</h2>
  @include('components.projects-item', [
    'title' => 'StemApp',
    'front' => '<p>
        For school I worked together with four other students to create an application that\'s supposed
        to be used in classrooms to help the political involvement of students.
      </p>
      <p>It\'s written using Laravel and React and using a PostgresQL database</p>',
      'tech' => ['React', 'Laravel', 'PostgreSQL', 'Git', 'CI'],
      'source' => 'https://github.com/WesleyKlop/ipsen5',
  ])
  @include('components.projects-item', [
    'title' => 'This website',
    'front' => '<p>The site you\'re looking at right now! Designed and made by myself using Laravel. It really helped me better
    my design skills and I think it looks great!</p>',
    'tech' => ['Laravel', 'SCSS', 'JavaScript', 'Git'],
    'source' => 'https://github.com/WesleyKlop/wesley.io',
  ])
</section>
