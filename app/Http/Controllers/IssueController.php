<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssueRequest;
use App\Http\Requests\UpdateIssueRequest;
use App\Models\Issue;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 取得所有 issue
        $issues = Issue::all();
        return response()->json($issues);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 若為 API 可不實作
        return response()->json(['message' => 'Not implemented.'], 501);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIssueRequest $request)
    {
        $issue = Issue::create($request->validated());
        return response()->json($issue, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Issue $issue)
    {
        return response()->json($issue);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Issue $issue)
    {
        // 若為 API 可不實作
        return response()->json(['message' => 'Not implemented.'], 501);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIssueRequest $request, Issue $issue)
    {
        $issue->update($request->validated());
        return response()->json($issue);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return response()->json(['message' => 'Issue deleted.']);
    }
}
