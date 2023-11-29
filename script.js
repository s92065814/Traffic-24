    const wRapper = document.querySelector('.wrapper');
    const registerLink = document.querySelector('.register-link');
    const loginLink = document.querySelector('.login-link');

    registerLink.onclick = () => {
        wRapper.classList.add('active');
    }


    loginLink.onclick = () => {
        wRapper.classList.remove('active');
    }