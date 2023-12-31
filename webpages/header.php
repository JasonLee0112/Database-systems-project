<!-- Header -->
<!DOCTYPE html>
<html>
    
    <div class="navbar navbar-expand-lg bg-body-secondary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img class="brand-image" src="/uvaball.png"> Pokedex+ </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> Hi </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="pokedex">Pokedex</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="create.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Create
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="team">Update Team</a></li>
                            <li><a class="dropdown-item" href="createTeamForm">Create Team</a></li>
                            <li><a class="dropdown-item" href="pokemon">Pokemon</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="forum">Forum</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="justify-content-end nav-item">
                        <div id="g_id_onload"
                            data-client_id="926122338315-95c1lbkulm3en0ui5icuechntk4eq7jn"
                            data-login_uri="localhost:3000/home"
                            data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin"
                            data-type="standard"
                            data-size="large"
                            data-theme="outline"
                            data-text="sign_in_with"
                            data-shape="rectangular"
                            data-logo_alignment="left">
                        </div> -->

                    <div class="justify-content-end nav-item">
                        <a class="nav-link button" href="accountloginsignup">Sign-In/Sign-Up</a>
                    </div>
                    <div class="justify-content-end nav-item">
                        <form id="logoutForm" method="post" action="/accountlogout" onsubmit="logout(event)">
                            <input type="submit" class="btn btn-primary" value="Logout">
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Header -->
        <script>
            function logout(event) {
                event.preventDefault(); // Prevent the default form submission behavior

                // Make a POST request to the logout route
                fetch('/accountlogout', {
                    method: 'POST',
                    credentials: 'same-origin', // Include credentials (cookies) in the request
                })
                .then(response => {
                    if (response.ok) {
                        // Logout successful, handle as needed
                        alert('Logout successful!');
                        // Redirect to the home page if needed
                        window.location.href = "/";
                    } else {
                        // Logout failed, show the error message
                        return response.text();
                    }
                })
                .then(errorMessage => {
                    if (errorMessage) {
                        alert(errorMessage);
                    }
                })
                .catch(error => {
                    console.error('Error during logout:', error);
                    // Handle error as needed
                });
            }
        </script>

       
</html>