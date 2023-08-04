<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\applications;

class PostulacionForm extends Component
{
    use WithFileUploads;

    public $name;
    public $last_name1;
    public $last_name2;
    public $email;
    public $phone;
    public $phone2;
    public $birthdate;
    public $curp;
    public $rfc;
    public $nss;
    public $nationality;
    public $place_born;
    public $account_number_bank;
    public $bank;
    public $clabe;
    public $infonavit;
    public $store_id;
    public $position;
    public $date_start;
    public $replacement_employee_id;
    public $replacement_employee_name;
    public $replacement_employee_reasons;
    public $replacement_employee_date;
    public $scholarship;
    public $gender;
    public $marital_status;
    public $street;
    public $number;
    public $suburb;
    public $colony;
    public $city;
    public $state;
    public $cp;
    public $cp_fiscal;
    public $notes;
    public $reference;
    public $business_id;
    public $src;
    public $applicationId;

    public function mount($applicationId = null)
    {
        if ($applicationId) {
            $application = Applications::find($applicationId);
            if ($application) {
                $this->name = $application->name;
                $this->last_name1 = $application->last_name1;
                $this->last_name2 = $application->last_name2;
                $this->email = $application->email;
                $this->phone = $application->phone;
                $this->phone2 = $application->phone2;
                $this->birthdate = $application->birthdate;
                $this->curp = $application->curp;
                $this->rfc = $application->rfc;
                $this->nss = $application->nss;
                $this->nationality = $application->nationality;
                $this->place_born = $application->place_born;
                $this->account_number_bank = $application->account_number_bank;
                $this->bank = $application->bank;
                $this->clabe = $application->clabe;
                $this->infonavit = $application->infonavit;
                $this->store_id = $application->store_id;
                $this->position = $application->position;
                $this->date_start = $application->date_start;
                $this->replacement_employee_id = $application->replacement_employee_id;
                $this->replacement_employee_name = $application->replacement_employee_name;
                $this->replacement_employee_reasons = $application->replacement_employee_reasons;
                $this->replacement_employee_date = $application->replacement_employee_date;
                $this->scholarship = $application->scholarship;
                $this->gender = $application->gender;
                $this->marital_status = $application->marital_status;
                $this->street = $application->street;
                $this->number = $application->number;
                $this->suburb = $application->suburb;
                $this->colony = $application->colony;
                $this->city = $application->city;
                $this->state = $application->state;
                $this->cp = $application->cp;
                $this->cp_fiscal = $application->cp_fiscal;
                $this->notes = $application->notes;
                $this->reference = $application->reference;
                $this->business_id = $application->business_id;
                $this->src = $application->src;
            }
        }
    }

    public function render()
    {
        return view('livewire.postulacion-form');
    }

    public function storeOrUpdate()
    {
        $this->validate([
            'name' => 'required|string',
            'last_name1' => 'required|string',
            'last_name2' => 'nullable|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'phone2' => 'nullable',
            'birthdate' => 'required|date',
            'curp' => 'required|string',
            'rfc' => 'required|string',
            'nss' => 'required',
            'nationality' => 'required|string',
            'place_born' => 'required|string',
            'account_number_bank' => 'required',
            'bank' => 'required|string',
            'clabe' => 'required',
            'infonavit' => 'required|string',
            'store_id' => 'required|string',
            'position' => 'required|string',
            'date_start' => 'required|date',
            'replacement_employee_id' => 'nullable',
            'replacement_employee_name' => 'required|string',
            'replacement_employee_reasons' => 'required|string',
            'replacement_employee_date' => 'required|date',
            'scholarship' => 'required|string',
            'gender' => '',
            'marital_status' => 'required',
            'street' => 'required|string',
            'number' => 'required',
            'suburb' => 'nullable',
            'colony' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'cp' => 'required',
            'cp_fiscal' => 'nullable',
            'notes' => 'nullable',
            'reference' => 'nullable',
            'business_id' => 'required',
            'src' => 'required|file',
        ]);
        try {
            $data = [
                'name' => $this->name,
                    'last_name1' => $this->last_name1,
                    'last_name2' => $this->last_name2,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'phone2' => $this->phone2,
                    'birthdate' => $this->birthdate,
                    'curp' => $this->curp,
                    'rfc' => $this->rfc,
                    'nss' => $this->nss,
                    'nationality' => $this->nationality,
                    'place_born' => $this->place_born,
                    'account_number_bank' => $this->account_number_bank,
                    'bank' => $this->bank,
                    'clabe' => $this->clabe,
                    'infonavit' => $this->infonavit,
                    'store_id' => $this->store_id,
                    'position' => $this->position,
                    'date_start' => $this->date_start,
                    'replacement_employee_id' => $this->replacement_employee_id,
                    'replacement_employee_name' => $this->replacement_employee_name,
                    'replacement_employee_reasons' => $this->replacement_employee_reasons,
                    'replacement_employee_date' => $this->replacement_employee_date,
                    'scholarship' => $this->scholarship,
                    'gender' => $this->gender,
                    'marital_status' => $this->marital_status,
                    'street' => $this->street,
                    'number' => $this->number,
                    'suburb' => $this->suburb,
                    'colony' => $this->colony,
                    'city' => $this->city,
                    'state' => $this->state,
                    'cp' => $this->cp,
                    'cp_fiscal' => $this->cp_fiscal,
                    'notes' => $this->notes,
                    'reference' => $this->reference,
                    'business_id' => $this->business_id,
                    'src' => $this->src->store('images', 'public'),
            ];
            // dd($data);
            if ($this->applicationId) {
                Applications::find($this->applicationId)->update($data);
                $this->emit('alert', 'success', 'Postulación actualizada con éxito');
            }else{
                Applications::create($data);
                $this->emit('alert', 'success', 'Postulación creada con éxito');
            }
            session()->flash('message', 'Application successfully updated.');
            // dd($data);
            return redirect()->route('index');
        } catch (\Exception $e) {
            dd($e);
            session()->flash('message', 'Application could not be updated.');
            return back()->withInput();
        }
    }
}
