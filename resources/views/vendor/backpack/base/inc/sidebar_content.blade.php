{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

 <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-th-list"></i> Users</a></li>
{{-- <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon la la-th-list"></i> Articles</a></li> --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('genre') }}"><i class="nav-icon la la-th-list"></i> Genres</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('archive') }}"><i class="nav-icon la la-th-list"></i> Archives</a></li>
