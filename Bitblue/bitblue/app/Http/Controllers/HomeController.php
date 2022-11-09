<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Career;
use App\Models\contactus;
// use Contactus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Testimonial::where('status', 1)->get();
        return view('page/index', ['data' => $data]);
    }
    public function contactus(Request $request, contactus $contactus)
    {
        $request->validate([
            'email' => 'required|email',
            'username' => 'required | min:2 | max:30',
            'phone' => 'required | min:10 |numeric',
            'subject' => 'required',
            'message' => 'required | min:5 | max: 100',
        ]);

        $result = new contactus;
        $input = $request->all();
        $result->name = $input['username'];
        $result->email = $input['email'];
        $result->subject = $input['subject'];
        $result->phonenumber = $input['phone'];
        $result->message = $input['message'];

        $result->save();

        if ($result) {
            return back()->with('success', ' Thanks for Contacting us !');
        } else {
            return back()->with('fail', ' Sorry, make sure you have filled the form well !');
        }
    }
    public function contact()
    {
        return view('contact');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function career()
    {
        return view('career');
    }
    public function product()
    {
        return view('product');
    }
    public function appdevelopment()
    {
        return view('product/appdevelopment');
    }
    public function webdevelopment()
    {
        return view('product/webdevelopment');
    }
    public function contentmarketing()
    {
        return view('product/contentmarketing');
    }
    public function seooptimization()
    {
        return view('product/seooptimization');
    }
    public function socialmarketing()
    {
        return view('product/socialmarketing');
    }
    public function dextro()
    {
        return view('product/dextro');
    }
    public function pabulum()
    {
        return view('product/pabulum');
    }
    public function hospo()
    {
        return view('product/hospo');
    }
    public function bithome()
    {
        return view('product/bithome');
    }
    public function digitalmarketing()
    {
        return view('product/digitalmarketing');
    }
    public function bitpay()
    {
        return view('product/bitpay');
    }
    public function jobapply(Request $request, Career $career)
    {

        $request->validate([
            'email' => 'required|email',
            'candidateName' => 'required | min:2 | max:30',
            'candidateImage' => 'required|mimes:jpeg,jpg',
            'designation' => 'required',
            'phonenumber' => 'required | min:10 |numeric',
            'dob' => 'required',
            'gender' => 'required',
            'languages' => 'required',
            'qualification' => 'required',
            'resume' => 'required|mimes:pdf,doc',
            'message' => 'required | min:5 | max: 50',
        ]);

        $resumefile = $request->file('resume');
        $imagefile = $request->file('candidateImage');

        //Display File Name
        $resumename = explode(".", $resumefile->getClientOriginalName());
        $randomkey = rand();
        $rext = $resumename[1];
        $resumefilename = $randomkey . '-' . $resumename[0] . '.' . $rext;
        echo $resumefilename;

        //Display File Name
        $imagename = explode(".", $imagefile->getClientOriginalName());
        $ext = $imagename[1];
        $imagefilename = $randomkey . '-' . $imagename[0] . '.' . $ext;
        echo $imagefilename;



        // save on database
        $candidate = new career;
        $input = $request->all();
        $candidate->candidateName = $input['candidateName'];
        $candidate->candidateImage = $imagefilename;
        $candidate->email = $input['email'];
        $candidate->languages = $input['languages'];
        $candidate->designation = $input['designation'];
        $candidate->phonenumber = $input['phonenumber'];
        $candidate->dob = $input['dob'];
        $candidate->gender = $input['gender'];
        $candidate->qualification = $input['qualification'];
        $candidate->resume = $resumefilename;
        $candidate->message = $input['message'];

        $candidate->save();

        // save in resume folder
        $rdestinationPath = base_path('public\resumes'); //to be stored resume
        $idestinationPath = base_path('public\candidateimage'); //to be stored img

        $rans = $resumefile->move($rdestinationPath, $resumefilename);
        $Ians = $imagefile->move($idestinationPath, $imagefilename);
        if (!is_null($rans) && !is_null($Ians)) {
            return back()->with('success', ' Thanks for Applying !');
        } else {
            return back()->with('fail', ' Error while uploading your resume !');
        }
        // return $request;
        // return view('./apply', compact('position'));
    }
    // public function jobapply2()
    // {
    //     $position = 'Hardware/Network Engineer';
    //     return view('./apply', compact('position'));
    // }
    // public function jobapply3()
    // {
    //     $position = 'Marketing Executive';
    //     return view('./apply', compact('position'));
    // }
}
