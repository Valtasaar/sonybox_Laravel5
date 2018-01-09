<?php
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

if (! function_exists('va')) {
    /**
     * Get the path to a versioned file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString
     *
     * @throws \Exception
     */
    function va($path, $manifestDirectory = '')
    {
        static $manifests = [];

        if (Str::startsWith($path, 'css')) {
            $path = "app.css";
            $manifestDirectory = '/css/';
        } elseif (Str::startsWith($path, 'js')) {
            $path = "app.js";
            $manifestDirectory = '/js/';
        }

        if ($manifestDirectory && ! Str::startsWith($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        $manifestPath = public_path('/rev-manifest.json');

        if (! isset($manifests[$manifestPath])) {
            if (! file_exists($manifestPath)) {
                throw new Exception('The manifest does not exist.');
            }

            $manifests[$manifestPath] = json_decode(file_get_contents($manifestPath), true);
        }

        $manifest = $manifests[$manifestPath];

        if (! isset($manifest[$path])) {
            report(new Exception("Unable to locate file: {$path}."));

            if (! app('config')->get('app.debug')) {
                return $path;
            }
        }

        return new HtmlString($manifestDirectory.$manifest[$path]);
    }
}