<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prompt;
use App\Http\Requests\PromptRequest;


class PromptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Prompt::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(PromptRequest $request)
    {
        $validated = $request->validated();

        $prompts = Prompt::create($validated);

        return  $prompts;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Prompt::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(PromptRequest $request, string $id)
    {
        $validated = $request->validated();
     
        $prompts = Prompt::findOrFail($id);
                                
        $prompts->update($validated);

        return $prompts;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $prompts = Prompt::findOrFail($id);
 
        $prompts->delete(); 
        
        return $prompts;
    }
}
