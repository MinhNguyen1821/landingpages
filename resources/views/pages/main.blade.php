@extends('welcome')
@section('content')
@foreach($results as $pro)
<div class="col-sm-4">
    
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{('public/images/home/product1.jpg')}}" alt="" />
                                            <h2>{{ $pro->pro_price }}</h2>
                                            <p>{{ $pro->pro_name }}</p>
                                            <a href="{{URL::to('/details/'.$pro->pro_id)}}" class="btn btn-default add-to-cart"></i>Details</a>
                                        </div>
                                        
                                </div>
   
                            </div>
                        </div>
       @endforeach  
@endsection