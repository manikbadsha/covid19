@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-header bg-success text-white">
                    View User Details
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Date</th>
                                <th scope="col">Age</th>
                                <th scope="col">Sex</th>
                                <th scope="col">Temperature Celcious</th>
                                <th scope="col">Score</th>
                                <th scope="col">Result</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            
                                 @foreach($dataInfo as $index=>$item)
                                    <tr>
                                    <th scope="row">{{$index+$dataInfo->firstItem()}}</th>
                                    @php
                                    $newdate=Carbon\Carbon::parse($item->created_at)->format('d/m/Y')
                                      
                                    @endphp
                                    <td>{{ $newdate}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{$item->sex}}</td>
                                   
                                    <td>{{$item->user_temperature}}</td>
                                    <td>{{$item->data}}</td>
                                    <td>{{$item->decesion}}</td>
                            
                                
                                </tr>
                                @endforeach
                                
                             
                                

                            
                            
                            </tbody>
                    </table>
                
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>COVID-19</h1>
                    <h2>Screening Tool</h2>
                </div>
                   <div class="card-body">
                       <div class="row">
                          
                           <div class="col-lg-6">
                               <h4> You Should Call 911</h4>
                           <p>
                          
                            Based on your reported symptoms, you should seek care immediately.
                            Possible suspected case for COVID-19 affected
                            </p>
                           </div>
                           <div class="col-lg-6">
                               <h4> Advice</h4>
                           <p>
                          
                           Based on your answers, you should discuss your symptoms with the doctor or care team in charge at your facility.
                            </p>
                           </div>
                       </div>
                   </div>
                   
                    
                    
                    
                   
                    
               
            
        </div>
    </div>
</div>

<style>
   h1{
       font-size: 30px;
       font-family:'Courier New', Courier, monospace;
       font-weight: 600;
      
   }
   .fron{
       border: 1px solid wheat;
       border-radius: 60px;
       text-align: center;
       height: 50px;
       width: 250px;
   }
   h2{
       font-size: 20px;
       font-family:'Courier New', Courier, monospace;
       font-weight: 600;
       padding-top: 0px;
       line-height: 1.5rem;
   }
   p{
       line-height: 1.8rem;
       font-size: 16px;
       font-family:'Courier New', Courier, monospace;
       font-weight: 100;
       padding: 5px;
   }
</style>
@endsection
