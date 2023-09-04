<h1>User Page</h1>
{{-- <h3>Hello {{ $users }} </h3> --}}
{{-- <h3>City Name : {{ $city }} </h3> --}}

{{-- <h3>City Name : {{ !empty($city) ? $city : "No City" }} </h3> --}}


{{-- <h3>JS : {!! $js !!} </h3> --}}

@foreach ($users as $id=> $u)
    <h3> {{ $id }}  {{ $u['name'] }} |  {{ $u['phone'] }} |  {{ $u['Address'] }} |
    <a href="{{ route('view.user',$id) }}"> Show </a></h3>
@endforeach