<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
class CatagoryController extends Controller
{
        public function catagory() {
        return view('Admin.Catagory.AddCatagory');
    }

    public function StoreCatagory(Request $request){
      
        $this->validate($request,[
           'catagory_name'=>'required|max:50',
            'catagory_description'=>'required'
        ]);
//         $catagory=new Catagory();
//     $catagory->catagoryName=$request->catagoryName;
//        $catagory->catagoryDescription=$request->catagoryDescription;
//        $catagory->publicationStatus=$request->publicationStatus;
//        $catagory->save();
//        return "catagory Info saved sucessfully";
        
//        Catagory::create($request->all());
//        return "catagory info saved sucessfully";
        $data=array();
        $data['catagory_name']=$request->catagory_name;
        $data['catagory_description']=$request->catagory_description;
        $data['publication_status']=$request->publication_status;
       DB::table('catagory')->insert($data);
        return Redirect::to('/catagory')->with('message','Successfully added!!');
        
    }
    public function ManageCatagory(){
        $catagories=DB::table('catagory')
                      ->get();
              
       return view('Admin.Catagory.manageCatagory',['catagories'=>$catagories]);
    }
    public function PublishedCatagory($catagory_id){
        DB::table('catagory')
                ->where('catagory_id',$catagory_id)
                ->update(['publication_status'=>0]);
                return Redirect::to('/manage-catagory');
        
    }
    public function UnpublishedCatagory($catgory_id){
        DB::table('catagory')
                ->where('catagory_id',$catgory_id)
                ->update(['publication_status'=>1]);
                  return Redirect::to('/manage-catagory');
    }
    public function DeleteCatagory($catagory_id){
        DB::table('catagory')
                ->where('catagory_id',$catagory_id)
                ->delete();
        return Redirect::to('/manage-catagory')->with('message','Sucessfully Deleted!!');
    }
    public function UpdateCatagory($id){
        $UpdateCatagories=DB::table('catagory')
                ->where('catagory_id',$id)
                ->first();
        return view('Admin.Catagory.EditCatagory',['UpdateCatagories'=>$UpdateCatagories]);
    }
    public function editCatagory(Request $request){
        $catagory_id=$request->catagory_id;
          $data=array();
        $data['catagory_name']=$request->catagory_name;
        $data['catagory_description']=$request->catagory_description;
        $data['publication_status']=$request->publication_status;
       DB::table('catagory')
               ->where('catagory_id',$catagory_id)
               ->update($data);
        return Redirect::to('/manage-catagory')->with('message','Successfully Updated!!!!');   
    }
}
