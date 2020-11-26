<?php


namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\User;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileController extends Controller
{


    use UploadFiles;



    public function index()
    {
        $client = Client::where('user_id', auth()->id())->first();
        return view('perfil');

        return view('profiler',compact('client'));
        // }
    }

    public function updateProfile(Request $request)
    {

        $user = User::find (auth()->id());

        $user = $this->handleAvatarUpload($request, $user);

        $user->save();

        return redirect()->back()->with(['message' => 'Perfil actualizado com sucesso.']);

    }

    private function handleAvatarUpload (Request $request, User $user) {

        // Deve retornar s3 ou public
        $defaultDisk = env('EXP_DEFAULT_UPLOAD_DISK', 'public');

        // Check if a profile image has been uploaded
        if ($request->has('avatar')) {
            // Get image file
            $image = $request->file('avatar');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.$user->id.'_'.time();
            // Define folder path
            $folder = '/uploads/images/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadImage($image, $folder, $defaultDisk, $name);

            if ($user->avatar) {

                $position = $defaultDisk === 's3' ? 5 : 1; //personalizando o indice para acesso do nome anterior do ficheiro (se disc é s3 ou public)
                $this->deleteImate($folder, $defaultDisk, explode('/', $user->avatar)[$position]);

            }

            // Set user profile image path in database to filePath
            $user->avatar = $filePath;
            $user->upload_disk = $defaultDisk;
        }

        return $user;

    }
}
