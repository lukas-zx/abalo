let navElements = [
    ['Home', null],
    ['Kategorien', null],
    ['Verkaufen', null],
    ['Unternehmen', ['Philosophie', 'Karriere']]
];
let nav = document.createElement('ul');
navElements.forEach(function(value, key) {
    let element = document.createElement('li');
    element.innerText = value[0];
    nav.appendChild(element);

    if (value[1] !== null) {
        let parent = element;
        let innerNav = document.createElement('ul');
        value[1].forEach(function(value, key) {
            let element = document.createElement('li');
            element.innerText = value;
            innerNav.appendChild(element);
        })
        parent.appendChild(innerNav);
    }
});
document.getElementById('nav').appendChild(nav);

//window.document.body.appendChild(nav);
