const modal = document.getElementById('loginModal') || null;

// add event listeners
document.addEventListener('click', function (event) {
    // show login modal
    if (event.target.matches('.loginBtn')) {
        event.preventDefault();
        if (modal) {
            modal.style.display = 'block';
        }
    }

    // close modal
    if (event.target.matches('.close')) {
        if (modal) {
            modal.style.display = 'none';
        }
    }

    // click outside the modal
    if (event.target === modal) {
        modal.style.display = 'none';
    }
    return;
}, false);

// submit login form
const loginForm = document.getElementById('login-form');

loginForm.addEventListener("submit", function(event) {
    event.preventDefault();
    fetch('loginaction.php?output=json', {method:'post', body: new FormData(loginForm)})
        .then(response =>  response.json().then(data => ({status: response.status, body: data})))
        .then(obj => {
            const json = obj.body;
            if (json.success) {
                console.log(json);
                document.getElementById('nickname').innerText = 'Hello, ' + json.username;
                document.getElementById('mainPage').innerHTML = json.body;
                document.getElementById('loginBtn').innerText = 'Logout';
                document.getElementById('loginBtn').setAttribute('href', 'loginaction.php?action=logout');
                document.getElementById('loginBtn').setAttribute('aria-label', 'Click to logout');
                document.getElementById('loginBtn').classList.remove('loginBtn');
                modal.style.display = 'none';
            }
        });
});