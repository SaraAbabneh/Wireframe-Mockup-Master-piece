<?php



namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\Cohort;


class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showContact()
    {

        $Cohort = Cohort::get();
        return view('front.contact.Contact', compact('Cohort'));
    }



    public function sendContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // The rest of your code...


        // Create an array with the data you want to send in the email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];
            // dd ('after data', $data);
        // Send the email
        
            // dd ('after try');

            
            Mail::to('muradalshorman@gmail.com')->send(new ContactMail($data));

            return redirect()->back()->with(['success' => 'Thank you for contacting us. We will respond to you soon.']);
       
          

           
        

    }

    public function showmessage()
    {
        $Cohort = Cohort::get();
        $Contact = Contact::orderBy('created_at', 'desc')->get();
        return view('front.contact.Contact', compact('Contact', 'Cohort'));
    }

    public function deletmessage($id)
    {
        // dd('delet message , '.$id);
        Contact::destroy($id);
        return back()->with('success', 'Message deleted successfully.');
    }

}