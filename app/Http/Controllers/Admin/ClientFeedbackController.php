<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientFeedback;
use Toastr;
use Image;
use File;
class ClientFeedbackController extends Controller
{
    
    public function index(Request $request)
    {
        $show_data = ClientFeedback::orderBy('id', 'DESC')->get();
        return view('backEnd.clientfeedback.index', compact('show_data'));
    }
    public function create(){
        return view('backEnd.clientfeedback.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'company' => 'required',
            'ratting' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
        // image with intervention
        $image = $request->file('image');
        $name = time() . '-' . $image->getClientOriginalName();
        $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name);
        $name = strtolower(preg_replace('/\s+/', '-', $name));
        $uploadpath = 'public/uploads/feedback/';
        $imageUrl = $uploadpath . $name;
        $img = Image::make($image->getRealPath());
        $img->encode('webp', 90);
        $width = "";
        $height = "";
        $img->height() > $img->width() ? ($width = null) : ($height = null);
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($imageUrl);

        $image2 = $request->file('company');
        $name2 = time() . '-' . $image2->getClientOriginalName();
        $name2 = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name2);
        $name2 = strtolower(preg_replace('/\s+/', '-', $name2));
        $uploadpath2 = 'public/uploads/feedback/';
        $image2Url = $uploadpath2 . $name2;
        $img2 = Image::make($image2->getRealPath());
        $img2->encode('webp', 90);
        $width = "";
        $height = "";
        $img2->height() > $img2->width() ? ($width = null) : ($height = null);
        $img2->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img2->save($image2Url);

        $input = $request->all();
       
        $input['image'] = $imageUrl;
        $input['designation'] = 'test';
        $input['company'] = $image2Url;
        // dd($input);
        ClientFeedback::create($input);
        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('clientfeedback.index');
    }

    public function edit($id)
    {
        $edit_data = ClientFeedback::find($id);
        return view('backEnd.clientfeedback.edit', compact('edit_data'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);
        $update_data = ClientFeedback::find($request->id);
        $input = $request->all();
        $image = $request->file('image');
        if($image){
            // image with intervention 
            $name =  time().'-'.$image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp',$name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));
            $uploadpath = 'public/uploads/feedback/';
            $imageUrl = $uploadpath.$name; 
            $img=Image::make($image->getRealPath());
            $img->encode('webp', 90);
            $width = "";
            $height = "";
            $img->height() > $img->width() ? $width=null : $height=null;
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($imageUrl);
            $input['image'] = $imageUrl;
            File::delete($update_data->image);
        }else{
            $input['image'] = $update_data->image;
        }
        $image2 = $request->file('company');
        if($image2){
            $name2 = time() . '-' . $image2->getClientOriginalName();
            $name2 = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp', $name2);
            $name2 = strtolower(preg_replace('/\s+/', '-', $name2));
            $uploadpath2 = 'public/uploads/feedback/';
            $image2Url = $uploadpath2 . $name2;
            $img2 = Image::make($image2->getRealPath());
            $img2->encode('webp', 90);
            $width = "";
            $height = "";
            $img2->height() > $img2->width() ? ($width = null) : ($height = null);
            $img2->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img2->save($image2Url);
            $input['company'] = $update_data->company;
        }
        $input['status'] = $request->status?1:0;
        $update_data->update($input);


        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('clientfeedback.index');
    }

    public function inactive(Request $request)
    {
        $inactive = ClientFeedback::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = ClientFeedback::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = ClientFeedback::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }
}
