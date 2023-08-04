<!-- resources/views/livewire/postulacion-form.blade.php -->
<form wire:submit.prevent="storeOrUpdate" method="POST">
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Nuevo Producto</h3>
        <div class="col-auto">
            <a href="{{ route('index') }}" class="btn btn-outline-info">
                <i data-feather="eye"></i>
                Mostrar Postulaciones
            </a>
            <button type="submit" class="btn btn-primary" wire:click="storeOrUpdate">
                <i data-feather="plus-square"></i>
                Crear o Actualizar
            </button>
        </div>
    </div>
<div class="row mt-4">
    <div class="stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    @if ($errors->has('message'))
                        <div class="alert alert-danger">{{ $errors->first('message') }}</div>
                    @endif
                        <div class="col-12 col-sm-6 mt-3">
                            <label for="name">Nombre:</label>
                            <input type="text" id="name" wire:model.defer="name" class="form-control">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="last_name1">Primer Apellido:</label>
                            <input type="text" id="last_name1" wire:model.defer="last_name1" class="form-control">
                            @error('last_name1') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="last_name2">Segundo Apellido:</label>
                            <input type="text" id="last_name2" wire:model.defer="last_name2" class="form-control">
                            @error('last_name2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="email">Correo electrónico:</label>
                            <input type="email" id="email" wire:model.defer="email" class="form-control">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="phone">Teléfono:</label>
                            <input type="text" id="phone" wire:model.defer="phone" class="form-control">
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="phone2">Teléfono 2:</label>
                            <input type="text" id="phone2" wire:model.defer="phone2" class="form-control">
                            @error('phone2') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="birthdate">Fecha de Nacimiento:</label>
                            <input type="date" id="birthdate" wire:model.defer="birthdate" class="form-control">
                            @error('birthdate') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="curp">CURP:</label>
                            <input type="text" id="curp" wire:model.defer="curp" class="form-control">
                            @error('curp') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="rfc">RFC:</label>
                            <input type="text" id="rfc" wire:model.defer="rfc" class="form-control">
                            @error('rfc') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="nss">NSS:</label>
                            <input type="text" id="nss" wire:model.defer="nss" class="form-control">
                            @error('nss') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="nationality">Nacionalidad:</label>
                            <input type="text" id="nationality" wire:model.defer="nationality" class="form-control">
                            @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="place_born">Lugar de Nacimiento:</label>
                            <input type="text" id="place_born" wire:model.defer="place_born" class="form-control">
                            @error('place_born') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="account_number_bank">Número de Cuenta Bancaria:</label>
                            <input type="text" id="account_number_bank" wire:model.defer="account_number_bank" class="form-control">
                            @error('account_number_bank') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="bank">Banco:</label>
                            <input type="text" id="bank" wire:model.defer="bank" class="form-control">
                            @error('bank') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="clabe">CLABE:</label>
                            <input type="text" id="clabe" wire:model.defer="clabe" class="form-control">
                            @error('clabe') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3" class="form-control">
                            <label for="infonavit">INFONAVIT:</label>
                            <input type="text" id="infonavit" wire:model.defer="infonavit" class="form-control">
                            @error('infonavit') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="store_id">ID de Tienda:</label>
                            <input type="text" id="store_id" wire:model.defer="store_id" class="form-control">
                            @error('store_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="position">Puesto:</label>
                            <input type="text" id="position" wire:model.defer="position" class="form-control">
                            @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="date_start">Fecha de Inicio:</label>
                            <input type="date" id="date_start" wire:model.defer="date_start" class="form-control">
                            @error('date_start') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="replacement_employee_id">ID Empleado de Reemplazo:</label>
                            <input type="text" id="replacement_employee_id" wire:model.defer="replacement_employee_id" class="form-control">
                            @error('replacement_employee_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="replacement_employee_name">Nombre Empleado de Reemplazo:</label>
                            <input type="text" id="replacement_employee_name" wire:model.defer="replacement_employee_name" class="form-control">
                            @error('replacement_employee_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="replacement_employee_reasons">Motivos de Reemplazo:</label>
                            <input type="text" id="replacement_employee_reasons" wire:model.defer="replacement_employee_reasons" class="form-control">
                            @error('replacement_employee_reasons') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="replacement_employee_date">Fecha de Reemplazo:</label>
                            <input type="date" id="replacement_employee_date" wire:model.defer="replacement_employee_date" class="form-control">
                            @error('replacement_employee_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="scholarship">Beca o Escolaridad:</label>
                            <input type="text" id="scholarship" wire:model.defer="scholarship" class="form-control">
                            @error('scholarship') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="gender">Género:</label>
                            <select id="gender" wire:model.defer="gender" class="form-select">
                                <option value="">Seleccione</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                                <option value="3">Otro</option>
                            </select>
                            @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="marital_status">Estado Civil:</label>
                            <select id="marital_status" wire:model.defer="marital_status" class="form-select">
                                <option value="">Seleccione</option>
                                <option value="1">Soltero(a)</option>
                                <option value="2">Casado(a)</option>
                            </select>
                            @error('marital_status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="street">Calle:</label>
                            <input type="text" id="street" wire:model.defer="street" class="form-control">
                            @error('street') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="number">Número:</label>
                            <input type="text" id="number" wire:model.defer="number" class="form-control">
                            @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 col-sm-6 mt-3">
                            <label for="suburb">Colonia:</label>
                            <input type="text" id="suburb" wire:model.defer="suburb" class="form-control">
                            @error('suburb') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="colony">Localidad o Delegación:</label>
                            <input type="text" id="colony" wire:model.defer="colony" class="form-control">
                            @error('colony') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="city">Ciudad:</label>
                            <input type="text" id="city" wire:model.defer="city" class="form-control">
                            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="state">Estado:</label>
                            <input type="text" id="state" wire:model.defer="state" class="form-control">
                            @error('state') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="cp">Código Postal:</label>
                            <input type="text" id="cp" wire:model.defer="cp" class="form-control">
                            @error('cp') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="cp_fiscal">Código Postal Fiscal:</label>
                            <input type="text" id="cp_fiscal" wire:model.defer="cp_fiscal" class="form-control">
                            @error('cp_fiscal') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="notes">Notas:</label>
                            <textarea id="notes" wire:model.defer="notes" class="form-control"></textarea>
                            @error('notes') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="reference">Referencia:</label>
                            <textarea id="reference" wire:model.defer="reference" class="form-control"></textarea>
                            @error('reference') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-12 col-sm-6 mt-3">
                            <label for="business_id">ID de Negocio:</label>
                            <input type="text" id="business_id" wire:model.defer="business_id" class="form-control">
                            @error('business_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-12 col-sm-6 mt-3">
                            <input type="file" id="src" wire:model="src" class="form-control">
                            @error('src') <span class="text-danger">{{ $message }}</span> @enderror
                            @if ($src == null)
                                <img src="{{ $src->temporaryUrl() }}" class="img-fluid mt-3">
                            @endif
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

