<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Document $document, Request $request)
    {
        $validator = Validator::make($request->all(), [

      
            'name' => 'required|string',
            'description' => 'required|string',
            'file' => 'file|mimes:pdf,doc,docx',
        ]);
       
        if ($validator->passes()) {
            $input = $request->all();
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file_extension = $file->getClientOriginalName();
                $destination_path = public_path() . '/folder/file/';
                $filename = $file_extension;
                $request->file('file')->move($destination_path, $filename);
                $input['file'] = $filename;
            }
            Document::create($input);
        
            return redirect()->route('employees.employee_profile')
            ->withSuccess(__('Document created successfully.'));
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
