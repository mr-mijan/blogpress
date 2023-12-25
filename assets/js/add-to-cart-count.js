jQuery(document).ready(function ($) {
    // Update the cart count
    function updateCartCount() {
        $.ajax({
            type: 'GET',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'get_cart_count'
            },
            success: function (response) {
                if (response.success) {
                    // Update the cart count on the page
                    $('#cart-count').text(response.data.cartCount);
                }
            }
        });
    }

    // Trigger the update on document ready
    updateCartCount();

    // AJAXify the "Add to Cart" button
    $('body').on('added_to_cart', function () {
        updateCartCount();
    });
});

