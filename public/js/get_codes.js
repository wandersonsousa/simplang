window.addEventListener("load", function () {
    let usersRef = firebase.database().ref('users');
    window.code_list = [];

    usersRef.on('value', async (snapshot) => {
        const data = await snapshot.val();


        for (userData of Object.entries(data)) {
            let username = userData[0];
            let userCodeData = userData[1]['algoritmos'];

            let algsIds = Object.keys(userCodeData);

            let count = 0;
            for (const id of algsIds) {
                let codeData = userCodeData[id];
                codeData.id = count;
                codeData.username = username;

                window.code_list.push(codeData);
                count++;
            }
        }

        let count = 1;
        let $currentRow;
        for (const code_data of window.code_list) {
            if (count == 1) {
                let $code_container = document.getElementById('code_container');
                let row_el = createRow();
                let code_view_el = createCodeView(code_data.id, code_data.username, code_data.name, code_data.code);
                row_el.append(code_view_el);
                $currentRow = row_el;
                $code_container.append(row_el);
                count++;
                continue;
            }
            if (count % 4 == 0) {
                let $code_container = document.getElementById('code_container');
                let row_el = createRow();
                let code_view_el = createCodeView(code_data.id, code_data.username, code_data.name, code_data.code);
                row_el.append(code_view_el);
                $currentRow = row_el;
                $code_container.append(row_el);
                count++;
                continue
            }
         
            let code_view_el = createCodeView(code_data.id, code_data.username, code_data.name, code_data.code);
            $currentRow.append(code_view_el);
            count++;
        }

        const executeCodeOnIDE = (evt) => {
            let codeData = (window.code_list.filter( code => code.id == evt.target.dataset.id))[0];
            let code_text = '';
            for (const instruction of codeData.code) {
                if (instruction) {
                    code_text += instruction + '\n';
                }
            }

            let newURL = encodeURI(location.origin + '/?code=' + code_text);
            return window.location.href = newURL;
        };
        Array.from(document.getElementsByClassName('code_view')).forEach(
            codeView => {
                codeView.getElementsByClassName('execute')[0].addEventListener('click', executeCodeOnIDE)
            }   
        );
        

    });

    


    function createCodeView(id, username, codeName, instructions) {
        let code_text = '';
        for (const instruction of instructions) {
            if (instruction) {
                code_text += instruction + '\n';
            }
        }

        let codeViewHTML = `
        <div class="col-12 col-md-4">
            <div class="mb-4 mt-4 code_view">
            <label for="exampleFormControlTextarea1" class="form-label">Por: <span class="code_username">${username}</span> </label>
            <textarea class="form-control code_value code_example" readonly cols="10" rows="5">${code_text}</textarea>
            <p class="blockquote-footer mt-2 code_name">${codeName}</p>
            <button type="button" class="btn outlined btn-primary mt-2 execute" data-id="${id}">Executar</button>
            </div>
        </div>
        `;

        let code_view = htmlToElement(codeViewHTML);
        return code_view;
    }

    function createRow() {
        let rowHTML = `<div class="row"></div>`;
        return htmlToElement(rowHTML);
    }
    function htmlToElement(html) {
        var template = document.createElement('template');
        html = html.trim(); // Never return a text node of whitespace as the result
        template.innerHTML = html;
        return template.content.firstChild;
    }

});