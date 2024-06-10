<header>
    <div class="container">

        <div class="left-side">
            <h1>Logo</h1>
        
            <ul class="d-flex justify-content-center gap-3">
                <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                
              </ul>
        </div>

        <div>
            <button class="btn fw-bold">Something</button>
        </div>
    </div>
</header>