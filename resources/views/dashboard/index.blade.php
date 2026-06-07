@extends('layouts.dashboard')

@section('content')

<!-- Stats -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 border-l-4 border-gray-500">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Total Inquiries</div>
        <div class="text-3xl font-bold text-gray-800">{{ $stats['total'] }}</div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 border-l-4 border-gold">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">New</div>
        <div class="text-3xl font-bold text-gray-800">{{ $stats['new'] }}</div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 border-l-4 border-blue-500">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Contacted</div>
        <div class="text-3xl font-bold text-gray-800">{{ $stats['contacted'] }}</div>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 border-l-4 border-green-500">
        <div class="text-sm font-medium text-gray-500 uppercase tracking-wider mb-1">Closed</div>
        <div class="text-3xl font-bold text-gray-800">{{ $stats['closed'] }}</div>
    </div>
</div>

<div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
    <!-- Header/Filter -->
    <div class="p-6 border-b border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4">
        <div class="flex gap-2" id="dashboard-filters">
            <button class="filter-btn px-4 py-2 text-sm font-medium rounded bg-navy text-white" data-status="all">All</button>
            <button class="filter-btn px-4 py-2 text-sm font-medium rounded bg-gray-100 text-gray-600 hover:bg-gray-200" data-status="new">New</button>
            <button class="filter-btn px-4 py-2 text-sm font-medium rounded bg-gray-100 text-gray-600 hover:bg-gray-200" data-status="contacted">Contacted</button>
            <button class="filter-btn px-4 py-2 text-sm font-medium rounded bg-gray-100 text-gray-600 hover:bg-gray-200" data-status="closed">Closed</button>
        </div>
        <div>
            <input type="text" id="search-input" placeholder="Search name or phone..." class="px-4 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:border-navy">
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse" id="inquiries-table">
            <thead>
                <tr class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                    <th class="px-6 py-4 font-medium border-b">Name & Phone</th>
                    <th class="px-6 py-4 font-medium border-b">Details</th>
                    <th class="px-6 py-4 font-medium border-b">Date</th>
                    <th class="px-6 py-4 font-medium border-b w-40">Status</th>
                    <th class="px-6 py-4 font-medium border-b text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-sm">
                @forelse($paginatedInquiries as $inquiry)
                <tr class="hover:bg-gray-50 inquiry-row" data-status="{{ $inquiry['status'] }}" data-search="{{ strtolower($inquiry['name'] . ' ' . $inquiry['phone']) }}">
                    <td class="px-6 py-4">
                        <div class="font-bold text-gray-800">{{ $inquiry['name'] }}</div>
                        <div class="text-gray-500">{{ $inquiry['phone'] }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-gray-800">{{ $inquiry['city'] }}</div>
                        <div class="text-xs text-gray-500">{{ $inquiry['property_type'] }} • {{ $inquiry['budget_range'] }}</div>
                    </td>
                    <td class="px-6 py-4 text-gray-500">
                        {{ \Carbon\Carbon::parse($inquiry['submitted_at'])->format('d M Y, g:i A') }}
                    </td>
                    <td class="px-6 py-4">
                        <select onchange="updateStatus('{{ $inquiry['id'] }}', this.value)" class="text-sm border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-1 focus:ring-navy {{ $inquiry['status'] === 'new' ? 'bg-yellow-50 text-yellow-800' : ($inquiry['status'] === 'contacted' ? 'bg-blue-50 text-blue-800' : 'bg-green-50 text-green-800') }}" id="select-{{ $inquiry['id'] }}">
                            <option value="new" {{ $inquiry['status'] === 'new' ? 'selected' : '' }}>New</option>
                            <option value="contacted" {{ $inquiry['status'] === 'contacted' ? 'selected' : '' }}>Contacted</option>
                            <option value="closed" {{ $inquiry['status'] === 'closed' ? 'selected' : '' }}>Closed</option>
                        </select>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end space-x-2">
                            <a href="{{ route('dashboard.inquiry.show', $inquiry['id']) }}" class="text-blue-600 hover:text-blue-900" title="View">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </a>
                            <form action="{{ route('dashboard.inquiry.destroy', $inquiry['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this inquiry?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" title="Delete">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-10 text-center text-gray-500">No inquiries found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($totalPages > 1)
    <div class="p-6 border-t border-gray-200 flex justify-between items-center">
        <span class="text-sm text-gray-500">Page {{ $page }} of {{ $totalPages }}</span>
        <div class="flex gap-2">
            @if($page > 1)
                <a href="{{ route('dashboard', ['page' => $page - 1]) }}" class="px-4 py-2 border rounded text-sm hover:bg-gray-50">Previous</a>
            @endif
            @if($page < $totalPages)
                <a href="{{ route('dashboard', ['page' => $page + 1]) }}" class="px-4 py-2 border rounded text-sm hover:bg-gray-50">Next</a>
            @endif
        </div>
    </div>
    @endif
</div>

<!-- CSRF Token for AJAX -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    // AJAX Status Update
    function updateStatus(id, status) {
        const selectEl = document.getElementById('select-' + id);
        selectEl.disabled = true;
        
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
                // Update select colors
                selectEl.className = `text-sm border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-1 focus:ring-navy ${status === 'new' ? 'bg-yellow-50 text-yellow-800' : (status === 'contacted' ? 'bg-blue-50 text-blue-800' : 'bg-green-50 text-green-800')}`;
                // Update row data attribute
                selectEl.closest('tr').setAttribute('data-status', status);
            } else {
                alert('Error updating status');
            }
        })
        .catch(err => {
            alert('Error updating status');
        })
        .finally(() => {
            selectEl.disabled = false;
        });
    }

    // Client-side Filter & Search
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const searchInput = document.getElementById('search-input');
        const rows = document.querySelectorAll('.inquiry-row');
        
        let currentStatus = 'all';
        let currentSearch = '';

        function filterRows() {
            rows.forEach(row => {
                const matchStatus = currentStatus === 'all' || row.getAttribute('data-status') === currentStatus;
                const matchSearch = row.getAttribute('data-search').includes(currentSearch);
                row.style.display = matchStatus && matchSearch ? '' : 'none';
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-navy', 'text-white');
                    b.classList.add('bg-gray-100', 'text-gray-600');
                });
                btn.classList.add('bg-navy', 'text-white');
                btn.classList.remove('bg-gray-100', 'text-gray-600');
                
                currentStatus = btn.getAttribute('data-status');
                filterRows();
            });
        });

        searchInput.addEventListener('input', (e) => {
            currentSearch = e.target.value.toLowerCase();
            filterRows();
        });
    });
</script>

@endsection
