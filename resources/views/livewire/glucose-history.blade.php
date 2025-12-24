<div wire:poll.2s>
    <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
        <div>
            <h1 class="text-3xl font-bold text-slate-900">Glucose History</h1>
            <p class="text-slate-500 mt-1">Overview of all glucose data and trends.</p>
        </div>
        <div class="text-sm text-slate-400">
            Last updated: {{ now()->format('M d, Y H:i A') }}
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
        <!-- Total Patients Card -->
        <div class="glass-panel rounded-2xl p-6 shadow-sm relative overflow-hidden group hover:shadow-md transition">
            <div class="absolute top-0 right-0 w-32 h-32 bg-sky-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50 transform translate-x-10 -translate-y-10"></div>
            
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-semibold text-sky-600 uppercase tracking-wider">Total Records</p>
                    <div class="flex items-baseline gap-2 mt-2">
                        <span class="text-4xl font-bold text-slate-900">
                            {{ number_format($totalRecords) }}
                        </span>
                        <span class="text-sm font-medium text-slate-500">records found</span>
                    </div>
                </div>
                <div class="w-12 h-12 rounded-full bg-sky-50 text-sky-600 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Average Glucose Card -->
        <div class="glass-panel rounded-2xl p-6 shadow-sm relative overflow-hidden group hover:shadow-md transition">
            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-100 rounded-full mix-blend-multiply filter blur-2xl opacity-50 transform translate-x-10 -translate-y-10"></div>
            
            <div class="flex items-center justify-between relative z-10">
                <div>
                    <p class="text-sm font-semibold text-blue-600 uppercase tracking-wider">Average Glucose</p>
                    <div class="flex items-baseline gap-2 mt-2">
                        <span class="text-4xl font-bold text-slate-900">
                            {{ number_format($averageGlucose, 1) }}
                        </span>
                        <span class="text-sm font-medium text-slate-500">mg/dL</span>
                    </div>
                </div>
                <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="glass-panel rounded-3xl shadow-lg border border-white/50 overflow-hidden mt-8">
        <div class="p-6 border-b border-slate-100 flex flex-col sm:flex-row justify-between items-center gap-4 bg-white/50">
            <h2 class="text-lg font-bold text-slate-800">Historical Data</h2>
            
            <!-- Rows Per Page Selector -->
            <div class="flex items-center gap-2">
                <label for="per_page" class="text-sm font-medium text-slate-600">Rows per page:</label>
                <select wire:model.live="perPage" id="per_page" 
                    class="bg-white border border-slate-300 text-slate-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-slate-600">
                <thead class="text-xs text-slate-500 uppercase bg-slate-50/80 border-b border-slate-100">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-semibold">ID</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Date & Time</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Glucose Level</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white/40">
                    @forelse($histories as $history)
                        <tr class="hover:bg-blue-50/50 transition duration-150" wire:key="{{ $history->id }}">
                            <td class="px-6 py-4 font-medium text-slate-900">#{{ $histories->firstItem() + $loop->index }}</td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-medium text-slate-800">{{ $history->created_at->format('M d, Y') }}</span>
                                    <span class="text-xs text-slate-400">{{ $history->created_at->format('h:i A') }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-800">
                                    {{ $history->glucose }} mg/dL
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                @php
                                    $statusColor = match(strtolower($history->status)) {
                                        'normal' => 'bg-green-100 text-green-800',
                                        'high', 'tinggi' => 'bg-red-100 text-red-800',
                                        'low', 'rendah' => 'bg-yellow-100 text-yellow-800',
                                        default => 'bg-slate-100 text-slate-600'
                                    };
                                @endphp
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusColor }}">
                                    <span class="w-1.5 h-1.5 mr-1.5 rounded-full bg-current opacity-50"></span>
                                    {{ ucfirst($history->status) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-slate-500">
                                <div class="flex flex-col items-center justify-center gap-2">
                                    <svg class="w-8 h-8 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <p>No historical data recorded yet.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($histories->hasPages())
            <div class="px-6 py-4 border-t border-slate-100 bg-slate-50/50">
                {{ $histories->links() }}
            </div>
        @endif
    </div>
</div>
