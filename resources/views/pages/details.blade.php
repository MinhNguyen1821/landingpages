@extends('welcome')
@section('content')
@foreach($results as $pro)
<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{asset('public/images/home/product1.jpg')}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								<h2>{{ $pro->pro_name }}</h2>
								
								
								<span>
									<span> {{ $pro->pro_price }}$</span>
									
									
								</span>
								<p><b>Descript:</b> {{ $pro->pro_des }}</p>
								
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
</div>
@endforeach
@endsection