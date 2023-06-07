@extends('layout.main')

@section('content')

  <div class="home">
    <div class="container py-5">

      {{-- @dd($movies) --}}

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Nazionalità</th>
            <th scope="col">Data di uscita</th>
            <th scope="col">Voto</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($movies as $movie)
            <tr>
              <th scope="row">{{ $movie->id }}</th>
              <td>{{ $movie->title }}</td>
              <td>{{ $movie->nationality }}</td>
              <td>{{ $movie->date }}</td>
              <td>{{ $movie->vote }}</td>
              <td><a href="#" class="btn btn-success">Vai</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
