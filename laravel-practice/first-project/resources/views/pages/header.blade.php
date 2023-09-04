<h1>Header Page</h1>

{{-- <p> {{ $name }} </p> --}}

{{-- @foreach ($names as $n)
    <p> {{ $n }} </p>    
@endforeach --}}


{{-- @foreach ($names as $key => $value)
    <p>{{ $key }} - {{ $value }} </p>    
@endforeach --}}


@forelse ($names as $key => $value)
    <p> {{key}} - {{$value}} </p>
@empty
    <p> Data Not found.</p>
@endforelse
