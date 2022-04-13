<?php 
for($i=1;$i<=10;$i++) {
    echo $i ."<br>";
}
?>

@for($i=1;$i<=5;$i++)
    {{$i}}<br>
@endfor
============================
<br>

<?php echo $data['name'];?>

{{$data['name']}}



@if($data['name'] == "Sourabh")
   Name is {{$data['name']}}
@else 
   Name not found
@endif



