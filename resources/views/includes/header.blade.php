<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link{{ Request::is('comic/*')? 'active' : ''}}" href="{{ url('/')}}">Home</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index')}}">Comics</a>
              </li> 
            </ul>
          </div>
        </div>
    </nav>
</header>