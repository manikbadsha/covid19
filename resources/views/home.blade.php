@extends('layouts.app')

@section('content')
<div class="container">
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
                           <p>
                               This tool can help you understand what to do next about COVID-19.<br>
                                Let’s all look out for each other by knowing our status, trying not to
                                infect others, and reserving care for those in need.
                            </p>
                           </div>
                           <div class="col-lg-6">
                                <img src="{{url('/')}}/img/covid.jpg" alt="" style="border-radius: 30px; height: 300px; width:200px">
                           </div>
                       </div>


                       <div class="row justify-content-left ">
                        <a href="{{url('user/input')}}"> <button class="btn btn-primary fron ">Start Screerning</button></a>
                       
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
