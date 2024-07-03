<?php

namespace App\Http\Controllers;
use App\Models\File;
use App\Models\User;
use App\Models\Sbscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function list()
    {
        $subscriptions = Sbscriptions::all(); // Fetch all subscriptions (or as needed)
        $plans = Sbscriptions::select('plan', 'price')->distinct()->get(); // Fetch distinct plans and prices

        return view('subscriptions.sub_home', compact('subscriptions', 'plans'));
    }

    public function create()
    {
        $user = User::all();
        return view('users.create', compact('user'));
    }
    public function show()
    {
        $users = User::all();
        $files = Storage::disk('s3')->files('your-name-test/profile_picture');
        $signedUrls = [];

        foreach ($files as $file) {
            $signedUrls[] = Storage::disk('s3')->temporaryUrl($file, now()->addMinutes(5));
        }

        return view('users.index', compact('users', 'signedUrls'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'profile_picture' => 'required|image',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $path = $request->file('profile_picture')->store('your-name-test/profile_picture/', 's3');
        $user->profile_picture = $path;

        $user->save();
        return view('users.create');
    }

        public function file_upload(User $user)
    {
        $signedUrl = null;
        if ($user->profile_picture) {
            $signedUrl = Storage::disk('s3')->temporaryUrl($user->profile_picture, now()->addMinutes(5));
        }

        return view('users.user_upload_file', compact('user', 'signedUrl'));
    }


    public function fileUpload(User $user)
    {
        return view('users.file-upload', compact('user'));
    }


    public function storeFiles(Request $request, User $user)
    {
        $request->validate([
            'files.*' => 'required',
        ]);

        $files = [];
        foreach ($request->file('files') as $file) {
            $path = $file->store('your-name-test/files', 's3');
            $files[] = File::create([
                'user_id' => $user->id,
                'path' => $path,
            ]);
        }

        return redirect()->route('user.files', $user->id)->with('success', 'Files uploaded successfully.');
    }



    public function showFiles(User $user)
    {
        $files = $user->files;
        $signedUrls = [];
        foreach ($files as $file) {
            $signedUrls[] = Storage::disk('s3')->temporaryUrl($file->path, now()->addMinutes(5));
        }

        return view('users.files', compact('user', 'signedUrls'));
    }


}
