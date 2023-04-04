<?php


use App\Helper\ArrayFormat;

if (!function_exists('appSetting')) {
    /**
     * @param $for
     * @return ArrayFormat|void
     */
    function appSetting($for)
    {
        if ($for === 'school') {
            $schoolId = new ArrayFormat;
            $schoolId->id = env('SCHOOL_ID');
            return $schoolId;
        }
        if ($for === 'asset'){
            $asset = new ArrayFormat;
            $asset->asset = env('ASSET_SERVER');
            return $asset;
        }
    }
}
