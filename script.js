 
    const loginCard = document.querySelector('.card.login');
    const signupCard = document.querySelector('.card.create-account');
    const linkSignup = document.getElementById('link-signup');
    const linkSignin = document.getElementById('link-signin');
    const backToLogin = document.getElementById('back-to-login');

    function showLogin() {
      signupCard.hidden = true;
      loginCard.hidden = false;
      window.location.hash = '#login';
    }

    function showSignUp() {
      loginCard.hidden = true;
      signupCard.hidden = false;
      window.location.hash = '#create-account';
    }

    // linkSignup.addEventListener('click', (e) => {
    //   e.preventDefault();
    //   showSignUp();
    // });

    // linkSignin.addEventListener('click', (e) => {
    //   e.preventDefault();
    //   showLogin();
    // });



    // On page load, check hash to open correct form
    window.addEventListener('load', () => {
      if (window.location.hash === '#create-account') {
        showSignUp();
      } else {
        showLogin();
      }
    });

    // Accessibility: Manage keyboard focus on toggles
    linkSignup.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        showSignUp();
      }
    });
    linkSignin.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        showLogin();
      }
    });
    backToLogin.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        showLogin();
      }
    });

    // Placeholder form submissions - prevent default for demonstration
    document.getElementById('login-form').addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Login submitted');
    });
    document.getElementById('signup-form').addEventListener('submit', (e) => {
      e.preventDefault();
      alert('Sign up submitted');
    });