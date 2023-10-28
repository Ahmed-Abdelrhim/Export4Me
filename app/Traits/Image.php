<?php
namespace  App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
trait Image
{
    public function storeImage($file, $path, $isCompression = true, $width = null, $height = null)
    {
        if(in_array($file->extension()  , ['mp4'])):
            $isCompression = false;
        endif;
        $width = $width == null ? 800 : $width;
        $folderPath = public_path($path);
        if (!File::isDirectory($folderPath)) {
            File::makeDirectory($folderPath, 0777, true, true);
        }
        // dd($file->getClientOriginalName());
        $hashedName = md5($file->getRealPath() . time()) . '.' . $file->guessClientExtension();
        // dd($hashedName);
        if ($isCompression) :
            $image = \Image::make($file)
                ->encode('jpg', 50)->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path($path) . '/' . $hashedName);
        else :
            $tempPath = Storage::disk('public_storage')->put($path, $file);
        endif;

        return [
            'path' => $isCompression ? $path . '/' . $hashedName : $tempPath,
            'hashName' => $hashedName,
            'title' => $file->getClientOriginalName(),
            'extension' => $file->guessClientExtension(),
            'mime' => $file->getClientMimeType(),
            'hash' => md5_file($file->getRealPath()),
        ];
    }

}
