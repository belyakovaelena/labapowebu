window.onload = () => {
    //console.log("test");
    const $ = (selector) => document.querySelector(selector);
    let name = $('#name');
    let login = $('#login');
    let pass = $('#pass')

    let state = {
        name: false,
        login: false,
        pass: false
    }

    pass.addEventListener('input', e => {
        let elem = e.srcElement;
        const isMatch = correctMatch(elem.value);

        let elemClassIncorrect = `input-form_incorrect`

        if (!isMatch && !pass.classList.contains(elemClassIncorrect)) {
            pass.classList.add(elemClassIncorrect)
            setState('pass', false)
        } else if (isMatch) {
            if (pass.classList.contains(elemClassIncorrect)) {
                pass.classList.remove(elemClassIncorrect)
            }
            setState('pass', true);
        }
        checkState()
    })

    login.addEventListener('input', e => {
        let elem = e.srcElement;
        const isLog = correctLog(elem.value);

        let elemClassIncorrect = `input-form_incorrect`

        if (!isLog && !login.classList.contains(elemClassIncorrect)) {
            login.classList.add(elemClassIncorrect)
            setState('login', false)
        } else if (isLog) {
            if (login.classList.contains(elemClassIncorrect)) {
                login.classList.remove(elemClassIncorrect)
            }
            setState('login', true);
        }
        checkState()
    })

    function disableButton(condition) {
        $('#submit').disabled = !condition
    }

    function setState(_state, payload) {
        state[_state] = payload
    }
    function correctMatch(value) {
// Пароль должен содержать буквы, не должен начинаться с цифры, не должен содержать пробел и эти символы "-","(",")","/".
        const beginWithoutDigit = /^\D.*$/
        const withoutSpecialChars = /^[^-() /]*$/
        const containsLetters = /^.*[a-zA-Z]+.*$/
        let password = value;

        if( beginWithoutDigit.test(password) &&
            withoutSpecialChars.test(password) &&
            containsLetters.test(password) ){
            console.log('ok');
            return true
        } else {
            return false
        }

    }

    function correctLog(value) {

        const firstregular = /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/

        let password = value;

        if( firstregular.test(password)
           )
            {
            console.log('ok');
            return true
        } else {
            return false
        }
    }
}