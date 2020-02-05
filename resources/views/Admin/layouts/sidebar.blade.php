<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">

            @if(Auth()->user()->isAdmin == '1')
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="nav-icon icon-drop"></i> Dashboard</a>
            </li>
            @endif
            @if(Auth()->user()->Vendor->isVendor == '1')
            <li class="nav-item">
                <a class="nav-link" href="/admin/item">
                    <i class="nav-icon icon-drop"></i>Item</a>
            </li>
            @endif

{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">--}}
{{--                    <i class="nav-icon icon-pencil"></i> Members</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">--}}
{{--                    <i class="nav-icon icon-pencil"></i> Feedback</a>--}}
{{--            </li>--}}
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link" href="#">--}}
{{--                    <i class="nav-icon icon-pencil"></i> Recruitment</a>--}}
{{--            </li>--}}
        </ul>
    </nav>
</div>
