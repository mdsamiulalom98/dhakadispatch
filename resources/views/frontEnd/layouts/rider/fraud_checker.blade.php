@extends('frontEnd.layouts.rider.master')
@section('title','Fraud Checker')
@section('content')
    <div class="page-header">
        <h5>Fraud Checker</h5>
    </div>
    <div class="page-content">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form  data-parsley-validate="">
                    <div class="fraud-form">
                        <div class="form-group">
                            <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone" id="phone" value="{{request('phone')}}" placeholder="Search By Phone Number" required>
                            @if($errors->has('phone'))
                                 <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button class="btn-submit d-block"><i class="fa-solid fa-search"></i> Search</button>
                        </div>
                    </div>
                </form>
                <div class="fraud-result">
                    @if( empty(request('phone')) && $total_parcel == 0)
                        <p>Check fraud search by phone number</p>
                    @else
                        @if($total_parcel == 0)
                            <p>The number has no data found!</p>
                        @else
                            <p>The number has found history!</p>
                            <div id="chartContainer" style="height: 200px; width: 100%;"></div>
                            <ul>
                                <li><span class="bg-success"></span> Success: {{$total_parcel-$total_cancel}}</li>
                                <li><span class="bg-danger"></span> Cancelled: {{$total_cancel}}</li>
                            </ul>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
<script>
    window.onload = function () {
    var options = {
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [{
            type: "doughnut",
            innerRadius: "60%",
            dataPoints: [
                { label: "", y: {{$total_parcel}} ,color: "#56A17B"},
                { label: "", y: {{$total_cancel}} , color : "#ffcd00"},
                
            ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);
    
    }
</script>
@endpush