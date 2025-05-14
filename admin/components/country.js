// Function to fetch country data from the API
async function loadCountries() {
    try {
        const response = await fetch('https://restcountries.com/v3.1/all');
        const countries = await response.json();

        // Sort countries alphabetically by common name
        countries.sort((a, b) => a.name.common.localeCompare(b.name.common));

        // Get all select elements with the same ID
        const selectElements = document.querySelectorAll('#select_country');

        // Create an array of options
        const options = countries.map(country => {
            return `<option value="${country.name.common}">${country.name.common}</option>`;
        }).join('');

        // Populate each select element with the options
        selectElements.forEach(select => {
            select.innerHTML = options;
        });
    } catch (error) {
        console.error('Error fetching countries:', error);
    }
}

// Call the function to load countries when the document is ready
document.addEventListener('DOMContentLoaded', loadCountries);
