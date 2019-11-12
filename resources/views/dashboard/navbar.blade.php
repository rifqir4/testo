<div class="v-navbar">
    <div class="content" id="judul">Dashboard</div>
    <a href="/admin">
        <div class="content">Home</div>
    </a>
    <a href="/admin/berita">
        <div class="content">Berita</div>
    </a>
    <a href="/admin/keluhan-saran">
        <div class="content">Keluhan & Saran</div>
    </a>
    <a href="/admin/laporan">
        <div class="content">Laporan</div>
    </a>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <span>
    <a href="/register">
        Register
    </a>
    </span>
</div>