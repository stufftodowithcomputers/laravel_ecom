@extends('master')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($products as $key=>$item)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img class="d-block w-100" src="{{$item['gallery']}}" alt="First slide">
                <div class='carousel-caption text-dark'>
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
        @endforeach            
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mb-5">
    <h1>Trending</h1>
    <div class="d-flex">
        @foreach($products as $key=>$item)
            <a href='/product/{{$item->id}}' style="cursor: pointer;">
                <img class="w-100" src="{{$item['gallery']}}" alt="IMAGE">
                <h6 class='text-center'>{{$item['name']}}</h6>
            </a>
        @endforeach   
    </div>
</div>

@endsection