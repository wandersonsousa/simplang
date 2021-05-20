window.addEventListener("load", function () {
    const URL = window.origin + '/compile.php';
    var memoryStates = [];

    document.getElementById('doc_url').setAttribute('href', origin + '/public/doc/documentation.pdf');

    window.editor = CodeMirror(document.getElementById('codeeditor'), {
        theme: 'mdn-like',
        tabSize: 0,
        lineNumbers: true,
        lineWrapping: true
    });

    let code = findGetParameter();
    if( code){
        editor.setValue(code.trim());
    }else{
        editor.setValue(`load 0\naddi 10\nstore 0\nload 0\njzero 13\nload 1\naddi 10\nstore 1\nload 0\nsubi 1\nstore 0\njump 4`);
    }
    

    function setAsLoading(id) {
        document.getElementById(id).innerHTML = `
        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
        <span >compilando...</span>
        `;
    }
    window.getInstructions = async function(){
        let instrunctions_code = editor.getValue().toLowerCase().split('\n').map(intrunctionLine => intrunctionLine.trim());
        let instrunctions = {};
        for (let [i, instrunction] of instrunctions_code.entries()) {
            instrunctions[i + 1] = instrunction;
        }
        return instrunctions;
    }
    async function compile() {
        let instrunctions = await getInstructions();
        const res = await axios({
            method: 'post',
            url: URL,
            data: 'code=' + JSON.stringify(instrunctions),
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
        });
        const responseData = res.data;
        return responseData.data;
    }

    document.getElementById('stop').onclick = function () {
        currentStep = 1;
        previousMemState = null;
        clearMarkers();
        document.getElementById('compile_btn').classList.remove("disabled");
        document.getElementById('compile_btn').textContent = 'Executar';
        document.getElementById('step_btn').classList.remove("disabled");
        document.getElementById('step_btn').textContent = 'Passo a Passo';
        memoryStates = null;
        setDomState({ memory: [], register: 0 });
    }

    document.getElementById('compile_btn').onclick = async function (evt) {
        setAsLoading('compile_btn');
        document.getElementById('compile_btn').classList.add("disabled");
        document.getElementById('step_btn').classList.add("disabled");

        memoryStates = await compile();

        lastMemState = memoryStates[memoryStates.length - 1];

        setDomState(lastMemState);
        document.getElementById('compile_btn').textContent = 'Executar';
        document.getElementById('compile_btn').classList.remove("disabled");
        document.getElementById('step_btn').classList.remove("disabled");
    }

    var markers = [];
    function highlightText(lineStart) {
        var tokens = editor.getLineTokens(1, true);
        var start = CodeMirror.Pos(lineStart, tokens[0].start);
        var end = CodeMirror.Pos(lineStart + 1, tokens[0].start);
        var markOptions =
        {
            //className: "cm-test-highlight",
            css: "background-color: gray"
            //inclusiveLeft: true
        };
        markers.push(editor.markText(start, end, markOptions));
    }
    function clearMarkers() {
        return markers.forEach(marker => marker.clear());
    }

    var currentStep = 1;
    var previousMemState = null;
    document.getElementById('step_btn').onclick = async function (evt) {
        document.getElementById('compile_btn').classList.add("disabled");
        document.getElementById('step_btn').classList.add("disabled");

        if (!previousMemState || !memoryStates) {
            memoryStates = await compile();
            previousMemState = memoryStates[currentStep];
        } else {
            previousMemState = memoryStates[currentStep];
        }
        setDomState(previousMemState);
        clearMarkers();
        highlightText(previousMemState.pc - 1);
        document.getElementById('step_btn').classList.remove("disabled");
        document.getElementById('step_btn').textContent = 'Passo a Passo';

        if (currentStep == (memoryStates.length - 1)) {
            currentStep = 1;
            memoryStates = null;
            document.getElementById('step_btn').textContent = 'Finalizado !';
            document.getElementById('step_btn').classList.add("disabled");
            setTimeout(() => {
                document.getElementById('step_btn').classList.remove("disabled")
                document.getElementById('step_btn').textContent = 'Passo a Passo';
            }, 2000);
            document.getElementById('compile_btn').classList.remove("disabled");
            return false;
        }
        currentStep += 1;
    }


    function setDomState(memState) {
        let $memList = document.getElementById('memoryList');
        let $register = document.getElementById('register_text');
        $memList.innerHTML = '';
        const memory = memState.memory;
        const register = memState.register;
        console.log(memory, register)
        Object.keys(memory).forEach(function (index) {
            let value = memory[index];
            if (value != null) {
                $memList.innerHTML += `<li class="list-group-item"><span
                class="memory_index badge rounded-pill bg-secondary me-4">${index}</span><span
                class="memory_value">${value}</span></li>`;
            }
        });
        $register.innerHTML = register;


    }

})