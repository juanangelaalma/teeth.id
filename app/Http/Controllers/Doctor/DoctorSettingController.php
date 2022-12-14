<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\User;
use App\Services\ImageService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DoctorSettingController extends Controller
{
    public function profile() {
        $user = auth()->user()->load('doctor');
        return view('doctor.settings.profile', compact('user'));
    }

    public function personal_data() {
        $user = auth()->user()->load('doctor');
        return view('doctor.settings.personal_data', compact('user'));
    }

    public function update_profile(Request $request, User $user) {
        $request->validate([
            'name'  => 'required',
            'description' => 'string|nullable',
            'profile_pic_input' => 'image|mimes:jpeg,png,jpg,svg|max:2048,nullable',
        ]);

        if($request->file('profile_pic_input')){
            if($user->doctor->photo) {
                $split = explode('/', $user->doctor->photo);
                $image_location = $split[2] . '/' . $split[3];
                Storage::delete($image_location);
            }
            
            $image = $request->file('profile_pic_input');
            // create unique name
            $pathname = '/storage/profiles/';
            $filename = time() . '.' . $image->extension();
            // compress the image
            $image_compressed = ImageService::compressImage($image, 600, 450, $pathname);

            $image_compressed->save(public_path($pathname . $filename));
            $user->doctor->photo = $pathname . $filename;
        }

        $user->name = $request->name;
        $user->doctor->description = $request->description;
        $user->doctor->save();
        $user->save();
        return back();
    }

    public function update_personal_data(Request $request, User $user) {
        $request->validate([
            'birth_date' => 'required|date',
            'sex' => 'required|in:1,0',
        ]);

        $user->doctor->birth_date = $request->birth_date;
        $user->doctor->sex = $request->sex;
        $user->doctor->save();
        $user->save();
        return back();
    }

    public function clinic() {
        $clinic = auth()->user()->clinic;
        return view('doctor.settings.clinic', compact('clinic'));
    }

    public function update_clinic(Request $request, $clinic_id) {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'is_open' => 'required'
        ]);

        if($clinic_id == 'null') {
            Clinic::create([
                'name' => $request->name,
                'address' => $request->address,
                'is_open' => $request->is_open == 'true' ? true : false,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            $clinic = Clinic::find($clinic_id);
            $clinic->name = $request->name;
            $clinic->address = $request->address;
            $clinic->is_open = $request->is_open == 'true' ? true : false;
            $clinic->save();
        }

        return back();
    }
}
