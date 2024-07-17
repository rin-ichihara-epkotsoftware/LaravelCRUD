<nav id="sidebarMenu" class="col-md-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link{{ request()->route()->named('admin.index') ? ' active' : '' }}" href="{{ route('admin.index') }}"><span data-feather="home"></span> ホーム</a>
      </li>
      <li class="nav-item">
        <a class="nav-link{{ request()->route()->named('admin.jobs.*') ? ' active' : '' }}" href="{{ route('admin.jobs.index') }}"><span data-feather="file-text"></span> 職業</a>
      </li>
    </ul>
  </div>
</nav>