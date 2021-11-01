@extends('layouts.navbar')
@section('contents')

<div class="container">
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 text-center">
            <img src="{{asset('images/OBJECTS.png')}}" class="w-100">
            <span class="display-5 font-for-span d-block ">Not Found!</span>
            <div class="mb-4 color-grey">We couldn’t find the page you are looking for.</div>
            <a href = "{{route('myhome')}}" class = "links">
            <div class="d-grid ">
             <button class=" btn-for-error" type="button">RETURN BACK HOME</button>
              
            </div>
            </a> 

        </div>
    </div>
</div>

@endsection