@extends('frontEnd.layouts.merchant.master')
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
					<form  class="row">
                        <div class="col-sm-12 mb-3">
                            <label class="form-label" for="service_id">Service Type<span>*</span></label>
                            <div class="form-group">
                                <select class="form-control select2 service_id" name="service_id" id="service_id">
                                    <option value="">Select..</option>
                                    @foreach ($servicetypes as $key => $value)
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
                                <label class="form-label" for="zone_id">Delivery Zone<span>*</span></label>
                                <select class="form-control select2 zone cost_calculate2" name="zone_id" id="zone_id">
                                    <option value="">Select..</option>
                                </select>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <label class="form-label" for="district">District<span>*</span></label>
                            <div class="form-group">
                                <select class="form-control select2 district cost_calculate2" name="district" id="district">
                                    <option value="">Select..</option>
                                </select>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="area">Thana/Area<span>*</span></label>
                                <select class="form-control select2 area cost_calculate2" name="area" id="area">
                                    <option value="">Select..</option>s
                                </select>
                            </div>
                            <!-- form group -->
                        </div>
                        <!-- col end -->
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="to">Weight (KG)</label>
                                <input type="number" value="0.5" class="form-control cost_calculate2" id="weight" min="0.5"  step="0.5" required>
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
    $('.cost_calculate2').on('change', function(){
        var service_id = $('#service_id').val();
        var zone_id    = $('#zone_id').val();
        var district = $('#district').val();
        var area = $('#area').val();
        var weight = $('#weight').val();
        if(service_id,zone_id,district,area){
            $.ajax({
               type:"GET",
               data:{service_id,zone_id,district,area,weight},
               url:"{{route('merchant.parcel.cost_calculate')}}",
               success:function(res){               
                if (res.status === 'success') {
                    $('.estimate_cost').html('<h5><strong>Your parcel cost is: </strong>' + res.delivery_charge + ' Tk' + '</h5>');
                }
               }
            }); 
        }
    })
</script>
@endpush