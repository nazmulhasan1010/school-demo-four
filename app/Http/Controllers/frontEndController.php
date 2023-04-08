<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\ClassModel;
use App\Models\Course;
use App\Models\Event;
use App\Models\Exam;
use App\Models\ExamType;
use App\Models\FrontendPermission;
use App\Models\GeneralSettings;
use App\Models\HomePageSetting;
use App\Models\News;
use App\Models\NoticeBoard;
use App\Models\Section;
use App\Models\Slider;
use App\Models\Staff;
use App\Models\Subject;
use App\Models\Testimonial;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class frontEndController extends Controller
{
    /**
     * @return Application|Factory|\Illuminate\Foundation\Application|View
     */
    public function home()
    {
        $schoolId = appSetting('school')->id;
        $setting = GeneralSettings::where('school_id', $schoolId)->first();
        $permission = FrontendPermission::where('parent_id', 1)->where('is_published', 1)->get();
        $settingArray = [
            'setting' => $setting,
            'permission' => $permission
        ];
        $home_data = [
            'exams' => Exam::where('school_id', $schoolId)->get(),
            'news' => News::where('school_id', $schoolId)->orderBy('order', 'asc')->limit(3)->get(),
            'testimonial' => Testimonial::where('school_id', $schoolId)->get(),
            'academics' => Course::where('school_id', $schoolId)->orderBy('id', 'asc')->limit(3)->get(),
            'exam_types' => ExamType::where('school_id', $schoolId)->get(),
            'events' => Event::where('school_id', $schoolId)->get(),
            'notice_board' => NoticeBoard::where('school_id', $schoolId)->where('is_published', 1)->orderBy('created_at', 'DESC')->take(4)->get(),
            'classes' => ClassModel::where('school_id', $schoolId)->where('active_status', 1)->get(),
            'subjects' => Subject::where('school_id', $schoolId)->where('active_status', 1)->get(),
            'section' => Section::where('school_id', $schoolId)->where('active_status', 1)->get(),
            'homePage' => HomePageSetting::where('school_id', $schoolId)->first(),
            'abouts' => AboutPage::where('school_id', $schoolId)->get(),
            'slider' => Slider::where('row_status', '=', true)->get(),
            'staff'=> Staff::where('school_id', $schoolId)->take(4)->get(),
        ];
        $data = array_merge($settingArray, $home_data);
        return view('pages.home', compact('data'));
    }
}
