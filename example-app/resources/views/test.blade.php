@php
    $names = ['Tuhin','Rafia','Farzana','Suhi'];
@endphp

<script> 
    // let data = @json($names);
    let data  = {{Js::from($names)}}
    data.forEach(function(value){ 
        console.log(value);
    })
</script>