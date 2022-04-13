<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Show uploaded media page
     * @return View
     */
    public function index() {
        $files = Media::all(); // get all media
        return view('uploaded-media')->with('files', $files);
    }

    /**
     * Store uploaded image
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeImage(Request $request) {
        if ($request->hasFile('image')) { // request contains file
            if ($request->file('image')->isValid()) { // file is valid & NOT CORRUPTED

                // validate and return errors
                $validated = $request->validate([
                    'image' => 'mimes:jpeg,png|max:5120',
                ]);

                // get file name & extension
                $name = $request->file('image')->getClientOriginalName();
                $extension = $request->image->extension();

                // store the file
                $request->image->storeAs('/', $name, 'uploads');

                // generate link for the stored file
                $url = Storage::disk('uploads')->url($name);

                // save file path alongside name & type in Database
                $file = Media::create([
                    'name' => $name,
                    'type' => $extension,
                    'path' => $url,
                ]);

                // Create a success message and redirect to uploaded media page
                Session::flash('success', "Image uploaded successfully!");
                return redirect()->route('uploaded_media');
            }
        }

        // return 400 if request doesn't contain image
        abort(400, 'Could not upload image :(');
    }

    /**
     * Store uploaded video
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeVideo(Request $request) {
        if ($request->hasFile('video')) { // request contains file
            //  Let's do everything here
            if ($request->file('video')->isValid()) { // file is valid & NOT CORRUPTED

                // validate and return errors
                $validated = $request->validate([
                    'video' => 'mimes:mp4,mkv|max:10240',
                ]);

                // get file name & extension
                $name = $request->file('video')->getClientOriginalName();
                $extension = $request->video->extension();

                // store the file
                $request->video->storeAs('/', $name, 'uploads');

                // generate link for the stored file
                $url = Storage::disk('uploads')->url($name);

                // save file path alongside name & type in Database
                $file = Media::create([
                    'name' => $name,
                    'type' => $extension,
                    'path' => $url,
                ]);

                // Create a success message and redirect to uploaded media page
                Session::flash('success', "Video uploaded successfully!");
                return redirect()->route('uploaded_media');
            }
        }

        // return 400 if request doesn't contain image
        abort(400, 'Could not upload video :(');
    }
}
