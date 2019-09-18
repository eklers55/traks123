@extends('layouts.master')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            


                @foreach($viddarbavieta as $key => $value)
                
                                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">IZVĒLĒTAIS UZŅĒMUMS:</h2> 
                                <br>
                                <h1 class="page-section-heading text-center text-uppercase text-primary mb-0 ">{!! $value->uznemums !!}</h2>
                                <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon">
                                                  <i class="fas fa-star"></i>
                                                </div>
                                                <div class="divider-custom-line"></div>
                                              </div>
                                        
                
                                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">VIDĒJĀ ALGA UZŅĒMUMĀ:</h2> 
                                <br>
                                <h1 class="page-section-heading text-center text-uppercase text-primary mb-0 ">{!! $value->alga !!}</h2>
                                <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon">
                                                  <i class="fas fa-star"></i>
                                                </div>
                                                <div class="divider-custom-line"></div>
                                              </div>
                
                @endforeach


            
        </div>
</div>
@endsection