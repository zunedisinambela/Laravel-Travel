<!-- Semantic elements -->
<!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

<!-- Bootstrap navbar example -->
<!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ url ('frontend/images/logo.png') }}" alt="" />
            </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
            <li>
                <span class="text-muted">| &nbsp; Beyond the explorer of the world</span>
            </li>
        </ul>
    </nav>
</div>
