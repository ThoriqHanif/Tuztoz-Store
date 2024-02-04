<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FooterController extends Controller
{
    public function footer()
    {
        $parent = \DB::table('footer')->where('parent',NULL)->get();
        $data = \DB::table('footer')->get();
        return view('components.admin.footer',compact('parent','data'));
    }
    
    public function footerParent(Request $request)
    {
         $request->validate([
               'nama_footer' => 'required'
            ]);
            
        \DB::table('footer')->insert([
            'nama_footer' => $request->nama_footer
        ]);
        
        
        return back()->with('success','Berhasil');
        
    }
    
    public function footerChild(Request $request)
    {
         $request->validate([
               'nama_footer' => 'required',
               'parent' => 'required'
            ]);
         
         \DB::table('footer')->insert([
            'nama_footer' => $request->nama_footer,
            'parent'=> $request->parent,
            'url_footer' => $request->url_footer
        ]);
        
        
        return back()->with('success','Berhasil');
        
    }
    
    public function footerDelete($id)
    {
        $data = \DB::table('footer')->where('id',$id)->first();
        
        if($data->parent !== NULL){
            
             \DB::table('footer')->where('id',$id)->delete();
            
        }else{
            
            
           \DB::table('footer')->where('parent',$id)->delete();
           \DB::table('footer')->where('id',$id)->delete();
            
            
        }
        
        return back()->with('success','Berhasil');
    }
    
}
