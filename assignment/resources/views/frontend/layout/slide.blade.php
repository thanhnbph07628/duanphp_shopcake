@foreach($showslide as $inra)
@if($inra->trangthai == 1)
<div class=" w3-display-container" style="position:relative; ">
    <div style="position:absolute;width: 400px;height: 400px;top: 140px;left: 330px;">
        <b style="color:#fff;font-size:40px">{{$inra->tieude}}</b>
        <b style="color: #fff;">{!!$inra->mota!!}</b>
        <a href="{{route('shop')}}"><button type="button" class="btn" style="background-color: #FF66FF; color:#fff;">Chi tiết--></button></a>
    </div>
  <img class="mySlides" src="{{$inra->images}}" style="width:100%;height:550px">
</div>
@endif
@endforeach
<!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->



@section('css')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
@endsection

@section('js')
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
@endsection