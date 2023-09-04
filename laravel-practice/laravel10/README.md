#used for including content of the page in with layout inheritance

@yield('content')


#extend layout file in all the folders

@extends('layouts.masterlayout')


#inside section give name of yield('content')

@section('content')

@endsection



#default value in yield

@yield('title','Website')

#check if content is available or not use @hasSection to check

@hasSection('content')
       @yield('content')
    @else
    <h2> No Content found</h2>        
@endif


# @section takes only first time second time it didnot takes


#parent use if we want to add content

@section('sidebar')

@parent

<p>This are the Languages</p>

@endsection


#to show absolute path
<link href="{{ asset('css/style.css') }}">