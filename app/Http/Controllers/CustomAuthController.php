<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Mail;
use App\Mail\otpmail;
use App\Models\otp;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        return view('auth.register');
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('backend.layout.admin');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }


    // Otp send and email page show 
    public function email(){
        return view('backend.emails.otpsend');
    }
    public function otp_send(Request $request){
        
        if (User::where('email',$request->email)->exists()) {

            $otp=rand(9999,99999);
            $id=User::where('email',$request->email)->value('id');
            $otpdata=new otp();
            $otpdata->user_id=$id;
            $otpdata->otp=$otp;
            $otpdata->save();

            $mailData=[
                'title'=>'Send Otp',
                'body'=>$otp,
            ];
            Mail::to($request->email)->send(new otpmail($mailData));
            session()->flash('success','Otp Send Successfully');
            return redirect('verify-otp/'.$id);
           
        }else {
            session()->flash('error','This Email Is Invalid');
            return back();
        }
    }

    // Otp verify and otp page show 
    public function otp(){
            return view('backend.emails.verifyotp');
    }
    public function otp_verify(Request $request,$id){
        if (otp::where('user_id',$id)->value('otp')==$request->otp) {
          $id1=otp::where('user_id',$id)->value('id');
          $otp=otp::find($id1);
          $otp->delete();
          return redirect('change-password/'.$id);
          session()->flash('success','Otp Verify Successfully');
        }else {
            session()->flash('error','Otp Is Incorrect');
            return back();
        }
    }

    // password change and password page show 
    public function password(){
        return view('backend.emails.changepassword');
    }
    public function update_password(Request $request,$id){
        if ($request->password != $request->c_password) {
            session()->flash('error','Password Does Not Matched');
            return back();
        }
        $user=User::find($id);
        $user->password= Hash::make($request->password);
        $user->update();
        session()->flash('success','Password Changed Successfully');
        return redirect('login');
    }
}