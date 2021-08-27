<?php


namespace App\Services\Media;


use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class VideoFileService extends DefaultFileService implements FileServiceContract
{
    public static function upload($file, $filename, $dir, $public_folder, $private_folder): array
    {
        $path = $public_folder . '/' . $private_folder . '/';
        $full_path = $dir . $public_folder . '/' . $private_folder . '/';
        Storage::putFileAs($full_path, $file, $filename . '.' . $file->getClientOriginalExtension());
        return ["video" => $path . $filename . '.' . $file->getClientOriginalExtension()];
    }

    public static function thumb()
    {
        return asset('assets/common/images/video-thumb.png');
    }

    public static function original(Media $media)
    {
        return "/storage/" . $media->files['video'];
    }

    public static function getFilename()
    {
        return 'public/' . static::$media->files['video'];
    }
}
