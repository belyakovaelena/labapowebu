
    window.onload = () => {
    console.log("test");
    const $ = (selector) => document.querySelector(selector);
    let price = $('#price');
    let time = $('#time');
    let weight = $('#weight');
    let calories= $('#calories')

    let state = {
    price: false,
    time: false,
    weight: false,
    calories: false
}

    price.addEventListener("input", (e) => {

    let elem = e.srcElement
    const isNum = isNumber(elem.value)
    let elemClassIncorrect = `input-form_incorrect`

    if (!isNum && !price.classList.contains(elemClassIncorrect)) {
    price.classList.add(elemClassIncorrect)
    setState('price', false)
} else if(isNum) {
    if (price.classList.contains(elemClassIncorrect)) {
    price.classList.remove(elemClassIncorrect)
}

    const correctRange = +elem.value > 10 && +elem.value < 20000;

    if (correctRange) {
    setState('price', true);
} else {
    price.classList.add(elemClassIncorrect)
    setState('price', false)
}

}
    checkState()
})
///////////////////////////////////////////////////////////////////
    time.addEventListener('input', e => {
    let elem = e.srcElement;
    const isMatch = correctMatch(elem.value);

    let elemClassIncorrect = `input-form_incorrect`

    if (!isMatch && !time.classList.contains(elemClassIncorrect)) {
    time.classList.add(elemClassIncorrect)
    setState('time', false)
} else if (isMatch){
    if (time.classList.contains(elemClassIncorrect)) {
    time.classList.remove(elemClassIncorrect)
}
    setState('time', true);
}
    checkState()
})
/////////////////////////////////////////////////////////////////////
        weight.addEventListener("input", (e) => {

            let elem = e.srcElement
            const isNum = isNumber(elem.value)
            let elemClassIncorrect = `input-form_incorrect`

            if (!isNum && !weight.classList.contains(elemClassIncorrect)) {
                weight.classList.add(elemClassIncorrect)
                setState('weight', false)
            } else if(isNum) {
                if (weight.classList.contains(elemClassIncorrect)) {
                    weight.classList.remove(elemClassIncorrect)
                }

                const correctRange = +elem.value > 10 && +elem.value < 1000;

                if (correctRange) {
                    setState('weight', true);
                } else {
                    weight.classList.add(elemClassIncorrect)
                    setState('weight', false)
                }

            }
            checkState()
        })
//////////////////////////////////////////////////////////////////
        calories.addEventListener("input", (e) => {

            let elem = e.srcElement
            const isNum = isNumber(elem.value)
            let elemClassIncorrect = `input-form_incorrect`

            if (!isNum && !calories.classList.contains(elemClassIncorrect)) {
                calories.classList.add(elemClassIncorrect)
                setState('calories', false)
            } else if(isNum) {
                if (calories.classList.contains(elemClassIncorrect)) {
                    calories.classList.remove(elemClassIncorrect)
                }

                const correctRange = +elem.value > 10 && +elem.value < 5000;

                if (correctRange) {
                    setState('calories', true);
                } else {
                    calories.classList.add(elemClassIncorrect)
                    setState('calories', false)
                }

            }
            checkState()
        })
/////////////////////////////////////////////////////////////////
    function checkState() {
    let allCorrect = true;
    let states = Object.keys(state);
    // console.log(states)
    states.forEach(elem => {
    // console.log(elem, state[elem])
    allCorrect = allCorrect && state[elem]
})
    // console.log(allCorrect)
    disableButton(allCorrect)
}

    function isNumber(value) {
    return !isNaN(value) && typeof(+value) === 'number';
}

    function disableButton(condition) {
    $('#submit').disabled = !condition
}

    function setState(_state, payload) {
    state[_state] = payload
}

    function correctMatch(value) {
    const pattern = /^[0-9]{2}:[0-9]{2}:[0-9]{2}$/;
    return pattern.test(value)
}

}
