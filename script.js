var selectedItems = [];

function addItem() {
    var checkboxes = document.getElementsByName('items[]');
    // Get selected items and add them to the array
    selectedItems = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

    // Update the displayed list of added items
    updateAddedItemsList();
    showNotification("Item added!");
}

function updateAddedItemsList() {
    var addedItemsList = document.getElementById('addedItems');
    addedItemsList.innerHTML = '';

    // Update the displayed list of added items
    selectedItems.forEach(function (item) {
        var listItem = document.createElement('li');
        listItem.textContent = item;
        addedItemsList.appendChild(listItem);
    });
}

function showNotification(message) {
    var notification = document.getElementById('notification');
    notification.textContent = message;
    notification.style.display = 'block';

    setTimeout(function() {
        notification.style.display = 'none';
    }, 500); // Display for 2 seconds
}