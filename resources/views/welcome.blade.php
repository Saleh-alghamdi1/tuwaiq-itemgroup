@extends('layouts.app')

@section('content')

<div class="container">
   <h1 class="alert alert-success text-center" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">أهلاً بكم في موقعي</h1>
   <div class="row text-center d-flex align-items-center justify-content-center">

   <!----للانتقال الى صفحةالعناصر-->
   <div class="col-sm-4 text-center">
        <a href="{{route('item')}}">
        <div class="card">
            <div class="card-body">
                <h4> العناصر</h4>
                <h3><i class="bi bi-diagram-2"></i></i></h3>

            </div>
        </div>
              </a>
      </div>
         <!----للانتقال الى صفحة مجموعات العناصر-->
      <div class="col-sm-4 text-center">
        <a href="{{route('itemgroup')}}">
        <div class="card">
            <div class="card-body">
                <h4>مجموعات العناصر</h4>
                <h3><i class="bi bi-collection"></i></i></h3>

            </div>
        </div>
              </a>
      </div>
   </div>
</div>

@endsection