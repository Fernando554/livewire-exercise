<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Applications;

class PostulacionesIndex extends Component
{
    use WithPagination;
    public $paginate = 10;
    public $search = '';
    public $orderBy = 'id';
    public $order = 'desc';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $applications = applications::where('name', 'like', '%'.$this->search. '%')
        ->orWhere('last_name1', 'like', '%'.$this->search. '%')
        ->orWhere('last_name2', 'like', '%'.$this->search. '%')
        ->orWhere('email', 'like', '%'.$this->search. '%')
        ->orWhere('phone', 'like', '%'.$this->search. '%')
        ->orWhere('phone2', 'like', '%'.$this->search. '%')
        ->orWhere('birthdate', 'like', '%'.$this->search. '%')
        ->orWhere('curp', 'like', '%'.$this->search. '%')
        ->orWhere('rfc', 'like', '%'.$this->search. '%')
        ->orWhere('nss', 'like', '%'.$this->search. '%')
        ->orWhere('nationality', 'like', '%'.$this->search. '%')
        ->orWhere('place_born', 'like', '%'.$this->search. '%')
        ->orWhere('account_number_bank', 'like', '%'.$this->search. '%')
        ->orWhere('bank', 'like', '%'.$this->search. '%')
        ->orWhere('clabe', 'like', '%'.$this->search. '%')
        ->orWhere('infonavit', 'like', '%'.$this->search. '%')
        ->orWhere('store_id', 'like', '%'.$this->search. '%')
        ->orWhere('position', 'like', '%'.$this->search. '%')
        ->orWhere('date_start', 'like', '%'.$this->search. '%')
        ->orWhere('replacement_employee_id', 'like', '%'.$this->search. '%')
        ->orWhere('replacement_employee_name', 'like', '%'.$this->search. '%')
        ->orWhere('replacement_employee_reasons', 'like', '%'.$this->search. '%')
        ->orWhere('replacement_employee_date', 'like', '%'.$this->search. '%')
        ->orWhere('scholarship', 'like', '%'.$this->search. '%')
        ->orWhere('gender', 'like', '%'.$this->search. '%')
        ->orWhere('marital_status', 'like', '%'.$this->search. '%')
        ->orWhere('street', 'like', '%'.$this->search. '%')
        ->orWhere('number', 'like', '%'.$this->search. '%')
        ->orWhere('suburb', 'like', '%'.$this->search. '%')
        ->orWhere('colony', 'like', '%'.$this->search. '%')
        ->orWhere('city', 'like', '%'.$this->search. '%')
        ->orWhere('state', 'like', '%'.$this->search. '%')
        ->orWhere('cp', 'like', '%'.$this->search. '%')
        ->orWhere('cp_fiscal', 'like', '%'.$this->search. '%')
        ->orWhere('notes', 'like', '%'.$this->search. '%')
        ->orWhere('reference', 'like', '%'.$this->search. '%')
        ->orWhere('business_id', 'like', '%'.$this->search. '%')
        ->orWhere('src', 'like', '%'.$this->search. '%')
        ->orderBy($this->orderBy, $this->order)
        ->paginate($this->paginate);
        return view('livewire.postulaciones-index', compact('applications'));
    }

    //delete
    public function destroy($id)
    {
        $applications = Applications::find($id);
        $applications->delete();
        session()->flash('message', 'Postulación eliminada correctamente.');
    }
}
