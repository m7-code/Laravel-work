<h1>All Student Data</h1>

@foreach ( $students as $data )
    <h3>{{ $data->id}} || {{ $data->name}} || {{ $data->email}} || {{ $data->book}}</h3>
@endforeach
