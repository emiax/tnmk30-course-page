(function() {

    var element = document.getElementById('pys-me');

    console.log("Hej! Vad roligt att du har hittat hit.");
    console.log("Här i konsollen kan du köra javascript live.");
    console.log("Testa till exempel att skriva:");
    console.log("\'var fem = 5;\' och sedan till exempel \'fem + 1\'.");

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
            "fräsig",
            "klockren"
        ];

        var randomIndex = Math.floor((Math.random()*pysarna.length));
        var text = document.createTextNode(pysarna[randomIndex]);
        element.appendChild(text);
    }

})();