@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card"> 
                <div class="card-header bg-info">Have you recently started experiencing any of these symptoms?</div>
                <b>Chose all that apply:</b>
                <div class="card-body">
                    <form action="{{url('user/next/second/input')}}" method="post">
                        @csrf
                        <div class="row">

                            <input type="hidden" name="temp" value="{{$data1->temperature}}">
                            <input type="hidden" name="firstinfo_id" value="{{$data1->id}}">
                            <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                Breathing problem   
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                Dry cough
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                Sore throat   
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                Weakness   
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                Runny nose   
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
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













