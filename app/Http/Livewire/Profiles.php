<?php

namespace App\Http\Livewire;


use App\Models\Color;
use App\Models\Material;
use App\Models\Profile;
use App\Models\ProfileType;
use Livewire\Component;
use Livewire\WithPagination;

class Profiles extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $perPage = 9;
    public $search;
    public $orderBy = 'id';
    public $orderAsc = true;
    public $color;
    public $material;
    public $profile_type;

    public function updatingSearch()
    {
        $this->resetPage();
    }

   /* public function resetPage(){
        $this->perPage = 9;
    }*/
    public function render()
    {
        return view('livewire.profiles', [
            'profiles' => Profile::search($this->search)
                ->GetMaterial($this->material)
                ->GetColor($this->color)
                ->GetProfileType($this->profile_type)
                ->paginate($this->perPage),
            'materials' => Material::all(),
            'profile_types' => ProfileType::all(),
            'colors' => Color::all(),
        ]);
    }
}
