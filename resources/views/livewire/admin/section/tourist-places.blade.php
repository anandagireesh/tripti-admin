<div>
    <div class="tab-pane show @if(Session::has('cat')) active @endif" id="category">

            <div class="text-end">
                <button type="submit" class="btn btn-success mt-2"><i class="ri-save-line"></i> Add Tourist Place</button>
            </div>


        <livewire:admin.section.tourist-places-list />

    </div>

</div>
