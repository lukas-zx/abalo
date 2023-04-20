"use strict";
let form = document.createElement('form');
form.setAttribute('action', '/article');
form.setAttribute('method', 'post');
form.setAttribute('name', 'Formular');
form.setAttribute('id', 'form');

let nameLabel = document.createElement('label');
nameLabel.setAttribute('for', 'name');
nameLabel.innerText = 'Name';

let name = document.createElement('input');
name.setAttribute('type', 'text');
name.setAttribute('id', 'name');
name.setAttribute('name', 'name');
name.setAttribute('maxlength', '80');
name.required = true;

let priceLabel = document.createElement('label');
priceLabel.setAttribute('for', 'price');
priceLabel.innerText = 'Preis';

let price = document.createElement('input');
price.setAttribute('type', 'text');
price.setAttribute('id', 'price');
price.setAttribute('name', 'price');
price.required = true;

let descriptionLabel = document.createElement('label');
descriptionLabel.setAttribute('for', 'description');
descriptionLabel.innerText = 'Beschreibung';

let description = document.createElement('textarea');
description.setAttribute('type', 'text');
description.setAttribute('id', 'description');
description.setAttribute('name', 'description');
description.setAttribute('maxlength', '1000');
description.setAttribute('rows', '10');
description.setAttribute('cols', '30');
description.required = true;

let submit = document.createElement('button');
submit.setAttribute('type', 'button');
submit.innerText = 'Speichern';
submit.addEventListener('click', function() {
    if (price.value <= 0) {
        alert('Preis muss > 0 sein')
    } else {
        form.submit();
        document.getElementById('form').submit();
    }
})

form.appendChild(nameLabel);
form.appendChild(name);
form.appendChild(priceLabel);
form.appendChild(price);
form.appendChild(descriptionLabel);
form.appendChild(description);
form.appendChild(submit);

document.body.appendChild(form);
