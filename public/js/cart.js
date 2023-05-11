"use strict";
function clearCartDisplay() {
    let p_cart = document.getElementById('p_cart');
    if (p_cart.hasChildNodes()) {
        p_cart.removeChild(p_cart.firstChild);
    }
}

function createCartTable() {
    clearCartDisplay();
    let table = document.createElement('table');
    cart.forEach(function(value, key) {
        let row = document.createElement('tr');

        let item = document.createElement('td');
        item.innerText = cart[key];

        let button = document.createElement('button');
        button.setAttribute('type', 'button');
        button.setAttribute('class', 'removeFromCart');
        button.setAttribute('id', cart[key]);
        button.innerText = '-';
        button.addEventListener('click', function() {
            removeFromCart(button.id);
        })

        row.appendChild(item);
        row.appendChild(button);
        table.appendChild(row);
    })
    document.getElementById('p_cart').appendChild(table);
}

function addToCart(id) {
    if (!cart.includes(id)) {
        cart.push(id);
        createCartTable();

        let xhr = new XMLHttpRequest();
        xhr.open('POST','/api/shoppingcart', true);
        xhr.setRequestHeader('Accept', 'application/json');

        let item = new FormData();
        item.append("id", id);
        xhr.send(item);

        xhr.onreadystatechange = function(){
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    console.log(xhr.statusText);
                } else {
                    console.error(xhr.statusText);
                }
            }
        }

    }
}

function removeFromCart(id) {
    cart.splice(cart.indexOf(id), 1);
    createCartTable();

    let xhr = new XMLHttpRequest();
    let url = '/api/shoppingcart/1/articles/' + id;
    xhr.open('DELETE', url, true);
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.send();

    xhr.onreadystatechange = function(){
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                console.log(xhr.statusText);
            } else {
                console.error(xhr.statusText);
            }
        }
    }
}

let cart = [];
let plusButtons = document.getElementsByClassName('addToCart');

for (let i = 0; i < plusButtons.length; i++) {
    plusButtons[i].addEventListener('click', function() {
        addToCart(plusButtons[i].id)
    })
}
