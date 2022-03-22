<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link{{ Request::is('comic/*')? 'active' : ''}} me-3" href="{{ url('/')}}">HOME</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index')}}">COMICS</a>
              </li> 
            </ul>
          </div>
        </div>
    </nav>
</header>