let navElements = [
    ['Home', null],
    ['Kategorien', null],
    ['Verkaufen', null],
    ['Unternehmen', ['Philosophie', 'Karriere']]
];
function navigation (navelements){

    this.navelements = navelements;
    this.printNav = function(){
        let nav = document.createElement('ul');
        this.navelements.forEach(function(value, key) {
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

    };
    this.addElement = function(name){

        let array = [name, null];
        this.navelements.push(array);

    }
};
let nav= new navigation(navElements);
nav.addElement('Home');
nav.printNav();

