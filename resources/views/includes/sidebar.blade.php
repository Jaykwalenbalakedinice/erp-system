<div class="sidebar">
    <div class="logo-container">
        <div>
            <i class='bx bx-arrow-back fs-3 float-end mb-2 text-danger ' onclick="toggleSidebar()"
                style="cursor: pointer;"></i>
        </div>
        <img src="{{ asset('assets/img/logo.png') }}" alt="" id="logo">
    </div>
    <hr>
    <ul>
        <a href="{{ route('Admins.InventoryHome') }}" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-calendar-check fs-3 me-2 text-danger'></i>
            Inventory Checklist</a>

        <a href="{{ route('Admins.user') }}" class=" text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-user-rectangle fs-3 me-2 text-danger'></i>
            User</a>

        {{-- inventory

        <div class="accordion" id="inventory">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#inventories" aria-expanded="true" aria-controls="inventories">
                        <i class='bx bxs-spreadsheet fs-3 me-2 text-danger'></i>
                        Inventory
                    </button>
                </h2>
                <div id="inventories" class="accordion-collapse collapse" data-bs-parent="#inventory">
                    <div class="accordion-body">


                    </div>
                </div>
            </div>
        </div>

         --}}
        <a href="{{ route('Admin.category') }}" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-category-alt fs-3 me-2 text-danger'></i>
            Category</a>

        <a href="#" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-package fs-3 me-2 text-danger'></i>
            Stock In</a>

        <a href="#" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-package fs-3 me-2 text-danger'></i>
            Stock Out</a>



        <a href="#" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-cart-alt fs-3 me-2 text-danger'></i>
            Products</a>

        <a href="#" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-purchase-tag fs-3 me-2 text-danger'></i>
            Orders</a>

        <a href="#" class="text-dark mt-2 d-flex align-items-center">
            <i class='bx bxs-trash fs-3 me-2 text-danger'></i>
            Waste</a>


    </ul>
</div>
