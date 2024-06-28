document.addEventListener("DOMContentLoaded", () => {
    const categoryButton = document.getElementById("category-button");
    const categoryList = document.getElementById("category-list");
    const productsContainer = document.getElementById("products-container");

    categoryButton.addEventListener("click", () => {
        categoryList.classList.toggle("show");
    });

    categoryList.addEventListener("click", (event) => {
        if (event.target.tagName === "LI") {
            const selectedCategory = event.target.getAttribute("data-category");
            filterProductsByCategory(selectedCategory);
        }
    });

    function filterProductsByCategory(category) {
        const products = productsContainer.getElementsByClassName("product");
        for (let product of products) {
            if (product.getAttribute("data-category") === category || category === "all") {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        }
    }
});


document.addEventListener('DOMContentLoaded', function() {
    const categoryButton = document.getElementById('category-button');
    const categoryList = document.getElementById('category-list');

    categoryButton.addEventListener('click', function() {
        categoryList.style.display = categoryList.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', function(event) {
        if (!categoryButton.contains(event.target) && !categoryList.contains(event.target)) {
            categoryList.style.display = 'none';
        }
    });
});
document.addEventListener('DOMContentLoaded', (event) => {
    const numberElement = document.getElementById('numero');
    let currentNumber = 0;

    document.getElementById('aumentar').addEventListener('click', () => {
        currentNumber++;
        numberElement.textContent = currentNumber;
    });

    document.getElementById('restar').addEventListener('click', () => {
        currentNumber--;
        numberElement.textContent = currentNumber;
    });
});
