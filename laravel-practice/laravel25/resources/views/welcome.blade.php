<h1> User Detail</h1>

@foreach ($data as $id=> $student )
    <h3>ID:  {{ $student->id }} |
    | Name: {{ $student->name }} |
    | Email: {{ $student->email }} |
    | Age: {{ $student->age }} |
    | City: {{ $student->city_name }} </h3>
@endforeach
