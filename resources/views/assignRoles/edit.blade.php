<div class="off-canvas off-canvas-right off-canvas-effect" id="offcanvas-edit">
    <div class="card d-flex flex-column h-100">
        <div class="card-header">
            Edit
        </div>
        <div class="card-body align-self-stretch">
            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label col-form-label-sm">ID</label>
                </div>
                <div class="col-sm-9 align-self-center" v-text="edit.id"></div>
            </div>

            @foreach(app('Spatie\Permission\Models\Role')::all()->pluck('name') as $name)
            <div class="form-group row">
                <div class="col-sm-3" for="edit-{{ $name }}">{{ $name }}</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input type="checkbox" id="edit-{{ $name }}" value="{{ $name }}" class="form-check-input" v-model="edit.roles">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="card-footer">
            <a href="javascript:;" class="text-secondary mr-4 btn-offcanvas-close">Close</a>
            <a href="javascript:;" class="text-primary mr-4" @click="edit_onSubmit('edit')">Save</a>
        </div>
    </div>
</div>