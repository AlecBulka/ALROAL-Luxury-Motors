let country = document.getElementById('country');

let countries = async () => {
    let promise = await fetch('../js/countries.json');
    let data = await promise.json();
    data.forEach(countryData => {
        const option = document.createElement('option');
        option.value = countryData.code;
        option.text = countryData.name;
        country.appendChild(option);
    });
}

countries();

