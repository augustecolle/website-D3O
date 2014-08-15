
    var dataset = {
    /* gewichtvermogen en energievermogen zijn voor het berekenen van het
    gewicht van de totale batterijbank. Ze werden berekend op dezelfde manier
    als in de tabel (waarde tussen 0 en 1) door de
    energiedichtheid/vermogendichtheid te delen door het gewicht en vervolgens
    te schalen*/
         "batteries":[{
            "type":"Aquion",
            "values": {
                "totaal":5,
                "energydensityabs":20,
                "powerdensityabs":2.46,
                "powerdensity":0,
                "energydensity":0,
                "gewichtvermogen":0,
                "gewichtenergie":0.66,
                "milieuimpact":1,
                "kost":0.43,
                "levensduur":1,
                "onderhoud":1}
            },
            {
            "type":"Pb-AGM",
            "values": {
                "totaal":2,
                "energydensityabs":100,
                "powerdensityabs":110,
                "powerdensity":0.25,
                "energydensity":0.31,
                "gewichtenergie":0.28,
                "gewichtvermogen":0.29,
                "milieuimpact":0.05,
                "kost":0.03,
                "levensduur":0,
                "onderhoud":1}
            },
            {
            "type":"Pb-Gel",
            "values":{
                "totaal":3,
                "energydensityabs":80,
                "powerdensityabs":90,
                "gewichtenergie":0.18,
                "gewichtvermogen":0.24,
                "powerdensity":0.21,
                "energydensity":0.23,
                "milieuimpact":0.05,
                "kost":0.14,
                "levensduur":0.18,
                "onderhoud":1}
            },
            {
            "type":"NiFe",
            "values": {
                "totaal":0,
                "energydensityabs":30,
                "powerdensityabs":77,
                "gewichtenergie":0,
                "gewichtvermogen":0.32,
                "powerdensity":0.18,
                "energydensity":0.04,
                "milieuimpact":0.19,
                "kost":0,//nog te veranderen
                "levensduur":0,//nog te veranderen
                "onderhoud":0}
            },
            {
            "type":"LFP",
            "values": {
                "totaal":6,
                "energydensityabs":280,
                "powerdensityabs":427,
                "powerdensity":1,
                "gewichtenergie":1,
                "gewichtvermogen":1,
                "energydensity":1,
                "milieuimpact":0.54,
                "kost":0.43,
                "levensduur":0.61,
                "onderhoud":1}
            },
            {
            "type":"NiMH",
            "values": {
                "totaal":4,
                "energydensityabs":200,
                "powerdensityabs":218,
                "powerdensity":0.51,
                "energydensity":0.69,
                "gewichtenergie":0.51,
                "gewichtvermogen":0.43,
                "milieuimpact":0,
                "kost":0,
                "levensduur":0.22,
                "onderhoud":1}
            },
            {
            "type":"Pb-FLA",
            "values": {
                "totaal":1,
                "energydensityabs":60,
                "powerdensityabs":85,
                "powerdensity":0.19,
                "energydensity":0.15,
                "milieuimpact":0.05,
                "gewichtenergie":0.07,
                "gewichtvermogen":0.22,
                "kost":1,
                "levensduur":0.25,
                "onderhoud":0}
            }]
        };
         
    //console.log(dataset);

    var width = 600;
    var height = 550;
    var barwidth = 320/7;

    var canvas = d3.select('#sliderplot').append('svg')
                    .attr("height", height)
                    .attr("width", width);
        

    canvas.selectAll("rect")
                .data(dataset.batteries,
                function(d){return d.values.totaal;})
                .enter()
                .append("rect")
                .attr("height", barwidth)
                .attr("width", 550)
                .attr("fill", "teal")
                .attr("x",0)
                .attr("y", function(d,i){return 50+i*(barwidth+15);});

    canvas.selectAll("text")
                .data(dataset.batteries, function(d){return d.values.totaal;})
                .enter()
                .append("text")
                .text(function(d){return d.type;})
                .style("font-size","39px")
                .attr("x",275)
                .attr("y", function(d,i){
                return 50+i*(barwidth+15)+barwidth/2+11;})
                .attr("text-anchor","middle")
		.attr("font-family", "lmodern")
		.attr("fill", "white");

    var milieuimpact = 0;
    var groottebatterijbank = 0;
    var benodigdonderhoud = 0;
    var levensduur = 0;
    var gewicht = 0;
    var kost = 0;
    var vermogendim = false;
//-----------LINKEN AAN INPUT ----------
    var vermogen = 1000;
    var energie = 4000;
//--------------------------------------
    var sortBars = function () {
        
        sortItems = function (a, b) {
            //console.log(a.values.totaal);
            return b.values.totaal - a.values.totaal;
        };
        
        canvas.selectAll("rect")
            .sort(sortItems)
            .transition()
            .delay(function (d, i) {
            return i * 50;
        })
            .duration(1000)
            .attr("y", function(d,i){return 50+i*(barwidth+15);})
            .attr("x", 0); 

        canvas.selectAll('text')
            .sort(sortItems)
            .transition()
            .delay(function (d, i) {
            return i * 50;
        })
            .duration(1000)
            .text(function (d) {
            return d.type;
        })
            .attr("text-anchor", "middle")
            .attr("x", 275)
            .style("font-size","39px")
            .attr("y", function(d,i){
            return 50+i*(barwidth+15)+barwidth/2+11;});
    };

    function updatebatterij(){
        for (var i=0; i<dataset.batteries.length; i++){
            //dimensioneren op vermogen of op energie?
            if(vermogen/dataset.batteries[i].values.powerdensityabs >
            energie/dataset.batteries[i].values.energydensityabs){
                vermogendim = true;
            }else{
                vermogendim = false;
            }
            //ken gewichten toe
            if (vermogendim){
                dataset.batteries[i].values.totaal =
                Math.round((dataset.batteries[i].values.milieuimpact*milieuimpact +
                dataset.batteries[i].values.kost*kost +
                dataset.batteries[i].values.levensduur*levensduur +
                dataset.batteries[i].values.onderhoud*benodigdonderhoud +
                dataset.batteries[i].values.powerdensity*groottebatterijbank +
                dataset.batteries[i].values.gewichtvermogen*gewicht)*100)/100;
            }else{
                dataset.batteries[i].values.totaal =
                Math.round((dataset.batteries[i].values.milieuimpact*milieuimpact +
                dataset.batteries[i].values.kost*kost +
                dataset.batteries[i].values.levensduur*levensduur +
                dataset.batteries[i].values.onderhoud*benodigdonderhoud +
                dataset.batteries[i].values.energydensity*groottebatterijbank +
                dataset.batteries[i].values.gewichtenergie*gewicht)*100)/100;
                console.log('ja');
            }
            //console.log(dataset.batteries[i].values.totaal);
        }
    }

    function sorteren(data){
        //console.log(data.value);
        sortBars();
    }
    updatebatterij();
    sortBars();


    $('#vermogenknop').click(function(){
        var number = $('#vermogeninput').val();
        if(isNaN(number)){
            $('#vermogeninput').val('NaN');
            alert('Ongeldige invoer \n "'+number+'"');
        }else{
            vermogen = number;
            updatebatterij();
            sortBars();
        }
    });
    $('#energieknop').click(function(){
        var number = $('#energieinput').val();
        if(isNaN(number)){
            $('#energieinput').val('NaN');
            alert('Ongeldige invoer \n "'+number+'"');
        }else{
            energie = number;
            updatebatterij();
            sortBars();
        }
    });
    $("#milieuslider").bind("slider:changed", function (event, data) {
        milieuimpact = data.value;
        updatebatterij();
        sorteren(data);
    });
    $("#grootteslider").bind("slider:changed", function (event, data) {
        groottebatterijbank = data.value;
        updatebatterij();
        sorteren(data);
    });
    $("#onderhoudslider").bind("slider:changed", function (event, data) {
        benodigdonderhoud = data.value;
        updatebatterij();
        sorteren(data);
    });
    $("#levensduurslider").bind("slider:changed", function (event, data) {
        levensduur = data.value;
        updatebatterij(); 
        sorteren(data);
    });
    $("#gewichtslider").bind("slider:changed", function (event, data) {
        gewicht = data.value;
        updatebatterij();
        sorteren(data);
    });
    $("#kostslider").bind("slider:changed", function (event, data) {
        kost = data.value;
        updatebatterij();
        sorteren(data);
    });

   
  $("[data-slider]")
    .each(function () {
      var input = $(this);
      $("<span>")
        .addClass("output")
        .insertAfter($(this));
    })
    .bind("slider:ready slider:changed", function (event, data) {
      $(this)
        .nextAll(".output:first")
          .html(data.value.toFixed(0));
    });

