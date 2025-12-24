<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\History;

class GlucoseHistory extends Component
{
    use WithPagination;

    public $perPage = 10;

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function render()
    {
        $averageGlucose = History::all()->avg('glucose');
        $totalRecords = History::count();
        $histories = History::orderBy('created_at', 'desc')->paginate($this->perPage);

        return view('livewire.glucose-history', [
            'histories' => $histories,
            'averageGlucose' => $averageGlucose,
            'totalRecords' => $totalRecords
        ]);
    }
}
