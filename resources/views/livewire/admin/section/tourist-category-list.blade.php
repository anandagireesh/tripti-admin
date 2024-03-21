<div>

    <h5 class="text-uppercase mb-3"><i class="ri-briefcase-line me-1"></i>
        Categories</h5>
    <div class="table-responsive">
        <table class="table table-sm table-centered table-hover table-borderless mb-0">
            <thead class="border-top border-bottom bg-light-subtle border-light">
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Created On</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($touristCategories->isEmpty())

                <tr>
                    <td colspan="5" class="text-center">No categories added</td>
                </tr>

                @else
                @foreach ($touristCategories as $touristCategory)

                <tr wire:key="{{$touristCategory->id}}">
                    <td><img class="img-fluid avatar-sm rounded-circle" src="https://ui-avatars.com/api/?name={{$touristCategory->category}}&background=random" alt="{{$touristCategory->category}}"></td>
                    <td>@if ($editingCategoryId == $touristCategory->id)
                        <input type="text" class="form-control" wire:model="category" placeholder="Enter Category">
                        @error('category')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                        <button type="button" wire:click="updateTouristCategory" class="btn btn-success btn-sm mt-2"><i class="ri-save-line"></i> Save</button>
                        <button type="button" wire:click="cancelEdit" class="btn btn-danger btn-sm mt-2"><i class="ri-close-line"></i> Cancel</button>


                    @else
                    {{$touristCategory->category}}
                    @endif</td>
                    <td> {{ \Carbon\Carbon::parse($touristCategory->created_at)->diffForHumans() }}</td>
                    <td>@if ($touristCategory->status == 'active')
                        <span class="badge bg-success-subtle text-success">{{$touristCategory->status}}</span>
                        @else
                        <span class="badge bg-danger-subtle text-danger">{{$touristCategory->status}}</span>
                    @endif
                </td>

                    <td><i role="button" wire:click="edit({{$touristCategory->id}})" class="ri-edit-2-line me-3"></i>  <i role="button" wire:click="delete({{$touristCategory->id}})" class="ri-delete-bin-2-line"></i></td>
                </tr>

                @endforeach

                @endif

            </tbody>
        </table>

    </div>

    <div class="d-flex justify-content-end">
        {!! $touristCategories->links() !!}
    </div>
</div>
