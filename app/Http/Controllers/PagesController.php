<?php
namespace App\Http\Controllers;
use App\Models\Cohort;
use App\Models\Admin;
use App\Models\Testimonial;
use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;


class PagesController extends Controller
{
    public function index()
    {
        $Cohort = Cohort::get();
        $Admin = Admin::inRandomOrder()->limit(4)->get();
        $Testimonial=Testimonial::inRandomOrder()->limit(4)->get();
        // $Testimonial = Testimonial::inRandomOrder()->limit(4)->get();
        $Student = Student::inRandomOrder()->limit(4)->get();
        $from='index';

        return view('front.index.Index', compact('Cohort', 'Testimonial', 'Admin', 'Student', 'from'));
    }

    public function about()
    {
        // dd('hi from About');
        $Admin = Admin::get();
        $Cohort = Cohort::get();
        // dd('hi from  end About',$Cohort);
        return view('front.about.About', compact('Admin','Cohort'));


    }

    public function Cohort($id)
    {
        // dd('first cohort', $id);
        $Cohort =Cohort::get();      
        $Student = Student::where('cohort_id', $id)->get();
        return view('front.chort3.Cohort3', compact('id', 'Student','Cohort'));
    }

    public function Ourgraduate()
    {
        // dd('hi from Ourgraduate');
        $Cohort = Cohort::get();
        return view('front.our_gradute.Our_Gradute', compact('Cohort'));
    }

    public function Team()
    {
        $Admin = Admin::get();
        $Cohort = Cohort::get();

        return view('front.team.Team', compact('Admin', 'Cohort'));
    }




    public function Contact()
    {
        $Cohort = Cohort::get();
        return view('front.contact.Contact', compact('Cohort'));
    }
    public function ContactEmail($email)
    {
        return redirect()->route('Mail.contact', ['email' => $email]);
    }



}