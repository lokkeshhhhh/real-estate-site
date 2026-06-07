@extends('layouts.dashboard')

@section('content')

<div class="mb-6 flex justify-between items-center">
    <a href="{{ route('dashboard') }}" class="text-navy font-medium hover:underline flex items-center gap-1">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        Back to Inquiries
    </a>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden max-w-4xl">
    <div class="p-8 border-b border-gray-200 flex justify-between items-start">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-1">{{ $inquiry['name'] }}</h2>
            <div class="text-gray-500 font-mono text-sm">Submitted: {{ \Carbon\Carbon::parse($inquiry['submitted_at'])->format('d F Y, g:i A') }}</div>
        </div>
        <div>
            <!-- Status updater can also be here, or just show badge -->
            <span class="inline-block px-3 py-1 rounded text-sm font-bold uppercase tracking-wider {{ $inquiry['status'] === 'new' ? 'bg-yellow-100 text-yellow-800' : ($inquiry['status'] === 'contacted' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800') }}">
                {{ $inquiry['status'] }}
            </span>
        </div>
    </div>
    
    <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 border-b border-gray-200">
        <div>
            <div class="text-xs uppercase tracking-wider text-gray-500 mb-1">Email Address</div>
            <div class="font-medium text-gray-800">{{ $inquiry['email'] }} <a href="mailto:{{ $inquiry['email'] }}" class="text-blue-600 text-sm ml-2 underline">Email</a></div>
        </div>
        <div>
            <div class="text-xs uppercase tracking-wider text-gray-500 mb-1">Phone Number</div>
            <div class="font-medium text-gray-800">{{ $inquiry['phone'] }} <a href="tel:{{ $inquiry['phone'] }}" class="text-blue-600 text-sm ml-2 underline">Call</a></div>
        </div>
        <div>
            <div class="text-xs uppercase tracking-wider text-gray-500 mb-1">City of Interest</div>
            <div class="font-medium text-gray-800">{{ $inquiry['city'] }}</div>
        </div>
        <div>
            <div class="text-xs uppercase tracking-wider text-gray-500 mb-1">Property Type</div>
            <div class="font-medium text-gray-800">{{ $inquiry['property_type'] }}</div>
        </div>
        <div>
            <div class="text-xs uppercase tracking-wider text-gray-500 mb-1">Budget Range</div>
            <div class="font-medium text-gray-800">{{ $inquiry['budget_range'] }}</div>
        </div>
    </div>
    
    <div class="p-8">
        <div class="text-xs uppercase tracking-wider text-gray-500 mb-3">Message / Requirement</div>
        <div class="bg-gray-50 p-6 rounded border border-gray-200 text-gray-700 whitespace-pre-wrap leading-relaxed">
{{ $inquiry['message'] }}
        </div>
    </div>
    
    <div class="p-8 bg-gray-50 border-t border-gray-200 flex justify-between items-center">
        <div>
            <label class="text-xs uppercase tracking-wider text-gray-500 mr-2">Update Status:</label>
            <select onchange="updateStatus('{{ $inquiry['id'] }}', this.value)" id="select-{{ $inquiry['id'] }}" class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-navy">
                <option value="new" {{ $inquiry['status'] === 'new' ? 'selected' : '' }}>New</option>
                <option value="contacted" {{ $inquiry['status'] === 'contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="closed" {{ $inquiry['status'] === 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>
        
        <form action="{{ route('dashboard.inquiry.destroy', $inquiry['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to permanently delete this inquiry?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:text-white hover:bg-red-600 border border-red-600 font-medium px-4 py-2 rounded transition">
                Delete Inquiry
            </button>
        </form>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    function updateStatus(id, status) {
        fetch(`/dashboard/inquiries/${id}/status`, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ status: status })
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // Refresh to show updated badge
                window.location.reload();
            } else {
                alert('Error updating status');
            }
        })
        .catch(err => {
            alert('Error updating status');
        });
    }
</script>

@endsection
