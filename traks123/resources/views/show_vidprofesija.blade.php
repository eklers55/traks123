@extends('layouts.master')
@section('content')
<div class="container">
        <div class="row justify-content-center">
                        @foreach($vidprofesija as $key => $value) 
                                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">IZVĒLĒTĀ PROFESIJA:</h2> 
                                <br>
                                <h1 class="page-section-heading text-center text-uppercase text-primary mb-0 "> {!! $value->nosaukums !!}</h2>
                                <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon">
                                                  <i class="fas fa-star"></i>
                                                </div>
                                                <div class="divider-custom-line"></div>
                                              </div>    
                                              <div>
                                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">VIDĒJĀ ALGA PROFESIJĀ:</h2> 
                                <br>
                                              </div>
                                <h1 class="page-section-heading text-center text-uppercase text-primary mb-0 ">{!! $value->alga !!}</h2>
                                <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon">
                                                  <i class="fas fa-star"></i>
                                                </div>
                                                <div class="divider-custom-line"></div>
                                              </div>
                @endforeach
                <br>
                <h2 class="text-uppercase text-secondary mb-0">Top 5 uzņēmumi ar lielākajām algām šajā profesijā: </h2>
                <br>
                <table style="width:100%">
                    <tr>
                      <th>Uzņēmums</th>
                      <th>Alga</th>
                    </tr>
                    @foreach($topprofesija as $keys => $values)
                    <tr>
                      <td>{!! $values->uznemums !!}</td>
                      <td>{!! $values->alga !!}</td>
                    </tr>
                    @endforeach
                  </table>
                
                

        </div>
</div>
@endsection


