const redArea = document.querySelector('.red-area');
const hiddenButton = document.querySelector('.hidden-button');

// Show the button on hover
redArea.addEventListener('mouseover', () => {
    hiddenButton.classList.add('show');
});

// Hide the button on mouse leave
redArea.addEventListener('mouseleave', () => {
    hiddenButton.classList.remove('show');
});

// CodeIgniter Delete Action (when the button is clicked)
const deleteButton = document.getElementById('delete-button');
deleteButton.addEventListener('click', function() {
    // Get the ID of the item to delete (replace 'itemId' with your data field)
    const itemId = // ... (get the ID from your page or data) 

    // Send an AJAX request to your CodeIgniter controller
    fetch('<?php echo site_url('your_controller/delete'); ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ id: itemId })
    })
    .then(response => {
        // Handle the response from CodeIgniter
        if (response.ok) {
            // Success: Update the UI, display a message, etc.
            console.log('Item deleted successfully!');
        } else {
            // Error: Handle any errors from CodeIgniter
            console.error('Error deleting item');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});