@php
// $employee_names = ["Ajay Kumar","Amit","sumit","Raja","Ravi","Hariom"]

// $employee_names = ["one"=>"Ajay Kumar","two"=>"Amit","three"=>"sumit","four"=>"Raja","five"=>"Ravi","six"=>"Hariom"]

   $employee_names = [];
   $x = "Hello";
// $x = true
@endphp

{{-- @include('pages.header',['names'=> $employee_names]) --}}
{{-- @includeWhen(false,'pages.header',['names'=> $employee_names]) --}}
{{-- @includeWhen(true,'pages.header',['names'=> $employee_names]) --}}
{{-- @includeWhen($x,'pages.header',['names'=> $employee_names]) --}}
{{-- @includeWhen(empty($x),'pages.header',['names'=> $employee_names])   --}}

@includeUnless(empty($x),'pages.header',['names'=> $employee_names])

{{-- @include('pages.header',['name'=> "Ajay Kumar Verma"]) --}}

<h1>Our First Project</h1>

@include('pages.footer')

{{-- @include('pages.content') --}}

@includeIf('pages.content')









{{-- <a href='/about'>About Page</a>
    <a href="{{ route('mypost') }}">Post page</a>    --}}

{{-- {{ 5+7}}

<br><br>

{{ "Hello World"}}


<br><br>

{{ "<h1>Hello World</h1>"}}

<br><br>

{!! "<h1>Hello AJAY</h1>"!!}


<br><br>

{!! "<script>alert('Hello AJAY')</script>"!!}


<br><br>

{{ "<script>alert('Hello AJAY')</script>"}}
 --}}

{{-- @php 
$user="Ajay";
@endphp
<br><br>
{{ $user }} --}}



{{-- @php 
$names=["Ajay Kumar","Amit Kumar","Sumit Kumar","Ajay Kumar","Amit Kumar","Sumit Kumar"];
$users = "Ajay Kumar";
@endphp
<br><br> --}}

{{-- <ul> --}}
{{-- @foreach ($names as $n) --}}
{{-- <li>{{ $loop->iteration }} - {{ $n}}</li> --}}
{{-- <li>{{ $loop->index }} - {{ $n}}</li> --}}
{{-- <li>{{ $loop->count }} - {{ $n}}</li> --}}

{{-- @if($loop->first)
    <li style="color: red"> {{ $n }} </li>
@elseif($loop->last)
    <li style="color: green"> {{ $n }} </li>
@else
    <li > {{ $n }} </li>
@endif --}}

{{-- @if($loop->even)
    <li style="color: red"> {{ $n }} </li>
@elseif($loop->odd)
    <li style="color: green"> {{ $n }} </li>
@endif --}}
{{-- @endforeach --}}
{{-- </ul> --}}

{{-- if we just want to print as it is --}}
{{-- @{{ $users }}

@@if() --}}