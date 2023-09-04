@extends('layouts.masterlayout')


{{-- @section('content')
<h2>Home Page</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores molestiae iure est provident quasi consequuntur error fuga, odit at, quidem cupiditate aperiam architecto vero, laboriosam libero minima doloremque. Fugiat, optio!</p>
@endsection --}}


@section('title')

Home

@endsection


@push('script')

<script src='/example.js'></script>
<script src='/bootstrap.js'></script>
<script src='/cjs.js'></script>

@endpush


@push('script')

<script src='/vue.js'></script>


@endpush

@push('style')

<link href="/css/bootstrap.css">

@endpush


@prepend('style')

#wrapper{
    background: tan;
}
    
@endprepend