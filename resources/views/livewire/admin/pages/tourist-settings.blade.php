<div>
    <livewire:admin.navigation.top-bar />
    <livewire:admin.navigation.side-bar />
    <div class="content-page">

        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <livewire:admin.navigation.breadcrumb :breadTitle="$breadTitle" />

                <div class="row">
                    <livewire:admin.section.tourist-category />
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
