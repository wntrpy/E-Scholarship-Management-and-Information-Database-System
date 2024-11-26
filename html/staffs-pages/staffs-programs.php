<?php
include('../../php/showProfilePic.php');
include('staffs-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Staff Programs</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/staffs-styles/staff-program-style.css" />
</head>
<body>
    <div class="main-container">
        <header id="layout-header"></header>

        <!-- Content Container -->
        <div id="programs-content-container">
            <!-- Grid Container -->
            <div class="program-cards-container" id="program-cards-container">
                <!-- Example Program Cards -->
                <div class="program-card" data-category="SHS PUBLIC">
                    <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="SHS PUBLIC">
                    <p>SHS PUBLIC</p>
                    <div>
                        <button class="see-more-button">See more...</button>
                        <button class="edit-button">EDIT</button>
                    </div>
                </div>
                <div class="program-card" data-category="SHS PRIVATE">
                    <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="SHS PRIVATE">
                    <p>SHS PRIVATE</p>
                    <div>
                        <button class="see-more-button">See more...</button>
                        <button class="edit-button">EDIT</button>
                    </div>
                </div>
            </div>

            <!-- Add/Delete Categories -->
            <div id="manage-categories">
                <div>
                    <input type="text" id="add-category-input" placeholder="Input category to add...">
                    <button id="add-category-button">ADD</button>
                </div>
                <div>
                    <select id="delete-category-select">
                        <option value="">Select category to delete</option>
                        <option value="SHS PUBLIC">SHS PUBLIC</option>
                        <option value="SHS PRIVATE">SHS PRIVATE</option>
                    </select>
                    <button id="delete-category-button">DELETE</button>
                </div>
            </div>
        </div>

        
        <footer></footer>
    </div>

    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script>
        // JavaScript for dynamically managing categories
        document.addEventListener("DOMContentLoaded", function () {
            const container = document.getElementById("program-cards-container");
            const addInput = document.getElementById("add-category-input");
            const addButton = document.getElementById("add-category-button");
            const deleteSelect = document.getElementById("delete-category-select");
            const deleteButton = document.getElementById("delete-category-button");

            // Add new category
            addButton.addEventListener("click", function () {
                const newCategory = addInput.value.trim();
                if (newCategory) {
                    // Add card dynamically
                    const newCard = document.createElement("div");
                    newCard.className = "program-card";
                    newCard.setAttribute("data-category", newCategory);
                    newCard.innerHTML = `
                        <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="${newCategory}">
                        <p>${newCategory}</p>
                        <div>
                            <button class="see-more-button">See more...</button>
                            <button class="edit-button">EDIT</button>
                        </div>`;
                    container.appendChild(newCard);

                    // Add option to delete dropdown
                    const newOption = document.createElement("option");
                    newOption.value = newCategory;
                    newOption.textContent = newCategory;
                    deleteSelect.appendChild(newOption);

                    addInput.value = ""; 
                }
            });

            // Delete selected category
            deleteButton.addEventListener("click", function () {
                const selectedCategory = deleteSelect.value;
                if (selectedCategory) {
                    const cards = document.querySelectorAll(".program-card");
                    cards.forEach(card => {
                        if (card.getAttribute("data-category") === selectedCategory) {
                            container.removeChild(card);
                        }
                    });

                    const options = Array.from(deleteSelect.options);
                    options.forEach(option => {
                        if (option.value === selectedCategory) {
                            deleteSelect.removeChild(option);
                        }
                    });

                    deleteSelect.value = ""; 
                }
            });
        });
    </script>
</body>
</html>
