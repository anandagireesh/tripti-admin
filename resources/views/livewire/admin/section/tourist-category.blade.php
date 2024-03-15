<div class="tab-pane show @if(Session::has('cat')) active @endif" id="category">
    <form wire:submit="updateTouristCategory">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" wire:model="category" placeholder="Enter Category">
                </div>
                <div>
                    @error('category')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div>
        </div> <!-- end row -->
        <div class="text-end">
            <button type="submit" class="btn btn-success mt-2"><i class="ri-save-line"></i> Save</button>
        </div>
    </form>

    <livewire:admin.section.tourist-category-list />

</div>
