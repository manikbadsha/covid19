<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\firstinfo;
use App\Second;
use App\decesion;
use App\finalinput;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userInput(){
        return view('user_input');
    }

    public function userNextInput(Request $request){
        if($request->deals !=null){
            if($request->temperature>=37 || $request->temperature>=38.3){
                $count=2;
            }
            else{
                $count=0;
            }
            $ids=firstinfo::insertGetId([
                'age'=>$request->age,
                'user_temperature'=>$request->temperature,
                'sex'=>$request->sex,
                'temperature'=> $count,
          
                
                'created_at'=> Carbon::now()
    
            ]);
            $data1=firstinfo::where('id',$ids)->orderBy('id','desc')->first();
            return view('next_user_input',compact('data1'));
        }
        else{
            Toastr::warning('Please select That the information is correct ', 'Success', ["positionClass" => "toast-top-right"]);
            return back();
        }
       
       
    }

    public function NextInput(Request $request){
       
        $checkbox=$request->deals;
        $temperature=$request->temp;
        $info=$request->firstinfo_id;
        $chk=2+ $temperature; 
        if($checkbox!=null) {
            foreach($checkbox as $item){
                if($item=='on'){
                   
                    $chk+=1;
                  
                }else{
                    $chk=0;
                }
            
            }
        } 
        
        else{
            $chk=$temperature;
        }
        
        

        $second_id=Second::insertGetId([

            'checkboxitem'=>$chk,
            'firstinfo_id'=> $info,

            'created_at'=> Carbon::now()

        ]);
        $data2=Second::where('id',$second_id)->orderBy('id','desc')->first();

        return view('next_second_input',compact('data2'));
    }


    public function finalInput(Request $request){
       
        $checkbox=$request->deals;
        $final=$request->temp;
        $info=$request->finalinfo_id;
        $chk=0+$final;
        if($checkbox!=null){
            foreach($checkbox as $item){
                if($item=='on'){
                   
                    $chk+=2;
                  
                }else{
                    $chk=0;
                }
            
            }
        }
        else{
            $chk=$final;
        }
       
        $final_id=finalinput::insertGetId([
            'checkboxitem'=>$chk,
            'finalinfo_id'=>$info,
            'created_at'=> Carbon::now()

        ]);
        $data=finalinput::where('id',$final_id)->orderBy('id','desc')->first();

       
            $data3=$data->checkboxitem;
            if($data3 <'5'){
               $decession=decesion::insertGetId([
                    'decesion'=>"negative",
                    'final_id'=>$final_id,
                    'created_at'=> Carbon::now()
        
                ]);
                $dataInfo=DB::table('decesions')
                ->join('finalinputs','decesions.final_id','=','finalinputs.id')
                ->join('seconds','finalinputs.finalinfo_id','=','seconds.id')
                ->join('firstinfos','seconds.firstinfo_id','=','firstinfos.id')
                ->select('decesions.*','finalinputs.checkboxitem as data','firstinfos.*')
                ->where('decesions.id', $decession)
                ->orderBy('decesions.id','desc')
                ->paginate(2);
            
                return view('negative',compact('dataInfo'));
            } 
            else if($data3 =='5'){
                $decession=decesion::insertGetId([
                    'decesion'=>"positive",
                    'final_id'=>$final_id,
                    'created_at'=> Carbon::now()
        
                ]);
                $dataInfo=DB::table('decesions')
                ->join('finalinputs','decesions.final_id','=','finalinputs.id')
                ->join('seconds','finalinputs.finalinfo_id','=','seconds.id')
                ->join('firstinfos','seconds.firstinfo_id','=','firstinfos.id')
                ->select('decesions.*','finalinputs.checkboxitem as data','firstinfos.*')
                ->where('decesions.id', $decession)
                ->orderBy('decesions.id','desc')
                ->paginate(2);
            
                return view('positive',compact('dataInfo'));
            }  
            
            else if($data3 >'5' && $data3 <'7'){
                $decession=decesion::insertGetId([
                    'decesion'=>"positive",
                    'final_id'=>$final_id,
                    'created_at'=> Carbon::now()
        
                ]);
                $dataInfo=DB::table('decesions')
                ->join('finalinputs','decesions.final_id','=','finalinputs.id')
                ->join('seconds','finalinputs.finalinfo_id','=','seconds.id')
                ->join('firstinfos','seconds.firstinfo_id','=','firstinfos.id')
                ->select('decesions.*','finalinputs.checkboxitem as data','firstinfos.*')
                ->where('decesions.id', $decession)
                ->orderBy('decesions.id','desc')
                ->paginate(2);
            
                return view('high_positive',compact('dataInfo'));
            }     
            
            
            else{
                $decession=decesion::insertGetId([
                    'decesion'=>"positive",
                    'final_id'=>$final_id,
                    'created_at'=> Carbon::now()
        
                ]);
                $dataInfo=DB::table('decesions')
                ->join('finalinputs','decesions.final_id','=','finalinputs.id')
                ->join('seconds','finalinputs.finalinfo_id','=','seconds.id')
                ->join('firstinfos','seconds.firstinfo_id','=','firstinfos.id')
                ->select('decesions.*','finalinputs.checkboxitem as data','firstinfos.*')
                ->where('decesions.id', $decession)
                ->orderBy('decesions.id','desc')
                ->paginate(2);
               
            
                return view('corona_positive',compact('dataInfo'));
            }         



       
        return view('output',compact('data'));
    }


}
