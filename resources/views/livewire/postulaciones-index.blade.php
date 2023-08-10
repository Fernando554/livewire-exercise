<div>
    @livewireStyles()
    <div class="row justify-content-between align-items-center">
        <h3 class="col-auto">Lista de Postulaciones</h3>
        <div class="col-auto">
            <a href="{{ route('home') }}" class="btn btn-primary">
                <i data-feather="plus-square"></i>
                Nueva Postulación
            </a>
        </div>
    </div>
<div class="row mt-3">
    <div class="stretch-card">
        <div class="card">
            <div class="card-body">
                <table id="products" class="w-100 table table-striped">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="form-group">
                                <label for="paginate">Mostrar:</label>
                                <select wire:model="paginate" class="form-control">
                                    <option selected>10</option>
                                    <option selected>25</option>
                                    <option selected>50</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-auto">
                            <input type="text" wire:model="search" placeholder="Buscar por nombre o email">
                        </div>
                    </div>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido 1</th>
                            <th>Apellido 2</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Imagen/archivo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $application)
                            <tr>
                                <td>{{ $application->id }}</td>
                                <td>{{ $application->name }}</td>
                                <td>{{ $application->last_name1 }}</td>
                                <td>{{ $application->last_name2 }}</td>
                                <td>{{ $application->email }}</td>
                                <td>{{ $application->phone }}</td>
                                <td>
                                @if ($application->src)
                                    @if (Str::endsWith($application->src, ['.jpg', '.jpeg', '.png', '.gif']))
                                        <img src="{{ asset('storage/' . $application->src) }}" alt="Imagen" style="max-width: 500px; max-height: 500px;">
                                        <a href="{{ asset('storage/' . $application->src) }}" target="_blank">Ver imagen</a>
                                    </img>
                                    @else
                                        <a href="{{ asset('storage/' . $application->src) }}" target="_blank">Ver archivo</a>
                                    @endif
                                @else
                                    sin archivo
                                @endif
                                </td>
                                <td>
                                    <a href="{{ route('home', ['applicationId' => $application->id]) }}" class="btn btn-sm btn-primary">Editar</a>
                                    <button wire:click="destroy({{ $application->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $applications->links() !!}
            </div>
        </div>
    </div>
</div>
@livewireScripts()
</div>