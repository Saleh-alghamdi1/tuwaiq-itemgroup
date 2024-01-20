@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success">تعديل بيانات العنصر :</h1>
        <div class="col mt-3">
            <div class="card ">
                <div class="card-body d-flex justify-content-center">

                    <form action="{{route('Updateitem')}}" method="post"> 
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        
                        <label  for="nameitem">اسم العنصر</label>
                        <input type="text" name="nameitem" id="nameitem" value="{{$item->itemname}}">

                        <label for="priceitem">سعر العنصر</label>
                        <input type="text" name="priceitem" id="priceitem" value="{{$item->price}}">

                        <label for="coloritem">اللون </label>
                        <input type="text" name="coloritem" id="coloritem" value="{{$item->color}}">


                        <label for="qtyitem">الكمية </label>
                        <input type="text" name="qtyitem" id="qtyitem" value="{{$item->qty}}">

                        <div class="text-center">
                            <button class="btn btn-success mt-2" type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection