<h1>Supplier</h1>
 <form method="POST" action="{{ route('logout') }}">
    @csrf

    <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
       <i class="bx bx-power-off me-2"></i>
       <span class="align-middle">Log Out</span>
    </a>
</form>