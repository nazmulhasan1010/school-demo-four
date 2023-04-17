<?php


use App\Helper\ArrayFormat;
use App\Models\AboutPage;
use App\Models\GeneralSettings;
use App\Models\School;
use App\Models\Testimonial;

if (!function_exists('appSetting')) {
    /**
     * @param $for
     * @return ArrayFormat|array
     */
    function appSetting($for)
    {
        if ($for === 'school') {
            $schoolId = new ArrayFormat;
            $schoolId->id = env('SCHOOL_ID');
            return $schoolId;
        }
        if ($for === 'asset') {
            $asset = new ArrayFormat;
            $asset->asset = env('ASSET_SERVER');
            return $asset;
        }
        if ($for === 'appData') {
            $data = [
                'app' => GeneralSettings::where('school_id', env('SCHOOL_ID'))->first(),
                'abouts' => AboutPage::where('school_id', env('SCHOOL_ID'))->get(),
                'testimonial' => Testimonial::where('school_id', env('SCHOOL_ID'))->get(),
                'info' => GeneralSettings::where('school_id',  env('SCHOOL_ID'))->first(),
                'school' => School::find(env('SCHOOL_ID')),
            ];
            return $data;
        }
    }
}
