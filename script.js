const numbers = document.querySelectorAll(".number")

numbers.forEach((number) => {
    number.addEventListener("click", (event)=>{
        console.log(event.target.value)
    })
})

const calculatorScreen = document.querySelector('.calculator-screen')

const updateScreen =(number) => {
    calculatorScreen.value =number
}


numbers.forEach((number) => {
    number.addEventListener("click", (event)=>{
        updateScreen(event.target.value)
    })
})

let prevNumber = ''
let calculationOperator = ''
let currentNumber = '0'


numbers.forEach((number) => {
    number.addEventListener("click", (event)=>{
        inputNumber(event.target.value)
        updateScreen(currentNumber)
    })
})

const inputNumber = (number) => {
    if(currentNumber === '0'){
        currentNumber = number
    } else{
        currentNumber += number
    }
}

const operators = document.querySelectorAll(".operator")

operators.forEach((operator) => {
    operator.addEventListener("click", (event) => {
        console.log(event.target.value)
    })
})

const inputOperator = (operator) => {
    if (calculationOperator === ''){
        prevNumber = currentNumber
    }
    calculationOperator = operator
    currentNumber = '0'
}

operators.forEach((operator) => {
    operator.addEventListener("click", (event) => {
        inputOperator(event.target.value)
    })
})

const equalSign = document.querySelector('.equal-sign')

equalSign.addEventListener('click', () =>{
    console.log('equal button is pressed')
})

const calculate = () => {
    let result = ''
    switch (calculationOperator) {
        case "+":
            result = parseFloat(prevNumber) + parseFloat(currentNumber)
            break
        case "-":
            result = prevNumber - currentNumber
            break
        case "*":
            result = prevNumber * currentNumber
            break
        case "/":
            result = prevNumber / currentNumber
            break
        case "%":
            result = prevNumber / 100
            break     
        default:
            break;
    }
    currentNumber = result
    calculationOperator = ''
}

equalSign.addEventListener('click', () =>{
    calculate()
    updateScreen(currentNumber)
})

const clearBtn = document.querySelector('.all-clear')

clearBtn.addEventListener('click', () =>{
    console.log('AC button is pressed')
})

const clerAll = () => {
    prevNumber = ''
    calculationOperator = ''
    currentNumber = '0'
}

clearBtn.addEventListener('click', () =>{
    clerAll()
    updateScreen(currentNumber)
})

inputDecimal = (dot) =>{
    if(currentNumber.includes('.')){
        return
    }
    currentNumber += dot
}

const decimal = document.querySelector('.decimal')

decimal.addEventListener('click', (event) =>{
    inputDecimal(event.target.value)
    updateScreen(currentNumber)
})


// const percentage = document.querySelector('.percentage')
