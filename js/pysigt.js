(function() {

    var element = document.getElementById('pys-me');
    console.log("hej");

    if(element) {
        var pysarna = [
            "hemtrevlig",
            "käck",
            "läcker",
            "elegant",
            "fräsch",
            "stajlad",
            "gemytlig",
            "festlig",
            "pysig",
            "inbjudande",
            "angenäm",
            "festlig",
            "koslig",
            "dælig",
            "fräsig"
        ];

        var randomIndex = Math.floor((Math.random()*pysarna.length));
        var text = document.createTextNode(pysarna[randomIndex]);
        element.appendChild(text);
    }

})();