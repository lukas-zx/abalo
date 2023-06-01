let jsonData="";

let xhr = new XMLHttpRequest();
xhr.open('GET', '/api/article');
xhr.setRequestHeader('Accept', 'application/json');

xhr.onload = () => {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            jsonData = JSON.parse(xhr.responseText);
            console.log(jsonData);

            let tableContainer = document.getElementById("table-container");


            // Tabelle erstellen
            let table = document.createElement("table");
            tableContainer.appendChild(table);

            // Tabellenkopf erstellen
            let thead = document.createElement("thead");
            table.appendChild(thead);
            let headerRow = document.createElement("tr");
            thead.appendChild(headerRow);

            // Spaltennamen manuell festlegen oder aus dem ersten Datensatz lesen
            let columns = ["ID", "Name", "Preis", "Beschreibung", "Creator ID", "Create Date", "Image", "Add"];
            for (let i = 0; i < columns.length; i++) {
                let th = document.createElement("th");
                th.textContent = columns[i];
                headerRow.appendChild(th);
            }

            // Tabellenkörper erstellen
            let tbody = document.createElement("tbody");
            table.appendChild(tbody);

            // Datenzeilen erstellen

            for (let i = 0; i < jsonData.length; i++) {
                let dataRow = document.createElement("tr");
                tbody.appendChild(dataRow);
                let data = jsonData[i];

                // Daten in Spalten einfügen
                let keys = Object.keys(data);
                for (let j = 0; j < keys.length; j++) {
                    let td = document.createElement("td");
                    td.textContent = data[keys[j]];
                    dataRow.appendChild(td);
                }

                // '+' Button
                let button = document.createElement('button');
                button.setAttribute('type', 'button');
                button.setAttribute('class', 'addToCart');
                button.setAttribute('id', data['id']);
                button.innerText = '+';
                dataRow.appendChild(button);
            }
        }
    }
}
xhr.send()
