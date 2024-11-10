@extends('frontEnd.layouts.rider.master')
@section('title','Parcel Pricing')
@push('css')
 <link rel="stylesheet" href="{{ asset('public/frontEnd/') }}/css/select2.min.css">
 @endpush
@section('content')
	<div class="page-header">
		<h6><strong>Parcel Pricing</strong></h6>
	</div>
	<div class="page-content">
		<div class="row justify-content-center">
			<div class="col-sm-7">
				<div class="price-calculate">
					<form action="" class="row">
                        <div class="col-sm-12 mb-3">
                            <label class="form-label" for="delivery_form">Delivery From</label>
                            <div class="form-group">
                                <select class="form-control select2 cost_calculate" name="from" id="delivery_form" required>
                                    <option value="">Select..</option>
                                    @foreach ($areas as $key => $value)
                                        <option value="{{ $value->id }}">
                                            {{ $value->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="delivery_to">Delivery To</label>
                                <select class="form-control select2 area cost_calculate" name="to" id="delivery_to" required>
                                	<option value="">Select..</option>
                                    @foreach ($areas as $key => $value)
                                        <option value="{{ $value->id }}">
                                            {{ $value->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="to">Weight (KG)</label>
                                <input type="number" class="form-control cost_calculate" id="weight" min="0.5" value="0.5" step="0.5" required>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="estimate_cost"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@push('script')
<script src="{{asset('public/frontEnd/')}}/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
        $('.select2').select2();
    });
    // district to area
    $('.district').on('change',function(){
        var id = $(this).find('option:selected').val();
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"{{route('ajax.areas')}}",
           success:function(res){               
            if(res){
                $(".area").empty();
                $(".area").append('<option value="">Select..</option>');
                $.each(res,function(key,value){
                    $(".area").append('<option value="'+key+'" >'+value+'</option>');
                });
           
            }else{
               $(".area").empty();
            }
           }
        });  
   });
    // cost calculate
    $('.cost_calculate').on('change', function(){
        var delivery_form = $('#delivery_form').val();
        var delivery_to = $('#delivery_to').val();
        var weight = $('#weight').val()??0.5;
        $.ajax({
           type:"GET",
           data:{delivery_form,delivery_to,weight},
           url:"{{route('cost_calculate')}}",
           success:function(res){               
            if (res.status === 'success') {
                $('.estimate_cost').html('<h5><strong>Your parcel cost is: </strong>' + res.delivery_charge + ' Tk' + '</h5>');
            }
           }
        }); 
    })
</script>
@endpush