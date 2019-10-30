<section class="section projects">
    <h2 class="title projects__title">Projects</h2>
    @foreach($projects as $project)
        @include('components.projects-item', [
          'title' =>$project->title,
          'description' => $project->description,
          'tech' => $project->skills,
          'source' => $project->url,
        ])
    @endforeach
</section>
