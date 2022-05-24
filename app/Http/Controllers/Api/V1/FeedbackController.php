<?php

namespace App\Http\Controllers\APi\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Feedback $feedback, FeedbackRequest $feed)
    {
        $input = $request->all();
        // $validator = Validator::make($input, [
        //     'full_name' => 'required',
        //     'mail' => 'required',
        //     'message' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return $this->sendError('Validation Error.', $validator->errors());
        // }
        // $save = Feedback::create($input);
        // return $this->sendResponse(new FeedbackRequest($save), 'Feedback created successfully.');

        // laravel 8 fails
        // $validated = $request->validate([
        //     'full_name' => 'required|min:5|max:255',
        //     'mail' => 'required',
        //     'message' => 'required',
        // ]);
        // 'publish_at' => 'nullable|date',

        // 2usul iwladi
        // $feedback->full_name = $input['full_name'];
        // $feedback->mail = $input['mail'];
        // $feedback->message = $input['message'];
        // $feedback->save();
        // return '$request->mail';

        // 3 usul iwladi 
        // $new_desk = Feedback::create($request->validated());
        // return Feedback::create($feed->validated());
        //  Feedback::create($feed->validated());
        $success = 0;
         if( Feedback::create($feed->validated()) ){
             $success = 1;
         }else{
            $success = 0;
         }
         return $success;
        // return new CardResource($new_desk);
        // return response(null, HttpFoundationResponse::HTTP_NO_CONTENT);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
