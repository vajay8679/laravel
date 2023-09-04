#Use of JS in Laravel



<script>
    //  var data  = {{ $user }}  #error
    // var data  = @json($fruits);
    var data = {{ Js::from($fruits) }};
    data.forEach(function(entry) {
        console.log(entry);
    });
    // console.log(data)
</script>



#in layout.blade.php
@stack('script)


#in welcome
@push('script')

<script src='/example.js'></script>
<script src='/bootstrap.js'></script>
<script src='/cjs.js'></script>

@endpush

we can use multiple time @push but cant use @section


#use of below before @push('style') 

@prepend('style')
