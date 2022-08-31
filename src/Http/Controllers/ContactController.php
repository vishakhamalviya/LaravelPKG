<?php
namespace Vishakha\Contact\Http\Controllers;
Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Vishakha\Contact\Models\Contact;

class ContactController extends Controller{
	public function index(){
		return view('contact::contact');
	}

	public function send(Request $request){
		Contact::create($request->all());
		return redirect(route('contact'));
	}

	public function show(Request $request){
		$contacts = Contact::all();
		return view('contact::contactList', ['contacts' => $contacts]);
	}

	public function edit($id){
		$contact = Contact::find($id);
		return view('contact::updateContact', ['contacts' => $contact]);
	}

	public function updateContact(Request $request, $id ){
        $contact = Contact::findOrFail($id);
        $request->validate([
            'name' => 'required',
			'email' => 'required',
			'message' => 'required'
        ]);
        $updateDetails = [
            'name' => $request->get('name'),
			'email' => $request->get('email'),
			'message' => $request->get('message')
        ];
        $contact->update($updateDetails);
        return redirect()->route('contactList');
	}

	public function deleteContact($id){
		Contact::where('id', $id)->delete();
		return redirect()->route('contactList');

	}
}