<?php

namespace App\Http\Controllers;

use App\Services\InquiryService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected InquiryService $inquiryService;

    public function __construct(InquiryService $inquiryService)
    {
        $this->inquiryService = $inquiryService;
    }

    public function index(Request $request)
    {
        $inquiries = $this->inquiryService->all();
        
        // Sort descending by submitted_at
        usort($inquiries, fn($a, $b) => strtotime($b['submitted_at']) - strtotime($a['submitted_at']));

        // Stats
        $stats = [
            'total'     => count($inquiries),
            'new'       => count(array_filter($inquiries, fn($i) => $i['status'] === 'new')),
            'contacted' => count(array_filter($inquiries, fn($i) => $i['status'] === 'contacted')),
            'closed'    => count(array_filter($inquiries, fn($i) => $i['status'] === 'closed')),
        ];

        // Manual Pagination
        $perPage = 10;
        $page = $request->input('page', 1);
        $offset = ($page - 1) * $perPage;
        
        // Status filter (handled server-side optionally or client-side. Will pass all for client-side if needed, but doing server-side pagination means we should filter before paging if we want full functionality. But the prompt says "Filter by status: All | New... client-side JS" and "Pagination: manual 10 per page". Let's just paginate the server side and send to view. Actually, if we paginate server side, client-side filtering only filters the current page. To do it properly as requested: "Filter by status: All | New (tab buttons above table) / Search/Filter... (client-side JS)". If it's client-side JS, we should just send all data or a lot of it, but the instruction specifically says "paginate manually (10 per page using array slicing + query string), pass to view." I will just implement simple pagination.)
        
        $paginatedInquiries = array_slice($inquiries, $offset, $perPage);
        $totalPages = ceil(count($inquiries) / $perPage);

        return view('dashboard.index', compact('paginatedInquiries', 'stats', 'page', 'totalPages', 'inquiries'));
    }

    public function show(string $id)
    {
        $inquiry = $this->inquiryService->find($id);

        if (!$inquiry) {
            abort(404);
        }

        return view('dashboard.show', compact('inquiry'));
    }

    public function destroy(string $id)
    {
        $this->inquiryService->delete($id);

        return redirect()->route('dashboard')->with('success', 'Inquiry deleted successfully.');
    }

    public function updateStatus(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,closed'
        ]);

        $this->inquiryService->updateStatus($id, $request->status);

        return response()->json(['success' => true, 'status' => $request->status]);
    }
}
