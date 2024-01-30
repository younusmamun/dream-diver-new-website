<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();


        $faq = new Faq();

        $faq->faq_question = $data['faq_question'];
        $faq->faq_answer = $data['faq_answer'];
        $faq->status = $data['status'];
        $faq->save();



        return redirect()->back()->with('success', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $data = $request->all();

        $faq->faq_question = $data['faq_question'];
        $faq->faq_answer = $data['faq_answer'];
        $faq->status = $data['status'];
        $faq->save();


        return redirect()->back()->with('success', 'FAQ Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        // You can add a redirect or any other logic after the deletion.
        return redirect()->route('faqs.index')->with('success', 'Project deleted successfully');
    }
}
