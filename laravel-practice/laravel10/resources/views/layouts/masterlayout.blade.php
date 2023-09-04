<head>
    <title> Yahoo Baba - @yield('title','Website') </title>
</head>

<h3>Header View</h3>


<h1>Yahoo Baba</h1>

<a href="/">Home Page</a>
<a href="/about">About Page</a>
<a href="/post">Post Page</a>

<p>
    {{-- @yield('content') --}}

    @hasSection('content')
       @yield('content')
    @else
    <h2> No Content found.</h2>        
    @endif


    @section('sidebar')
    <li>Python</li>
    <li>PHP</li>
    <li>Ruby</li>
    @show
</p>

<h3>Footer View</h3>
