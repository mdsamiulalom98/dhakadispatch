@extends('frontEnd.layouts.master')
@section('title', $details->title)
@section('content')
<div class="post-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="post-breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a><i class="fa-solid fa-angle-right"></i></a></li>
                        <li><a>User Menual</a></li>
                        <li><a><i class="fa-solid fa-angle-right"></i></a></li>
                        <li><a>{{$details->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-section">
                    <h4 class="page-title">{{$details->title}}</h4>
                    <div>{!! $details->description !!}</div>
                </div>
            </div>
        </div>
        <!-- row end -->
    </div>
</div>
@endsection
