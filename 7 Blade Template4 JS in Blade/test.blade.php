@php
    $user = "M";
    $fruits=['Apple','Banana','Grapes','orange'];
@endphp

<script>
    var data= @json($user);
    console.log(data);
    
</script>
<script>
    var data= @json($fruits);
    
    data.forEach(function(entry){
        console.log(entry);
        
    });
</script>