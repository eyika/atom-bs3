<?php

namespace App\Http\Controllers;

use Eyika\Atom\Framework\Http\Request;
use Eyika\Atom\Framework\Http\Response;
use Eyika\Atom\Framework\Support\Str;
use Eyika\Atom\Framework\Support\Storage\File;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | form.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.form', $values);
    }

    public function advanced(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | form_advanced.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.form_advanced', $values);
    }

    public function buttons(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | form_buttons.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.form_buttons', $values);
    }

    public function upload(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | form_upload.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.form_upload', $values);
    }

    public function uploadNew(Request $request)
    {
        // Check if a file was uploaded without errors
        if ($request->file() && $request->file()['file']['error'] === UPLOAD_ERR_OK) {
            logger()->info('the file is', $request->file());
            // Get the uploaded file information
            $fileTmpPath = $request->file()['file']['tmp_name'];
            $fileName = $request->file()['file']['name'];
            $fileSize = $request->file()['file']['size'];
            $fileType = $request->file()['file']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // Sanitize file name (optional but recommended)
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            // Path where the file will be moved to
            $destPath = storage_path("uploads/$newFileName");

            // Move the file to the upload directory
            if (File::upload($fileTmpPath, $destPath)) {
                $message = "File is successfully uploaded.";
            } else {
                $message = "There was an error moving the uploaded file 01.";
            }
        } else {
            $message = "There was an error uploading the file 02.";
        }
        logger()->info($message);
        // return Response::with([ 'message' => $message ])->redirect('/forms/upload', 302);
        return Response::redirect('/forms/upload', 302);
    }

    public function validation(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | form_validation.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.form_validation', $values);
    }

    public function wizards(Request $request)
    {
        $values=['title'=>'Gentelella-bladeone | form_wizards.blade.php ','username'=>'Hillary Trump'];

        return Response::view('home.form_wizards', $values);
    }
}
