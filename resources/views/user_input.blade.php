
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card"> 
                <div class="card-header bg-info">User Information</div>
                <div class="card-body">
                    <form action="{{url('user/next/input')}}" method="post">
                        @csrf
                    <div class="row">
                         <div class="col-lg-6">
                             <div class="form-group">
                                <label for="">Age:</label>    
                                <input class="form-control" type="text" placeholder="Enter Age" name="age">
                            </div>
                        </div>
                        
                         <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Sex:</label>    
                                <input class="form-control" type="text" placeholder="Enter Sex (Male/Female)" name="sex">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="">Temperature:</label>    
                                <input class="form-control" type="number" placeholder="Enter Body Temperature (C)" name="temperature">
                            </div>
                        
                        </div>
                    </div>
                    <div class="row mt-4">
                         <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                         <div class="checkbox-left"> 
                                         Confirm that information are correct
                                         </div>
                                         <div class="chekbox-rightt"> 
                                          <input class="checkbox" type="checkbox" name="deals" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                         </div>
                            </div>
                        
                    </div>
                    <div class="row justify-content-center mt-4">
               
                     
                        <button type="submit" class="btn btn-primary fron">Next</button>
        
                        
                    </div>
                    </form>
                   
                    
                </div>
                 
                   
                    
               
            
        </div>
    </div>
</div>
<style>
  
  .fron{
       border: 1px solid wheat;
       border-radius: 60px;
       text-align: center;
       height: 50px;
       width: 250px;
   }
  
  .checkbox-wrap{
    display: flex;
    width: 440px;
    background: #fafbfc;
    margin-bottom: 20px;
    border: 1px solid #dae2e6;
    border-radius: 50px;
    padding: 10px 20px;
    justify-content: space-between;
    align-items: center;
  }
  .checkbox-wrap .chekbox-rightt{
    position: relative;
    width: 102px;
    height: 38px;
  }
  .checkbox-wrap .checkbox{
    width: 80%;
    height: 80%;
    border: 1px solid #dae2e6;
    border-radius:70px;
    
  }
   
</style>

@endsection







