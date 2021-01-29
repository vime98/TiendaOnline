if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded',ready)
}else{
    ready()
}

function ready() {
    var removerCartitembtn = document.getElementsByClassName('btn-danger')
    console.log(removerCartitembtn);
    for (var i = 0; i < removerCartitembtn.length ; i++) {
        var button = removerCartitembtn[i];
        button.addEventListener('click',removeCartItem)        
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length ; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change',quantityChange)        
    }

    var addToCartButtons = document.getElementsByClassName('add-cart')
    for (var i = 0; i < addToCartButtons.length ; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click',function (event){
            var button = event.target
            var shopItem = button.parentElement.parentElement
            var title = shopItem.getElementsByClassName('p-name')[0].innerText
            var price = shopItem.getElementsByClassName('p-price')[0].innerText
            var img = shopItem.getElementsByClassName('product-img-img')[0].src
            console.log(title,price,img)
            addItemToCart(title,price,img)
            updateCartTotal()               
        })        
    }
    document.getElementsByClassName('btn-purchase')[0].addEventListener('click',purchaseClick)
    document.getElementsByClassName('btn-cancel')[0].addEventListener('click',cancelClick)
}

function purchaseClick() {
    alert("Gracias por su compra")
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function cancelClick() {
    alert("Se cancelo su compra")
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function addItemToCart(title,price,img) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemsNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemsNames.length; i++) {
        if (cartItemsNames[i].innerText == title) {
            alert("Este producto ya esta en el carrito")
            return
        }        
    }
    var cartRowContents = [ `
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="${img}" alt="imagen producto" width="100" height="100">
                                <span class="cart-item-title">${title}</span>
                            </div>
                            <span class="cart-price cart-column">${price}</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <button type="button" class="btn btn-danger">REMOVE</button>
                            </div>`

    ]
    cartRow.innerHTML = cartRowContents 
    cartItems.append(cartRow)
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click',removeCartItem)
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change',quantityChange)
}

function removeCartItem(event){
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()            
}

function quantityChange(event){
    var input = event.target
    if (isNaN(input.value) || input.value <= 0 ) {
        input.value=1
    }
    updateCartTotal()
                    
}



function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    total = 0
    for (let i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$',''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100 )/ 100
    document.getElementsByClassName('cart-total-price')[0].innerText="$" + total

}