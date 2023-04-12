@extends('layouts.app')


@section('title', 'Projects')

@section('actions')
<div>
  <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
    Aggiungi nuovo progetto
  </a>
</div>
@endsection

@section('content')
<section class="card">

  <div class="card-body">


    <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Titolo</th>
              <th scope="col">Abstract</th>
            </tr>
          </thead>
          <tbody>

            @forelse($projects as $project)

            <tr>
              <th scope="row">{{ $project->id }}</th>
              <td>{{ $project->title }}</td>
              <td>{{ $project->getAbstract() }}</td>
              <td>
                <a href="{{ route('admin.projects.show', $project)}}">
                    <i class="bi bi-eye"></i>
                </a>
              </td>
            </tr>
            @empty   
            @endforelse

          </tbody>
      </table>

      {{ $projects->links() }}
    </div>

</section>

@endsection