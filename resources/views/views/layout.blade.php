@extends("views.master")
@section('title','PHP')
@section("noidung")
day la trang layout
<?php $hoten= "lap trinh laravel" ;?>
{{$hoten}}

@for($i=0; $i <= 10 ; $i++)
	so thu tu: {{$i}} <br/>
@endfor
<hr>
<?php $i=0; ?>
@while ($i <=10)
	so thu tu: {{$i}} <br>
	<?php $i++; ?>
@endwhile
<hr>
<?php $array = ["com","chao","pho"]; ?>
@foreach ($array as $item)
{{ $item }}
@endforeach

@stop