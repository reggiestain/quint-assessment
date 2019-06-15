<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Mail\SendEmailMailable;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;

class LeadController extends Controller {
    
    
    /**
     * Show the application home page.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        
        $leads = Lead::get();
        return view('lead.index', compact('leads'));
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {       
        
        return Validator::make($data, [
                'first_name' => 'required',
                'last_name' => 'required',
                'street_number' => 'required|numeric',
                'street_name' => 'required',
                'province' => 'required',
                'city' => 'required',
                'postal_code' => 'required',
                'country' => 'required',
                'email' => 'required|unique:leads|email',
                'phone_number' => 'required|string|unique:leads|phone_number',
                'agree' => 'required'
            ]);
    }

    /**
     * Create new Lead instance after a valid form submission.
     *
     * @param  array  $data
     * @return \App\Models\Lead
     */
    protected function create(array $data) {

        $lead = Lead::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'street_number' => $data['street_number'],
                'street_name' => $data['street_name'],
                'province' => $data['province'],
                'city' => $data['city'],
                'postal_code' => $data['postal_code'],
                'country' => $data['country'],
                'question' => $data['question'],               
                'opt_in' => $data['opt_in'],                
        ]);

        return $lead;
    }

    /**
     * Store Lead data
     * 
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function store(Request $request) {

        $validator = $this->validator($request->all());
        
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        // create the lead
        $lead = $this->create($request->all());
        //Event job
        SendEmailJob::dispatch()
                ->delay(now()->addSecond(50));       
        Mail::to(env('MAIL_TO'))->send(new SendEmailMailable($lead));

        return Redirect::back()->with('success', 'Your info has been saved successful.');
    }
}
