# Read Me

## Frontend Developer Challenge

### Setup

- Please download the codebase and run it at any PHP server (Apache, Nginx)
- Demo available here: http://badgeworx.laczny.co.uk

### Some comments

Requirements are not really clear:
- It says the system should work with JavaScript disabled, but at the same time it mentions mocking the login in JavaScript. 
- There is no mention how the backend works - is the authentication just sending auth token or generating the whole website each time with saved session.
- Because it's just an excercise, I decided to take a hybrid approach - if JS is enabled - we're sending data through API and use the results. If JS is disabled - we display classic logic form and authentication happens in the backend.
