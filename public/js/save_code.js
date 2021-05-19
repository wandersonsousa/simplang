window.addEventListener("load", function () {
    if (localStorage.getItem('username')) {
        document.getElementById('username').value = localStorage.getItem('username');
        document.getElementById('username').setAttribute('disabled', true);
    }

    function addNewAlgoritm(codeData, username) {
        let firebaseRef = firebase.database().ref('users/' + username + '/algoritmos');
        let newAlgoritmRef = firebaseRef.push();
        return newAlgoritmRef.set(codeData);
    }

    document.getElementById('save_algorithm').onclick = async function () {
        let instrunctionsCode = await getInstructions();
        let username = document.getElementById('username').value;
        let codeName = document.getElementById('alg_name').value;

        let codeData = {
            name: codeName,
            code: instrunctionsCode
        }

        try {
            if (localStorage.getItem('username')) {
                await addNewAlgoritm(codeData, username);
            } else {
                await addNewAlgoritm(codeData, username);
                localStorage.setItem('username', username);
            }
            let sucess_alert = document.getElementById('success_log');
            sucess_alert.innerText = 'Algoritmo salvo com sucesso';
            sucess_alert.classList.remove('d-none');
            setTimeout(() => sucess_alert.classList.add('d-none'), 5000);
        } catch (error) {
            let error_alert = document.getElementById('error_log');
            error_alert.innerText = 'Dados inválidos, tente não adicionar caractéres especiais no username';
            error_alert.classList.remove('d-none');
            setTimeout(() => error_alert.classList.add('d-none'), 5000);
        }


    };


});