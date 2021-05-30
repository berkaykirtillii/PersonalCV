
function loadEvent(){
    date();
    autoComp();
}

function date(){
    $("#birthday").datepicker();
}

function autoComp(){
    var programmingLang = [
        "Python",
        "C",
        "C++",
        "C#",
        "Java",
        "JavaScript",
        "Ruby",
        "Lisp",
        "Fortran",
        "Ada",
        "Kotlin",
        "Flutter",
    ]
    
    $("#programming").autocomplete({
        source: programmingLang
    });
}


