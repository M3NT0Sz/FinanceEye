<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                @hasSection('page-title')
                    <h3 class="mb-0">@yield('page-title')</h3>
                @endif
            </div>
            <div class="col-sm-6 text-end">
                @yield('page-actions')
            </div>
        </div>
    </div>
</div>