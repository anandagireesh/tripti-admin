<div>
    <form wire:submit="updateTouristPlace">
        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="ri-contacts-book-2-line me-1"></i> Tourist Place Info</h5>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="placeTitle" class="form-label">Place Title</label>
                    <input type="text" class="form-control" id="placeTitle" wire:model="placeTitle" placeholder="Enter place title">
                </div>
                <div>
                    @error('placeTitle')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Category</label>
                    <select class="form-select" id="companycategory" wire:model="category">
                        <option selected>Select Category</option>
                    @foreach ($touristcategories as $touristcategory )
                        <option value="{{ $touristcategory->id }}">{{ $touristcategory->category }}</option>
                    @endforeach
                    </select>
                </div>
                <div>
                    @error('category')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="userbio" class="form-label">Description</label>
                    <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..." wire:model="description"></textarea>
                </div>
                <div>
                    @error('description')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="useremail" class="form-label">Location</label>
                    <input id="pac-input" type="text" placeholder="Enter a location" />

                    <!-- <input type=text name=”lat”>

                    <input type=text name=”long”> -->


                    <input type="text" class="form-control" id="useremail" wire:model="location" placeholder="Enter email">
                    {{-- <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span> --}}
                </div>
                <div>
                    @error('location')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
            <div id="map"></div>
    <div id="infowindow-content">
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span>
    </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="userbio" class="form-label">visitor guidelines</label>
                    <textarea class="form-control" id="userbio" rows="4" placeholder="Write something..." wire:model="guidelines"></textarea>
                </div>
                <div>
                    @error('guidelines')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="userRole" class="form-label">fees</label>
                    <input type="text" class="form-control" wire:model="fees" id="userRole">
                    {{-- <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span> --}}
                </div>
                <div>
                    @error('fees')
                        <p class="text-danger">{{ $message }} </p>
                    @enderror
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <h5 class="mb-3 text-uppercase bg-light p-2"><i class="ri-building-line me-1"></i> Opening Hours</h5>
        <div class="row">
            <div class="col-md-1 mb-3">
                 <label for="companyname" class="form-label">Day</label>
            </div>
            <div class="col-md-3 mb-3">
                 <label for="companyname" class="form-label">Status</label>
            </div>
            <div class="col-md-4 mb-3">
                 <label for="companyname" class="form-label">Open Time</label>
            </div>
            <div class="col-md-4 mb-3">
                 <label for="companyname" class="form-label">Closed Time</label>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Monday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="mondayIsClosed" id="companycategory">
                        <option >Select statue</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="mondayOpenTime" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="mondayCloseTime" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                   <label for="companyname" class="form-label">Tuesday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="tuesdayIsClosed" id="companycategory">
                        <option >Select statue</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="tuesdayOpenTime" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="tuesdayClosedTime" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Wednesday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="wednesdayIsClosed" id="companycategory">
                        <option >Select status</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="wednesdayOpenTime" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="wednesdayClosedTime" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Thursday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="thursdayIsClosed" id="companycategory">
                        <option >Select status</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="thursdayOpenTime" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="thursdayClosedTime" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Friday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="fridayIsClosed" id="companycategory">
                        <option >Select status</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" wire:model="fridayOpenTime" class="form-control" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" wire:model="fridayClosedTime" class="form-control" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Saturday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="saturdayIsClosed" id="companycategory">
                        <option >Select status</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" wire:model="saturdayOpenTime" class="form-control" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" wire:model="saturdayClosedTime" class="form-control" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Sunday</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <select class="form-select" wire:model="sundayIsClosed" id="companycategory">
                        <option >Select status</option>
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                        <option value="Not Applicable">Not Applicable</option>
                        <option value="Not Available">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="sundayOpenTime" id="companyname" placeholder="10:00 AM">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <input type="text" class="form-control" wire:model="sundayClosedTime" id="companyname" placeholder="6:00 PM">
                </div>
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success mt-2"><i class="ri-save-line"></i> Save</button>
        </div>
    </form>
</div>