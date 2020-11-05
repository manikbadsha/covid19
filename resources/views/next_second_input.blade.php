
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card"> 
            <div style="font-size: 20px; font-weight: 600 padding:5px" class="card-header bg-primary"> additional information about symptoms</div>
                <b style="font-size:15px; padding:5px">Chose all that apply:</b>
                <div class="card-body">
                    <form action="{{url('user/final/input')}}" method="post">
                        @csrf
                        <input type="hidden" name="temp" value="{{$data2->checkboxitem}}">
                        <input type="hidden" name="finalinfo_id" value="{{$data2->id}}">
                       
                        <div class="row">
                            <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                  Abdominal pain
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                 Vomiting
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                 Diarrhoea
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                 Chest pain or pressure
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                  Muscle pain
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                  Loss of taste or smell
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                 Rash on skin, or discoloration of fingers or toes
                                </div>
                                <div class="chekbox-rightt"> 
                                 <input class="checkbox" type="checkbox" name="deals[]" id="sat1"> <label for="sat1"></label> &nbsp;&nbsp;
                                </div>
                            </div>
                             <div class="col-lg-12 form-group checkbox-wrap">
                                         
                                <div class="checkbox-left"> 
                                Loss of speech or movement
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


