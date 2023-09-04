@php
    $user = "Yahoo Baba";
    $fruits = ['Mango','Apple','Orange','Banana'];
@endphp


<script>
    //  var data  = {{ $user }}  #error
    // var data  = @json($fruits);
    var data = {{ Js::from($fruits) }};
    data.forEach(function(entry) {
        console.log(entry);
    });
    // console.log(data)
</script>