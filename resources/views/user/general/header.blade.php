<nav class="navbar sidebar navbar-expand-xl navbar-light">

            <div class="d-flex align-items-center">
                <a class="navbar-brand" @if(currentUser()->user_type == 1) href="{{ route('index') }}" @else href="{{ route('user.orders') }}" @endif>
                    <img class="light-mode-item navbar-brand-item" src="{{ asset('/assets/images/logo.png') }}" style="height: 30px; " alt="logo">
                    <img class="dark-mode-item navbar-brand-item" src="{{ asset('/assets/images/logo.png') }}" alt="logo">
                </a>
            </div>


            <div class="offcanvas offcanvas-start flex-row custom-scrollbar h-100" data-bs-backdrop="true" tabindex="-1" id="offcanvasSidebar">
                <div class="offcanvas-body sidebar-content d-flex flex-column pt-4">


                    @include('user.general.sidebar')


             


                </div>
            </div>
        </nav>