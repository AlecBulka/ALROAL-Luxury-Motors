let term = document.getElementById('term');
let downPayment = document.getElementById('downPayment');
let depositAmount = 0.00;

let monthlyCost = document.getElementById('monthlyCost');
let vehiclePrice = document.getElementById('vehiclePrice');
let subTotal = document.getElementById('subTotal');
let deposit = document.getElementById('deposit');
let totalFinanced = document.getElementById('totalFinanced');
let financeTerm = document.getElementById('financeTerm');
let TCWI = document.getElementById('TCWI');
let financePayment = document.getElementById('financePayment');

let totalInterest = 0.00;
let totalCostWithInterest = 0.00;
let monthlyCostWithInterest = 0.00;

let formatCurrency = new Intl.NumberFormat('en-ES', {minimumFractionDigits: 2});

let inputMonthsFinanced = document.getElementById('inputMF');
let inputDownPayment = document.getElementById('inputDP');
let inputTotalCost = document.getElementById('inputTC');
let inputMonthlyCost = document.getElementById('inputMC');

let calculateTotalFinanced = () => {
    totalFinanced.innerHTML = `${formatCurrency.format((parseFloat(subTotal.innerHTML.replace(' €', '').replace(',', '')) - depositAmount))} €`;
    TCWI.innerHTML = `${formatCurrency.format(totalCostWithInterest)} €`;

    inputMonthsFinanced.value = parseInt(term.value);
    inputDownPayment.value = parseFloat(depositAmount).toFixed(2);
    inputTotalCost.value = parseFloat(totalCostWithInterest).toFixed(2);
    inputMonthlyCost.value = parseFloat(monthlyCostWithInterest).toFixed(2);
};

let calculateMonthlyCost = () => {
    totalInterest = parseFloat(totalFinanced.innerHTML.replace(' €', '').replace(',', '')) * ((term.value/12) * 0.0599);

    totalCostWithInterest = parseFloat(totalFinanced.innerHTML.replace(' €', '').replace(',', '')) + totalInterest;

    monthlyCostWithInterest = parseFloat(totalCostWithInterest / term.value).toFixed(2);

    monthlyCost.innerHTML = `${formatCurrency.format(monthlyCostWithInterest)} € / Monthly`;
    financePayment.innerHTML = `${formatCurrency.format(monthlyCostWithInterest)} €`;
    TCWI.innerHTML = `${formatCurrency.format(totalCostWithInterest)} €`;

    inputMonthsFinanced.value = parseInt(term.value);
    inputDownPayment.value = parseFloat(depositAmount).toFixed(2);
    inputTotalCost.value = parseFloat(totalCostWithInterest).toFixed(2);
    inputMonthlyCost.value = parseFloat(monthlyCostWithInterest).toFixed(2);
};

calculateTotalFinanced();

calculateMonthlyCost();

term.addEventListener('change', () => {
    financeTerm.innerHTML = term.options[term.selectedIndex].text;
    calculateMonthlyCost();
});

downPayment.addEventListener('change', () => {
    depositAmount = parseFloat(downPayment.value);
    if (depositAmount <= 0.00 || isNaN(depositAmount)) {
        depositAmount = 0.00;
        deposit.innerHTML = `${formatCurrency.format(depositAmount)} €`;
    } else if (depositAmount > parseFloat(vehiclePrice.innerHTML.replace(' €', '').replace(',', ''))) {
        depositAmount = parseFloat(vehiclePrice.innerHTML.replace(' €', '').replace(',', ''));
        deposit.innerHTML = `${formatCurrency.format(depositAmount)} €`;
    } else {
        deposit.innerHTML = `${formatCurrency.format(depositAmount)} €`;
    }
    calculateTotalFinanced();
    calculateMonthlyCost();
});
