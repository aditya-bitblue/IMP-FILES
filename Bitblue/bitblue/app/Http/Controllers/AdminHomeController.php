<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Career;
use App\Models\contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Testimonials;

class AdminHomeController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function testimonial()
    {
        $data = Testimonial::where('status', 1)->get();
        return view('admin/pages/testimonial', compact('data'));
    }
    public function queries()
    {
        $data = contactus::get();
        return view('admin/pages/queries', compact('data'));
    }
    public function candidates()
    {
        $data = Career::get();
        return view('admin/pages/candidates', compact('data'));
    }
    public function addtestimonial()
    {
        // return $data;
        return view('admin/pages/addtestimonial');
    }
    public function uploadtestimonial(Request $req, Testimonial $testi)
    {
        $req->validate([
            'name' => 'required',
            'rating' => 'required|max:5|min:1|numeric',
            'review' => 'required',
            'designation' => 'required',
            'image' => 'required',
        ]);



        $input = $req->all();
        if ($req->file('image')) {
            $file = $req->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('./testimonial'), $filename);
            $data = new Testimonial;
            $data->name = $input['name'];
            $data->rating = $input['rating'];
            $data->review = $input['review'];
            $data->designation = $input['designation'];
            $data->status = "1";
            $data->image = $filename;

            $data->save();
            // return $filename;
            if ($data) {
                return back()->with('success', 'You have registerd Successfuly');
            } else {
                return back()->with('fail', 'Something Went wrong');
            }
        } else {
            return back()->with('fail', 'Please select valid image');
        }
    }

    public function edittestimonial(Request $req, $id)
    {
        // return $id;
        $data = Testimonial::where('id', $id)->get();
        return view('admin/pages/edittestimonial', compact('data'));
    }

    public function updatetestimonial(Request $req, $id)
    {
        // return $_FILES;
        $req->validate([
            'name' => 'required',
            'rating' => 'required|max:5|min:1|numeric',
            'review' => 'required',
            'designation' => 'required',
        ]);
        if ($req['edittestimonial'] == 'edittestimonial') {
            $data = Testimonial::find($id);
            if ($req->file('image')) {

                $file = $req->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('./testimonial'), $filename);
                $data['image'] = $filename;

                $data->name = $req['name'];
                $data->rating = $req['rating'];
                $data->review = $req['review'];
                $data->designation = $req['designation'];
                $data->image = $filename;
                $data->update();
                return back()->with('success', 'Record Updated Successfuly');
            } else {

                $data->name = $req['name'];
                $data->rating = $req['rating'];
                $data->review = $req['review'];
                $data->designation = $req['designation'];
                $data->update();
                return back()->with('success', 'Record Updated Successfuly');
            }
        } else {
            return back()->with('fail', 'Please select valid image');
        }
    }
    public function deletetequery(Request $req, $id)
    {
        $result = contactus::where('id', $id)->first();
        $result->delete();
        // $result->save();
        if ($result) {
            return back()->with('success', 'Query is deleted successfully');
        }
    }

    public function deletetestimonial(Request $req, $id)
    {
        // return $id;
        $date = Carbon::now()->format('d-m-Y H:i:s');
        $result = Testimonial::where('id', $id)->first();
        $result->status = '0';
        $result->deleted_at = $date;
        $result->save();
        if ($result) {
            return back()->with('success', 'Record is deleted successfully');
        }
    }
    public function deletecandidate(Request $req, $id)
    {
        // return $id;
        // $date = Carbon::now()->format('d-m-Y H:i:s');

        try {
            $result = Career::where('id', $id)->first();
            $resumename = $result['resume'];
            $imagename = $result['candidateImage'];

            if (unlink("candidateimage/" . $imagename)) {
                echo "image  has been deleted successfully";
            } else {
                echo "image is not deleted";
            }

            if (unlink("resumes/" . $resumename)) {
                echo "resume  has been deleted successfully";
            } else {
                echo "resume is not deleted";
            }

            $result->delete();
            // $result->save();
            if ($result) {
                return back()->with('success', 'Record is deleted successfully');
            }
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }
}
