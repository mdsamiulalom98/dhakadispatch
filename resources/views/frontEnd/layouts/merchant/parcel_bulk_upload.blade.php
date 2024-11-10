@extends('frontEnd.layouts.merchant.master')
@section('title','Parcel Bulk Upload')
@section('content')
	<div class="page-header">
		<h5>Parcel Bulk Upload</h5>
	</div>
	<div class="page-content">
		<div class="row">
			<div class="col-sm-12">
				<div class="parcel-create">
					<form action="{{ route('merchant.parcel.bulk_import') }}" method="POST"
                        enctype="multipart/form-data" data-parsley-validate="" class="row">
                        @csrf
                        <div class="col-sm-6">
                        	<div class="row">
		                        <div class="col-sm-12 mb-3">
		                            <label class="form-label" for="excel">File (xls,xlsx)<span>*</span></label>
		                            <div class="form-group">
		                                <input type="file" accept=".xls, .xlsx" class="form-control {{ $errors->has('excel') ? 'is-invalid' : '' }}" name="excel" id="excel" value="{{old('excel')}}" required>
		                                @if($errors->has('excel'))
		                                     <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $errors->first('excel') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <!-- col end -->
		                        <div class="col-sm-3 mt-1">
                                    <div class="form-group">
                                        <button class="btn-submit d-block">Submit</button>
                                    </div>
                                </div>
                        	</div>
                        </div>
                        <div class="col-sm-6">
                        	<ul class="excel-hints">
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Uploaded file type must be .xlsx or xls format.</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>No allow blank row at first</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Must be need Name, Phone, Address, Service Type, Zone, Cod, Weight. Column and Note (optional)</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Service Type Note : Regular  = 1 , Express = 2 , Shop To Doorstop = 5</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Delivery Zone Note : Inside Dhaka = 1, Dhaka Suburb = 2 , Outside Dhaka = 3</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Amount must be numeric value and must include delivery charge. (Wrong : 1000tk, Correct : 1000)</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Uploaded file type must be .xlsx or xls format.</p></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Demo Format</p></li>
                        		<li><img src="{{asset('public/frontEnd/images/demo-import.png')}}" alt=""></li>
                        		<li class="d-flex"><i class="fa-solid fa-circle-check"></i> <p>Download Demo Import File:</p></li>
                        		<h6><a href="{{asset('public/frontEnd/images/demo-import.xlsx')}}" download="">Demo-excel.xlsx</a></h6>

                        	</ul>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection