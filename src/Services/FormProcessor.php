<?php

namespace Philsquare\LaraForm\Services;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FormProcessor {

    protected $files;

    public function __construct(Files $files)
    {
        $this->files = $files;
    }

    /**
     * @param UploadedFile $file
     * @param string $path
     * @return string
     */
    public function processFile(UploadedFile $file, $path, $existing = null)
    {
        if($existing) $this->files->destroyFile(storage_path('app/' . $path . '/' . $existing));

        $ext = $file->getClientOriginalExtension();
        $filename = $this->files->createFilename($ext, $path);
        $file->move(storage_path('app/' . $path), $filename);

        return $filename;
    }

    public function setCheckboxValues(Request $request, $names)
    {
        $values = [];

        foreach($names as $name)
        {
            $values[$name] = $request->has($name) ? 1 : 0;
        }

        return $values;
    }

}