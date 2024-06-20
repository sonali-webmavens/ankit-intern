
<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title" style="float: left;">All Employees</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Id</th>
                                    <th style="text-align: center;">Name</th>
                                    <th style="text-align: center;">Email</th>
                                    <th style="text-align: center;">Phone</th>
                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td style="text-align: center;">{{ $employee->id }}</td>
                                        <td>{{ $employee->fist_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>
                                            @if ($editEmployeeId === $employee->id)
                                                <input wire:model="editPhone" type="text" class="form-control">
                                                @error('editPhone') <span class="text-danger">{{ $message }}</span> @enderror
                                            @else
                                                {{ $employee->phone }}
                                            @endif
                                        </td>
                                        <td style="text-align: center;">
                                            @if ($editEmployeeId === $employee->id)
                                                <button wire:click="update({{ $employee->id }})" class="fa fa-floppy-o" aria-hidden="true"></button>
                                                <button wire:click="$set('editEmployeeId', null)" class="fa fa-ban" aria-hidden="true"></button>
                                            @else
                                                <button wire:click="edit({{ $employee->id }})" class="fa fa-pencil" aria-hidden="true"></button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Listen for Livewire event and refresh the page
    document.addEventListener('livewire:load', function () {
        Livewire.on('refresh-the-component', () => {
            Livewire.emit('refreshComponent');
        });
    });
</script>
@endpush
