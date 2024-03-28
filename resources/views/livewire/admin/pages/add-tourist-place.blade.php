<div>
    <livewire:admin.navigation.top-bar />
    <livewire:admin.navigation.side-bar />
    <div class="content-page">

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <livewire:admin.navigation.breadcrumb :breadTitle="$breadTitle" />

                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            {{-- <livewire:admin.section.settings-menu /> --}}
                            <div class="tab-content">


                                <livewire:admin.section.add-tourist-place />
                                {{-- <livewire:admin.section.tourist-category /> --}}

                            </div> <!-- end tab-content -->
                        </div> <!-- end card body -->
                    </div> <!-- end card -->

                </div>
                <!-- end row-->

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <livewire:admin.navigation.footer />
        <!-- end Footer -->
    </div>

</div>
