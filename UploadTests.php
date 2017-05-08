<?php

Class Uploads {
    /**
     *Get a list of files that are pictures in a directory
     *
     * @param string $path
     */

    public function getPics($path)
    {
        $pics = array_filter(scandir($path), function($filename) {
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if($ext === 'jpg' || $ext === 'png') {
                return true;
            }
        });

        return $pics;
    }
}