<?php

namespace App\Livewire;

use App\Models\Stay;
use Livewire\Component;

class StayCatalog extends Component
{
    public string $activeCategory = 'all';
    public string $search = '';
    public ?int $selectedStayId = null;

    public function setCategory(string $category): void
    {
        $this->activeCategory = $category;
    }

    public function selectStay(int $id): void
    {
        $this->selectedStayId = $id;
    }

    public function closeModal(): void
    {
        $this->selectedStayId = null;
    }

    public function render()
    {
        $query = Stay::query()->orderBy('sort_order', 'asc');

        if ($this->activeCategory !== 'all') {
            $query->where('category', $this->activeCategory);
        }

        if (!empty($this->search)) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('location', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        $stays = $query->get();
        $selectedStay = $this->selectedStayId ? Stay::find($this->selectedStayId) : null;

        return view('livewire.stay-catalog', [
            'stays' => $stays,
            'selectedStay' => $selectedStay,
            'categories' => [
                'all' => 'All Curations',
                'villa' => 'Boutique Villas',
                'resort' => 'Luxury Resorts',
                'ocean' => 'Ocean & Nature',
            ],
        ]);
    }
}
