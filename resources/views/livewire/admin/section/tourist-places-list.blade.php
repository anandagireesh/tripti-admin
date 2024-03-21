<div>

    <div class="table-responsive mt-3">
        <table class="table table-sm table-centered table-hover table-borderless mb-0">
            <thead class="border-top border-bottom bg-light-subtle border-light">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($touristPlaces->isEmpty())

                <tr>
                    <td colspan="5" class="text-center">No Tourist places added</td>
                </tr>

                @else
                @php
                $i = 1;
                @endphp
                @foreach ($touristPlaces as $touristPlace)

                <tr wire:key="{{$touristPlace->id}}">
                    <td>{{$i++}}</td>
                    <td>@if ($editingCategoryId == $touristPlace->id)
                        <input type="text" class="form-control" wire:model="category" placeholder="Enter Category">
                        @error('category')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                        <button type="button" wire:click="updateTouristCategory" class="btn btn-success btn-sm mt-2"><i class="ri-save-line"></i> Save</button>
                        <button type="button" wire:click="cancelEdit" class="btn btn-danger btn-sm mt-2"><i class="ri-close-line"></i> Cancel</button>


                    @else
                    {{$touristPlace->name}}
                    @endif</td>
                    <td> {{$touristPlace->location}}</td>
                    <td>{{$touristPlace->category}}</td>

                    <td><i role="button" wire:click="edit({{$touristPlace->id}})" class="ri-edit-2-line me-3"></i>  <i role="button" wire:click="delete({{$touristPlace->id}})" class="ri-delete-bin-2-line"></i></td>
                </tr>

                @endforeach

                @endif

            </tbody>
        </table>

    </div>

    <div class="d-flex justify-content-end">
        {!! $touristPlaces->links() !!}
    </div>
</div>
