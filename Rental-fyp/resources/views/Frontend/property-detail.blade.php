@extends('layouts/header-footer')
@section('content')

<section id="page-header">
    <h2>Property Catelog</h2>
</section>

<section id="prodetails" class="section-p1">

    <div class="single-pro-image">
        <img src="img/" width="100%" id="MainImg" alt="">
        
        <div class="small-img-group">
            <div class="small-img-col">
                <img src="img/" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="img/" width="100%" class="small-img" alt="">
            </div>
        </div>
    </div>
        
    <div class="single-pro-details">
        
    </div>
    <div></div>
</section>


<section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fa-thin fa-arrow-right-long"></i></a>
</section>
    
    
@endsection