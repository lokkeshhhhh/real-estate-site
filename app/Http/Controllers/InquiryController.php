<?php

namespace App\Http\Controllers;

use App\Http\Requests\InquiryRequest;
use App\Services\InquiryService;
use Carbon\Carbon;
use Illuminate\Support\Str;

class InquiryController extends Controller
{
    protected InquiryService $inquiryService;

    public function __construct(InquiryService $inquiryService)
    {
        $this->inquiryService = $inquiryService;
    }

    public function store(InquiryRequest $request)
    {
        try {
            $data = $request->validated();
            
            $inquiry = [
                'id'            => Str::uuid()->toString(),
                'name'          => $data['name'],
                'email'         => $data['email'],
                'phone'         => $data['phone'],
                'city'          => $data['city'],
                'budget_range'  => $data['budget_range'],
                'property_type' => $data['property_type'],
                'message'       => $data['message'],
                'status'        => 'new',
                'submitted_at'  => Carbon::now()->toDateTimeString(),
            ];

            $this->inquiryService->save($inquiry);

            return redirect()->route('contact', ['submitted' => 'true'])
                ->with('success', 'Thank you! We\'ve received your inquiry and will reach out within 24 hours.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Sorry, there was an issue submitting your inquiry. Please try again.');
        }
    }
}
