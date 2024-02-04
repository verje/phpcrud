
function closeAddnewform(idForm) {
    document.getElementById("addNew").style.display = "none"; //show the form's container
    var form = document.getElementById(idForm);
    form.style.display = "none";
    form.reset;
}

function showAddNewForm(idForm) {
    document.getElementById("addNew").style.display = "block"; //show the form's container
    document.getElementById(idForm).style.display = "block";
}
function closeLogin(cmd) {
    var form = document.getElementById("formLogin");
    var user = document.getElementById('user');
    var pass = document.getElementById('pass');
    user.value = '';
    pass.value = '';
    form.style.display = "none";
}
function openLogin(){
    var form = document.getElementById("formLogin");
    form.style.opacity = 0;
    form.style.display = "block";
    var opacity = 0; 
        var intervalID = setInterval(function() { 
      
            if (opacity < 1) { 
                opacity = opacity + 0.1 
                form.style.opacity = opacity; 
            } else { 
                clearInterval(intervalID); 
            } 
        }, 15); 
}  
function setGenre(g) {
    const genArray = ["?", "Male", "Female"]
    document.getElementById("genre").innerText = genArray[g]
}    

function comparePass(passC) {
    var pass = document.getElementById("pass").value;
    var msg = document.getElementById("msg");
    if (pass !== passC) {
        msg.innerText = "Password mismatch";
        msg.style.color = "red";
    } else {
        msg.innerText = "Password Confirmed!";
        msg.style.color = "lightgreen";
    }
}
function gotoStep(value) {
    var onError = false;
    var userFor = document.getElementById("userFor");
    var user = document.getElementById("user");
    var pass = document.getElementById("pass");
    var passC = document.getElementById("passConfirm");

    var msg = document.getElementById("msg");
    var step = document.getElementById("step");
    var step1In = document.getElementById("step1Inputs");
    var step2In = document.getElementById("step2Inputs");
    var step3In = document.getElementById("step3Inputs");
    var btnSave = document.getElementById("btnSave");
    var btnPrev = document.getElementById("btnPrev");
    var btnNext = document.getElementById("btnNext");

    var step1 = document.getElementById("step1");
    var step2 = document.getElementById("step2");
    var step3 = document.getElementById("step3");
    var stepSpan2 = document.getElementById("stepSpan2");
    var stepSpan3 = document.getElementById("stepSpan3");
    if (value > 0) {
        if (userFor.value == 0 && step.value == 1) {
            msg.innerText = "Please, select a person from list";
            console.log(step.value);
            return 0;
        } else if (user.value === "" && step.value == 2) {
            msg.innerText = "Username not valid!";
            console.log(step.value);
            return 0;
        } else if (pass.value === "" && step.value == 3) {
            msg.innerText = "Password can't be empty";
            console.log(step.value);
            return 0;
        } else {
            msg.innerText = "";
        }
    } else {
        msg.innerText = "";
    }

    step.value = parseInt(step.value) + parseInt(value);
    console.log(step.value);
    if (step.value == 1) {
        step1In.style.display = "inline";
        step2In.style.display = "none";
        step3In.style.display = "none";
        btnSave.style.display = "none";
        btnNext.style.display = "block";
        btnPrev.style.display = "none";
        step1.classList.replace("circleStep", "circleStepOk");
        step2.classList.replace("circleStepOk", "circleStep");
        step3.classList.replace("circleStepOk", "circleStep");
        stepSpan2.classList.replace("lineStepOk", "lineStep");

    } else if (step.value == 2) {
        step1In.style.display = "none";
        step2In.style.display = "inline";
        step3In.style.display = "none";
        btnSave.style.display = "none";
        btnNext.style.display = "block";
        btnPrev.style.display = "block";
        step1.classList.replace("circleStep", "circleStepOK");
        step2.classList.replace("circleStep", "circleStepOk");
        step3.classList.replace("circleStepOk", "circleStep");
        stepSpan2.classList.replace("lineStep", "lineStepOk");
        stepSpan3.classList.replace("lineStepOk", "lineStep");
    } else {
        step1In.style.display = "none";
        step2In.style.display = "none";
        step3In.style.display = "inline";
        btnSave.style.display = "block";
        btnNext.style.display = "none";
        btnPrev.style.display = "block";
        step1.classList.replace("circleStep", "circleStepOK");
        step2.classList.replace("circleStep", "circleStepOk");
        step3.classList.replace("circleStep", "circleStepOk");
        stepSpan2.classList.replace("lineStep", "lineStepOk");
        stepSpan3.classList.replace("lineStep", "lineStepOk");
    }
}    
function loginMsg(text) {
    var text = document.getElementById("loginMsgText").
    text.innerText = text
}

