<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <title>CodePen - Redesigned - Company Employees Hierarchy Chart </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto'>

    <style>
        .full-container {
            background-color: red;
            width: 100%;
            height: 100%;
            font-family: 'Roboto', sans-serif;
        }


        /* ########################   DEPARTMENT INFO  ############################*/

        .department-information {
            font-family: 'Roboto', sans-serif;
            display:none;
            box-shadow: 0 0 5px #999999;
            position: absolute;
            max-width: 200px;
            top: 60px;
            left: 20px;
            padding: 10px;
            background-color: white;
        }

        .department-information .dept-name {
            color: #26a69a;
            font-weight: bold;
        }

        .department-information .dept-description {
            margin-top: 10px;
            color: #959b9a;
            font-size: 13px;
        }

        .department-information .dept-emp-count {
            margin-top: 10px;
            color: #959b9a;
            font-size: 13px;
        }

        /* ############################## SEARCHBOX ######################################### */

        .user-search-box {
            overflow: hidden;
            position: absolute;
            right: 0;
            height: 100%;
            top: 0;
            width: 0;
            background-color: white;
            border: 1px solid #c7dddb;
            font-family: 'Roboto', sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        ::-webkit-input-placeholder {
            /* WebKit, Blink, Edge */
            color: #bcbcc4;
            opacity: 0.5;
        }

        :-moz-placeholder {
            /* Mozilla Firefox 4 to 18 */
            color: #bcbcc4;
            opacity: 0.5;
        }

        ::-moz-placeholder {
            /* Mozilla Firefox 19+ */
            color: #bcbcc4;
            opacity: 0.5;
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #bcbcc4;
            opacity: 0.5;
        }

        .user-search-box .input-box {
            width: 100%;
            height: 200px;
            top: 0;
            background-color: #e8efee;
        }

        .user-search-box .close-button-wrapper i {
            margin: 10px;
            margin-left: 9%;
            font-size: 60px;
            font-weight: 400;
            color: #aa1414;
        }

        .user-search-box input {
            color: gray !important;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #9e9e9e;
            border-radius: 0;
            outline: none;
            height: 3rem;
            width: 100%;
            font-size: 1rem;
            margin: 0 0 20px 0;
            padding: 0;
            box-shadow: none;
            box-sizing: content-box;
            transition: all 0.3s;
        }

        .user-search-box input:focus {
            border-bottom: 1px solid #26a69a;
            box-shadow: 0 1px 0 0 #26a69a;
        }

        .user-search-box .result-header {
            background-color: white;
            font-weight: 700;
            padding: 12px;
            color: gray;
            border-top: 2px solid #d3e8e5;
            border-bottom: 1px solid #d3e8e5;
        }

        .user-search-box .result-list {
            position: absolute;
            max-height: 100%;
            min-width: 100%;
            overflow: auto;
        }

        .user-search-box .buffer {
            width: 100%;
            height: 400px;
        }

        .user-search-box .list-item {
            clear: both;
            background-color: white;
            position: relative;
            background-color: white;
            width: 100%;
            height: 100px;
            border-top: 1px solid #d3e8e5;
        }

        .user-search-box .list-item a {
            display: inline;
            margin: 0;
        }

        .user-search-box .list-item .image-wrapper {
            float: left;
            width: 100px;
            height: 100px;
        }

        .user-search-box .list-item .image {
            width: 70px;
            height: 70px;
            margin-left: 15px;
            margin-top: 15px;
            border-radius: 5px;
        }

        .user-search-box .list-item .description {
            padding: 15px;
            padding-left: 0px;
            float: left;
            width: 180px;
        }

        .user-search-box .list-item .buttons {
            padding: 15px;
            padding-left: 0px;
            float: left;
            width: auto;
        }
        .user-search-box .list-item .description .name {
            font-size: 15px;
            color: #aa1414;
            font-weight: 900;
            margin: 0;
            padding: 0;
            letter-spacing: 1px;
        }

        .user-search-box .list-item .description .position-name {
            color: #59525b;
            letter-spacing: 1px;
            font-size: 12px;
            font-weight: 900;
            margin: 0;
            margin-top: 3px;
            padding: 0;
        }

        .user-search-box .list-item .description .area {
            color: #91a4a5;
            letter-spacing: 1px;
            font-size: 12px;
            font-weight: 400;
            margin: 0;
            margin-top: 3px;
            padding: 0;
        }
        .user-search-box .list-item .btn-locate{
            margin-top:30px;
        }

        .user-search-box .list-item .btn-search-box{
            font-size:10px;
        }

        .user-search-box .close-button-wrapper i:hover {
            color: black;
            cursor: pointer;
        }

        .user-search-box .input-wrapper {
            width: 80%;
            margin: 0 auto;
        }

        .user-search-box .input-bottom-placeholder {
            margin-top: -16px;
            color: #bcbcc4;
            letter-spacing: 1px;
        }


        /* ############################### Tooltip css ########################### */

        .profile-image-wrapper {
            background-size: 210px;
            margin: 30px;
            border-radius: 50%;
            width: 210px;
            height: 210px;
        }

        .customTooltip-wrapper {
            font-family: 'Roboto', sans-serif;
            opacity: 0;
            /* NEW */
            display: none;
            position: absolute;
        }

        .customTooltip {
            background: white;
            box-shadow: 0 0 5px #999999;
            color: #333;
            position: absolute;
            font-size: 12px;
            left: 130px;
            text-align: center;
            top: 95px;
            z-index: 10;
            text-align: left;
        }

        .tooltip-hr {
            width: 70px;
            background-color: #91a4a5;
            height: 1px;
            margin-left: auto;
            margin-right: auto;
            margin-top: -17px;
            margin-bottom: 25px;
        }

        .tooltip-desc {
            padding-left: 10px;
            margin-top: -20px;
            margin-left: 20px;
            overflow: auto;
        }

        .tooltip-desc .name {
            color: #962828;
            font-weight: 900;
            letter-spacing: 1px;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 2px;
            text-decoration: none;
        }

        .tooltip-desc .name:hover {
            text-decoration: underline;
        }

        .tooltip-desc .position {
            color: #59525b;
            letter-spacing: 1px;
            font-size: 17px;
            font-weight: 500;
            margin-bottom: 2px;
            margin-top: 0px;
        }

        .tooltip-desc .area {
            color: #91a4a5;
            letter-spacing: 1px;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 2px;
            margin-top: 7px;
        }

        .tooltip-desc .office {
            color: #91a4a5;
            line-height: 160%;
            font-size: 14px;
            font-weight: 400;
            margin-bottom: -10px;
            margin-top: -5px;
        }

        .tooltip-desc .tags-wrapper .title {
            display: inline-block;
            float: left;
        }

        .tooltip-desc .tags-wrapper .tags {
            display: inline-block;
            float: left;
        }

        .bottom-tooltip-hr {
            width: 100%;
            background-color: #58993e;
            height: 3px;
            margin-left: auto;
            margin-right: auto;
            margin-top: -17px;
        }

        .btn-tooltip-department {
            margin-top: 20px;
        }

        .btn.disabled {
            background-color: #DFDFDF !important;
            box-shadow: none;
            color: #9F9F9F !important;
            cursor: default;
        }

        .btn {
            border: none;
            border-radius: 2px;
            height: 36px;
            line-height: 36px;
            outline: 0;
            text-transform: uppercase;
            vertical-align: middle;
            -webkit-tap-highlight-color: transparent;
            text-decoration: none;
            color: #fff;
            background-color: #26a69a;
            text-align: center;
            letter-spacing: .5px;
            transition: .2s ease-out;
            cursor: pointer;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .btn:hover {
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
        }

        .btn.disabled:hover {
            box-shadow: none;
        }


        /* ####################################### TAGS ###################################### */

        .tags {
            list-style: none;
            margin-top: -9px;
            margin-left: 5px;
            overflow: hidden;
            padding: 0;
        }

        .tags-wrapper {
            font-size: 2.28rem;
            line-height: 110%;
            margin: 1.14rem 0 0.912rem 0;
        }

        .tags-wrapper .title {
            color: #91a4a5;
            font-size: 24px;
        }

        .tags li {
            float: left;
        }

        .tag {
            font-size: 11px;
            background: #E1ECF4;
            border-radius: 2px;
            color: ##39739d;
            display: inline-block;
            height: 20px;
            line-height: 20px;
            padding: 0 5px 0 5px;
            position: relative;
            margin: 0 5px 5px 0;
            text-decoration: none;
            -webkit-transition: color 0.2s;
        }


        /* #############################   Buttons  ############################################*/

        .btn-search {
            top: 80px;
        }

        .btn-fullscreen {
            top: 20px;
        }

        .btn-back {
            top: 20px;
            left: 20px;
            display: none;
        }

        .btn-show-my-self {
            top: 50px;
        }

        .btn-action {
            position: absolute;
            right: 25px;
            height: 26px;
            color: white;
            background-color: #aa1414;
            border: 1px solid black;
            border-radius: 12px;
            cursor: pointer;
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
        }

        .btn-action:focus {
            outline: 0;
            background-color: #aa1414;
        }

        .btn-action:hover {
            background-color: #490b0b;
        }

        .btn-action i {
            font-size: 14px;
        }

        .btn-action .icon {
            background-color: #c19e45;
            padding: 5px 6px 5px 6px;
            border-radius: 11px;
            margin-right: -7px;
        }


        /* ############################################## SVG ################################# */

        .nodeHasChildren {
            fill: white;
        }

        .nodeDoesNotHaveChildren {
            fill: white;
        }

        .nodeRepresentsCurrentUser {
            stroke: Chartreuse;
            stroke-width: 3;
        }

        text {
            fill: dimgray;
        }

        .link {
            fill: none;
            stroke: #ccc;
            stroke-width: 1.5px;
        }

        .node {
            cursor: pointer;
        }

        .node-collapse {
            stroke: grey;
        }

        .node-collapse-right-rect {
            fill: #70c645;
            stroke: #70c645;
        }

        .node text {
            fill: white;
            font-family: "Segoe UI", Arial, sans-serif;
            font-size: 10px;
        }

        .node circle {
            stroke-width: 1px;
            stroke: #70c645;
            fill: #70c645;
        }

        .node-group .emp-name {
            fill: #962828;
            font-size: 12px;
            font-weight: 600
        }

        .node-group .emp-position-name {
            fill: #59525b;
            font-size: 11px;
        }

        .node-group .emp-area {
            fill: #91a4a5;
            font-size: 10px;
        }

        .node-group .emp-count,
        .node-group .emp-count-icon {
            fill: #91a4a5;
            font-size: 12px;
        }
    </style>






</head>

<body translate="no" >

<div id="full-container">
    <button class="btn-action btn-fullscreen" onclick="params.funcs.toggleFullScreen()">Fullscreen <span class='icon'/> <i class="fa fa-arrows-alt" aria-hidden="true"></i></span></button>
    <button class="btn-action btn-show-my-self" onclick="params.funcs.showMySelf()"> Show myself <span class='icon'/> <i class="fa fa-user" aria-hidden="true"></i></span></button>

    <button class=" btn-action btn-search" onclick="params.funcs.search()"> Search <span class='icon'/> <i class="fa fa-search" aria-hidden="true"></i></span></button>

    <button class=" btn-action btn-back" onclick="params.funcs.back()"> Back <span class='icon'/> <i class="fa fa-arrow-left" aria-hidden="true"></i></span></button>

    <div class="department-information">
        <div class="dept-name">
            dept name
        </div>
        <div class="dept-emp-count">
            dept description test, this is department description
        </div>
        <div class="dept-description">
            dept description test, this is department description
        </div>
    </div>

    <div class="user-search-box">
        <div class="input-box">
            <div class="close-button-wrapper"><i onclick="params.funcs.closeSearchBox()" class="fa fa-times" aria-hidden="true"></i></div>
            <div class="input-wrapper">
                <input type="text" class="search-input" placeholder="Search" />
                <div class="input-bottom-placeholder">By Firstname, Lastname, Tags</div>
            </div>
            <div>
            </div>
        </div>
        <div class="result-box">
            <div class="result-header"> RESULTS </div>
            <div class="result-list">


                <div class="buffer"></div>
            </div>
        </div>
    </div>
    <div id="svgChart"></div>
    <!--
     <button class="btn btn-expand" onclick="params.funcs.expandAll()">Expand All</button>
  -->
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>



<script >
    var params = {
        selector: "#svgChart",
        //dataLoadUrl: "https://gist.githubusercontent.com/jmrodriguez-smartclip/913a6bded6760eb0275092e680c072fd/raw/5a5ab18142572cca47ccec20823e076fa581a6f1/sampleData.json",
        dataLoadUrl: "https://raw.githubusercontent.com/bumbeishvili/Assets/master/Projects/D3/Organization%20Chart/redesignedChartLongData.json",
    chartWidth: window.innerWidth-40,
        chartHeight: window.innerHeight - 40,
        funcs: {
        showMySelf: null,
            search: null,
            closeSearchBox: null,
            clearResult: null,
            findInTree: null,
            reflectResults: null,
            departmentClick: null,
            back: null,
            toggleFullScreen: null,
            locate:null
    },
    data: null
    }

    d3.json(params.dataLoadUrl, function(data) {
        params.data = data;
        params.pristinaData = JSON.parse(JSON.stringify(data));

        drawOrganizationChart(params);
    })

    function drawOrganizationChart(params) {
        listen();

        params.funcs.showMySelf = showMySelf;
        params.funcs.expandAll = expandAll;
        params.funcs.search = searchUsers;
        params.funcs.closeSearchBox = closeSearchBox;
        params.funcs.findInTree = findInTree;
        params.funcs.clearResult = clearResult;
        params.funcs.reflectResults = reflectResults;
        params.funcs.departmentClick = departmentClick;
        params.funcs.back = back;
        params.funcs.toggleFullScreen = toggleFullScreen;
        params.funcs.locate=locate;

        var attrs = {
            EXPAND_SYMBOL: '\uf067',
            COLLAPSE_SYMBOL: '\uf068',
            selector: params.selector,
            root: params.data,
            width: params.chartWidth,
            height: params.chartHeight,
            index: 0,
            nodePadding: 9,
            collapseCircleRadius: 7,
            nodeHeight: 80,
            nodeWidth: 210,
            duration: 750,
            rootNodeTopMargin: 20,
            minMaxZoomProportions: [0.05, 3],
            linkLineSize: 180,
            collapsibleFontSize: '10px',
            userIcon: '\uf007',
            nodeStroke: "#ccc",
            nodeStrokeWidth: '1px'
        }

        var dynamic = {}
        dynamic.nodeImageWidth = attrs.nodeHeight * 100 / 140;
        dynamic.nodeImageHeight = attrs.nodeHeight - 2 * attrs.nodePadding;
        dynamic.nodeTextLeftMargin = attrs.nodePadding * 2 + dynamic.nodeImageWidth
        dynamic.rootNodeLeftMargin = attrs.width / 2;
        dynamic.nodePositionNameTopMargin = attrs.nodePadding + 8 + dynamic.nodeImageHeight / 4 * 1
        dynamic.nodeChildCountTopMargin = attrs.nodePadding + 14 + dynamic.nodeImageHeight / 4 * 3


        // Se crea un layout de arbol, especificando el ancho y el alto de los nodos.
        var tree = d3.layout.tree().nodeSize([attrs.nodeWidth + 40, attrs.nodeHeight]);

        // Se crea el conector entre nodos, que utiliza diagonal(),lo que hace que aparezcan splines entre nodos.
        // Esto no es lo que queremos.Queremos lineas rectas, por lo que se va a añadir un generador de paths custom.
        // Ese generador de paths no es mas que una funcion que, a partir de 2 nodos, retorna un path SVG entre ellos

        var diagonal = d3.svg.diagonal()
            .projection(function(d) {

                return [d.x + attrs.nodeWidth / 2, d.y + attrs.nodeHeight / 2];
            });
        /*
        svg.selectAll(".link")
        .data(root.links())
        .enter().append("path")
            .attr("d", elbow);   // Appended paths use the custom path generator.

            // Custom path generator
            function elbow(d) {
            return "M" + d.source.x + "," + d.source.y + "H" + d.target.x + "V" + d.target.y;
            }
        */
        // https://d3-wiki.readthedocs.io/zh_CN/master/Zoom-Behavior/

        var zoomBehaviours = d3.behavior
            .zoom()
            .scaleExtent(attrs.minMaxZoomProportions)
            .on("zoom", redraw);

        // Se crea el svg principal, nota que se le esta aniadiendo el zoom.
        var svg = d3.select(attrs.selector)
            .append("svg")
            .attr("width", attrs.width)
            .attr("height", attrs.height)
            .call(zoomBehaviours)
            .append("g")
            .attr("transform", "translate(" + attrs.width / 2 + "," + 20 + ")");

        //necessary so that zoom knows where to zoom and unzoom from
        zoomBehaviours.translate([dynamic.rootNodeLeftMargin, attrs.rootNodeTopMargin]);

        attrs.root.x0 = 0;
        attrs.root.y0 = dynamic.rootNodeLeftMargin;

        // Se aniaden ids unicos a todos los elementos
        if (params.mode != 'department') {
            // adding unique values to each node recursively
            var uniq = 1;
            addPropertyRecursive('uniqueIdentifier', function(v) {

                return uniq++;
            }, attrs.root);

        }
        // Se expande el elemento root
        expand(attrs.root);
        if (attrs.root.children) {
           // y se colapsan todos los hijos
            attrs.root.children.forEach(collapse);
        }

        update(attrs.root);

        // Se establece la altura de todos los elementos
        d3.select(attrs.selector).style("height", attrs.height);

        // Se crea un wrapper para el tooltip
        var tooltip = d3.select('body')
            .append('div')
            .attr('class', 'customTooltip-wrapper');

        function update(source, param) {

            // Compute the new tree layout.
            // https://d3-wiki.readthedocs.io/zh_CN/master/Tree-Layout/

            // Se generan los nodos, y los links
            // Interesante que el primero que se hace cargo de los nodos, es el layout.
            // Mas tarde, la funcion .data() recibe los nodos creados por el layout
            var nodes = tree.nodes(attrs.root)
                    .reverse(), // Por que les da la vuelta
                links = tree.links(nodes); // se crean los links


            // Normalize for fixed-depth.
            nodes.forEach(function(d) {
                d.y = d.depth * attrs.linkLineSize; // Supongo que d.depth es la profundidad dentro del arbol.
            });

            // Aqui es donde se capturan los nodos que ya se han creado, entiendo, por la llamada al layout,
            // devolviendo el id, si lo tenia, o creandolo, si no lo tenia.
            var node = svg.selectAll("g.node")
                .data(nodes, function(d) {
                    return d.id || (d.id = ++attrs.index);
                });

            // Enter any new nodes at the parent's previous position.
            // Se capturan los datos nuevos, y se crea un "g" para cada uno.
            var nodeEnter = node.enter()
                .append("g")
                .attr("class", "node")
                .attr("transform", function(d) {
                    return "translate(" + source.x0 + "," + source.y0 + ")";
                })

            // Se les añade otro elemento "g" dentro de los anteriores , si lo estoy entendiendo bien
            var nodeGroup = nodeEnter.append("g")
                .attr("class", "node-group")

            // Se crea un rect para cada uno de los datos
            nodeGroup.append("rect")
                .attr("width", attrs.nodeWidth)
                .attr("height", attrs.nodeHeight)
                .attr("data-node-group-id",function(d){
                    return d.uniqueIdentifier;
                })
                .attr("class", function(d) {
                    var res = "";
                    if (d.isLoggedUser) res += 'nodeRepresentsCurrentUser ';
                    res += d._children || d.children ? "nodeHasChildren" : "nodeDoesNotHaveChildren";
                    return res;
                });
            // Parece que aqui se crea un nuevo elemento g, para, si no me equivoco, albergar el icono de collapse.
            var collapsiblesWrapper =
                nodeEnter.append('g')
                    .attr('data-id', function(v) {
                        return v.uniqueIdentifier;
                    });
            // Se crea im cuadrado, que se agrega al wrapper de collapsibles
            var collapsibleRects = collapsiblesWrapper.append("rect")
                .attr('class', 'node-collapse-right-rect')
                .attr('height', attrs.collapseCircleRadius)
                .attr('fill', 'black')
                .attr('x', attrs.nodeWidth - attrs.collapseCircleRadius)
                .attr('y', attrs.nodeHeight - 7)
                .attr("width", function(d) {
                    if (d.children || d._children) return attrs.collapseCircleRadius;
                    return 0;
                })

            // Se crea , en paralelo al anterior , los circulos con el simbolo de abrir
            var collapsibles =
                collapsiblesWrapper.append("circle")
                    .attr('class', 'node-collapse')
                    .attr('cx', attrs.nodeWidth - attrs.collapseCircleRadius)
                    .attr('cy', attrs.nodeHeight - 7)
                    .attr("", setCollapsibleSymbolProperty); // Eso es un atributo sin nombre??

            // Se ocultan los collapsibles si el nodo no tiene hijos
            //hide collapse rect when node does not have children
            collapsibles.attr("r", function(d) {
                if (d.children || d._children) return attrs.collapseCircleRadius;
                return 0;
            })
                .attr("height", attrs.collapseCircleRadius)

            // Y al wrapper, se añade el caracter
            collapsiblesWrapper.append("text")
                .attr('class', 'text-collapse')
                .attr("x", attrs.nodeWidth - attrs.collapseCircleRadius)
                .attr('y', attrs.nodeHeight - 3)
                .attr('width', attrs.collapseCircleRadius)
                .attr('height', attrs.collapseCircleRadius)
                .style('font-size', attrs.collapsibleFontSize)
                .attr("text-anchor", "middle")
                .style('font-family', 'FontAwesome')
                .text(function(d) {
                    return d.collapseText;
                })

            collapsiblesWrapper.on("click", click);

            nodeGroup.append("text")
                .attr("x", dynamic.nodeTextLeftMargin)
                .attr("y", attrs.nodePadding + 10)
                .attr('class', 'emp-name')
                .attr("text-anchor", "left")
                .text(function(d) {
                    return d.name.trim();
                })
                .call(wrap, attrs.nodeWidth);

            nodeGroup.append("text")
                .attr("x", dynamic.nodeTextLeftMargin)
                .attr("y", dynamic.nodePositionNameTopMargin)
                .attr('class', 'emp-position-name')
                .attr("dy", ".35em")
                .attr("text-anchor", "left")
                .text(function(d) {
                    var position =  d.positionName.substring(0,27);
                    if(position.length<d.positionName.length){
                        position = position.substring(0,24)+'...'
                    }
                    return position;
                })

            nodeGroup.append("text")
                .attr("x", dynamic.nodeTextLeftMargin)
                .attr("y", attrs.nodePadding + 10 + dynamic.nodeImageHeight / 4 * 2)
                .attr('class', 'emp-area')
                .attr("dy", ".35em")
                .attr("text-anchor", "left")

                .text(function(d) {
                    return d.area;
                })

            nodeGroup.append("text")
                .attr("x", dynamic.nodeTextLeftMargin)
                .attr("y", dynamic.nodeChildCountTopMargin)
                .attr('class', 'emp-count-icon')
                .attr("text-anchor", "left")
                .style('font-family', 'FontAwesome')
                .text(function(d) {
                    if (d.children || d._children) return attrs.userIcon;
                });

            nodeGroup.append("text")
                .attr("x", dynamic.nodeTextLeftMargin + 13)
                .attr("y", dynamic.nodeChildCountTopMargin)
                .attr('class', 'emp-count')
                .attr("text-anchor", "left")

                .text(function(d) {
                    if (d.children) return d.children.length;
                    if (d._children) return d._children.length;
                    return;
                })

            nodeGroup.append("defs").append("svg:clipPath")
                .attr("id", "clip")
                .append("svg:rect")
                .attr("id", "clip-rect")
                .attr("rx", 3)
                .attr('x', attrs.nodePadding)
                .attr('y', 2 + attrs.nodePadding)
                .attr('width', dynamic.nodeImageWidth)
                .attr('fill', 'none')
                .attr('height', dynamic.nodeImageHeight - 4)

            nodeGroup.append("svg:image")
                .attr('y', 2 + attrs.nodePadding)
                .attr('x', attrs.nodePadding)
                .attr('preserveAspectRatio', 'none')
                .attr('width', dynamic.nodeImageWidth)
                .attr('height', dynamic.nodeImageHeight - 4)
                .attr('clip-path', "url(#clip)")
                .attr("xlink:href", function(v) {
                    return v.imageUrl;
                })

            // Transition nodes to their new position.
            var nodeUpdate = node.transition()
                .duration(attrs.duration)
                .attr("transform", function(d) {
                    return "translate(" + d.x + "," + d.y + ")";
                })

            //todo replace with attrs object
            nodeUpdate.select("rect")
                .attr("width", attrs.nodeWidth)
                .attr("height", attrs.nodeHeight)
                .attr('rx', 3)
                .attr("stroke", function(d){
                    if(param && d.uniqueIdentifier== param.locate){
                        return '#a1ceed'
                    }
                    return attrs.nodeStroke;
                })
                .attr('stroke-width', function(d){
                    if(param && d.uniqueIdentifier== param.locate){
                        return 6;
                    }
                    return attrs.nodeStrokeWidth})

            // Transition exiting nodes to the parent's new position.
            var nodeExit = node.exit().transition()
                .duration(attrs.duration)
                .attr("transform", function(d) {
                    return "translate(" + source.x + "," + source.y + ")";
                })
                .remove();

            nodeExit.select("rect")
                .attr("width", attrs.nodeWidth)
                .attr("height", attrs.nodeHeight)

            // Update the links…
            var link = svg.selectAll("path.link")
                .data(links, function(d) {
                    return d.target.id;
                });

            // Enter any new links at the parent's previous position.
            link.enter().insert("path", "g")
                .attr("class", "link")
                .attr("x", attrs.nodeWidth / 2)
                .attr("y", attrs.nodeHeight / 2)
                .attr("d", function(d) {
                    var o = {
                        x: source.x0,
                        y: source.y0
                    };
                    return diagonal({
                        source: o,
                        target: o
                    });
                });

            // Transition links to their new position.
            link.transition()
                .duration(attrs.duration)
                .attr("d", diagonal)
            ;

            // Transition exiting nodes to the parent's new position.
            link.exit().transition()
                .duration(attrs.duration)
                .attr("d", function(d) {
                    var o = {
                        x: source.x,
                        y: source.y
                    };
                    return diagonal({
                        source: o,
                        target: o
                    });
                })
                .remove();

            // Stash the old positions for transition.
            nodes.forEach(function(d) {
                d.x0 = d.x;
                d.y0 = d.y;
            });

            if(param && param.locate){
                var x;
                var y;

                nodes.forEach(function(d) {
                    if (d.uniqueIdentifier == param.locate) {
                        x = d.x;
                        y = d.y;
                    }
                });







                // normalize for width/height
                var new_x = (-x + (window.innerWidth / 2));
                var new_y = (-y + (window.innerHeight / 2));

                // move the main container g
                svg.attr("transform", "translate(" + new_x + "," + new_y + ")")
                zoomBehaviours.translate([new_x, new_y]);
                zoomBehaviours.scale(1);
            }

            if (param && param.centerMySelf) {
                var x;
                var y;

                nodes.forEach(function(d) {
                    if (d.isLoggedUser) {
                        x = d.x;
                        y = d.y;
                    }

                });

                // normalize for width/height
                var new_x = (-x + (window.innerWidth / 2));
                var new_y = (-y + (window.innerHeight / 2));

                // move the main container g
                svg.attr("transform", "translate(" + new_x + "," + new_y + ")")
                zoomBehaviours.translate([new_x, new_y]);
                zoomBehaviours.scale(1);
            }

            /*################  TOOLTIP  #############################*/

            function getTagsFromCommaSeparatedStrings(tags) {
                return tags.split(',').map(function(v) {
                    return '<li><div class="tag">' + v + '</div></li>  '
                }).join('');
            }

            function tooltipContent(item) {

                var strVar = "";

                strVar += "  <div class=\"customTooltip\">";
                strVar += "    <!--";
                strVar += "    <div class=\"tooltip-image-wrapper\"> <img width=\"300\" src=\"https:\/\/raw.githubusercontent.com\/bumbeishvili\/Assets\/master\/Projects\/D3\/Organization%20Chart\/cto.jpg\"> <\/div>";
                strVar += "-->";
                strVar += "    <div class=\"profile-image-wrapper\" style='background-image: url(" + item.imageUrl + ")'>";
                strVar += "    <\/div>";
                strVar += "    <div class=\"tooltip-hr\"><\/div>";
                strVar += "    <div class=\"tooltip-desc\">";
                strVar += "      <a class=\"name\" href='" + item.profileUrl + "' target=\"_blank\"> " + item.name + "<\/a>";
                strVar += "      <p class=\"position\">" + item.positionName + " <\/p>";
                strVar += "      <p class=\"area\">" + item.area + " <\/p>";
                strVar += "";
                strVar += "      <p class=\"office\">" + item.office + "<\/p>";
                strVar += "     <button class='" + (item.unit.type == 'business' ? " disabled " : "") + " btn btn-tooltip-department' onclick='params.funcs.departmentClick(" + JSON.stringify(item.unit) + ")'>" + item.unit.value + "</button>";
                strVar += "      <h4 class=\"tags-wrapper\">             <span class=\"title\"><i class=\"fa fa-tags\" aria-hidden=\"true\"><\/i>";
                strVar += "        ";
                strVar += "        <\/span>           <ul class=\"tags\">" + getTagsFromCommaSeparatedStrings(item.tags) + "<\/ul>         <\/h4> <\/div>";
                strVar += "    <div class=\"bottom-tooltip-hr\"><\/div>";
                strVar += "  <\/div>";
                strVar += "";

                return strVar;

            }

            function tooltipHoverHandler(d) {

                var content = tooltipContent(d);
                tooltip.html(content);

                tooltip.transition()
                    .duration(200).style("opacity", "1").style('display', 'block');
                d3.select(this).attr('cursor', 'pointer').attr("stroke-width", 50);

                var y = d3.event.pageY;
                var x = d3.event.pageX;

                //restrict tooltip to fit in borders
                if (y < 220) {
                    y += 220 - y;
                    x += 130;
                }

                if(y>attrs.height-300){
                    y-=300-(attrs.height-y);
                }

                tooltip.style('top', (y - 300) + 'px')
                    .style('left', (x - 470) + 'px');
            }

            function tooltipOutHandler() {
                tooltip.transition()
                    .duration(200)
                    .style('opacity', '0').style('display', 'none');
                d3.select(this).attr("stroke-width", 5);

            }

            nodeGroup.on('click', tooltipHoverHandler);

            nodeGroup.on('dblclick', tooltipOutHandler);

            function equalToEventTarget() {
                return this == d3.event.target;
            }

            d3.select("body").on("click", function() {
                var outside = tooltip.filter(equalToEventTarget).empty();
                if (outside) {
                    tooltip.style('opacity', '0').style('display', 'none');
                }
            });

        }

        // Toggle children on click.
        function click(d) {

            d3.select(this).select("text").text(function(dv) {

                if (dv.collapseText == attrs.EXPAND_SYMBOL) {
                    dv.collapseText = attrs.COLLAPSE_SYMBOL
                } else {
                    if (dv.children) {
                        dv.collapseText = attrs.EXPAND_SYMBOL
                    }
                }
                return dv.collapseText;

            })

            if (d.children) {
                d._children = d.children;
                d.children = null;
            } else {
                d.children = d._children;
                d._children = null;
            }
            update(d);

        }

        //########################################################

        //Redraw for zoom
        function redraw() {
            //console.log("here", d3.event.translate, d3.event.scale);
            svg.attr("transform",
                "translate(" + d3.event.translate + ")" +
                " scale(" + d3.event.scale + ")");
        }

        // #############################   Function Area #######################
        function wrap(text, width) {

            text.each(function() {
                var text = d3.select(this),
                    words = text.text().split(/\s+/).reverse(),
                    word,
                    line = [],
                    lineNumber = 0,
                    lineHeight = 1.1, // ems
                    x = text.attr("x"),
                    y = text.attr("y"),
                    dy = 0, //parseFloat(text.attr("dy")),
                    tspan = text.text(null)
                        .append("tspan")
                        .attr("x", x)
                        .attr("y", y)
                        .attr("dy", dy + "em");
                while (word = words.pop()) {
                    line.push(word);
                    tspan.text(line.join(" "));
                    if (tspan.node().getComputedTextLength() > width) {
                        line.pop();
                        tspan.text(line.join(" "));
                        line = [word];
                        tspan = text.append("tspan")
                            .attr("x", x)
                            .attr("y", y)
                            .attr("dy", ++lineNumber * lineHeight + dy + "em")
                            .text(word);
                    }
                }
            });
        }

        function addPropertyRecursive(propertyName, propertyValueFunction, element) {
            if (element[propertyName]) {
                element[propertyName] = element[propertyName] + ' ' + propertyValueFunction(element);
            } else {
                element[propertyName] = propertyValueFunction(element);
            }
            if (element.children) {
                element.children.forEach(function(v) {
                    addPropertyRecursive(propertyName, propertyValueFunction, v)
                })
            }
            if (element._children) {
                element._children.forEach(function(v) {
                    addPropertyRecursive(propertyName, propertyValueFunction, v)
                })
            }
        }

        function departmentClick(item) {
            hide(['.customTooltip-wrapper']);

            if (item.type == 'department' && params.mode != 'department') {
                //find third level department head user
                var found = false;
                var secondLevelChildren = params.pristinaData.children;
                parentLoop:
                    for (var i = 0; i < secondLevelChildren.length; i++) {
                        var secondLevelChild = secondLevelChildren[i];
                        var thirdLevelChildren = secondLevelChild.children ? secondLevelChild.children : secondLevelChild._children;

                        for (var j = 0; j < thirdLevelChildren.length; j++) {
                            var thirdLevelChild = thirdLevelChildren[j];
                            if (thirdLevelChild.unit.value.trim() == item.value.trim()) {
                                clear(params.selector);

                                hide(['.btn-action']);
                                show(['.btn-action.btn-back', '.btn-action.btn-fullscreen', '.department-information']);
                                set('.dept-name', item.value);

                                set('.dept-emp-count', "Employees Quantity - " + getEmployeesCount(thirdLevelChild));
                                set('.dept-description', thirdLevelChild.unit.desc);

                                params.oldData = params.data;

                                params.data = deepClone(thirdLevelChild);
                                found = true;
                                break parentLoop;
                            }
                        }
                    }
                if (found) {
                    params.mode = "department";
                    params.funcs.closeSearchBox();
                    drawOrganizationChart(params);

                }

            }
        }

        function getEmployeesCount(node) {
            var count = 1;
            countChilds(node);
            return count;

            function countChilds(node) {
                var childs = node.children ? node.children : node._children;
                if (childs) {
                    childs.forEach(function(v) {
                        count++;
                        countChilds(v);
                    })
                }
            }
        }

        function reflectResults(results) {
            var htmlStringArray = results.map(function(result) {
                var strVar = "";
                strVar += "         <div class=\"list-item\">";
                strVar += "          <a >";
                strVar += "            <div class=\"image-wrapper\">";
                strVar += "              <img class=\"image\" src=\"" + result.imageUrl + "\"\/>";
                strVar += "            <\/div>";
                strVar += "            <div class=\"description\">";
                strVar += "              <p class=\"name\">" + result.name + "<\/p>";
                strVar += "               <p class=\"position-name\">" + result.positionName + "<\/p>";
                strVar += "               <p class=\"area\">" + result.area + "<\/p>";
                strVar += "            <\/div>";
                strVar += "            <div class=\"buttons\">";
                strVar += "              <a target='_blank' href='"+result.profileUrl+"'><button class='btn-search-box btn-action'>View Profile<\/button><\/a>";
                strVar += "              <button class='btn-search-box btn-action btn-locate' onclick='params.funcs.locate("+result.uniqueIdentifier+")'>Locate <\/button>";
                strVar += "            <\/div>";
                strVar += "          <\/a>";
                strVar += "        <\/div>";

                return strVar;

            })

            var htmlString = htmlStringArray.join('');
            params.funcs.clearResult();

            var parentElement = get('.result-list');
            var old = parentElement.innerHTML;
            var newElement = htmlString + old;
            parentElement.innerHTML = newElement;
            set('.user-search-box .result-header', "RESULT - " + htmlStringArray.length);

        }

        function clearResult() {
            set('.result-list', '<div class="buffer" ></div>');
            set('.user-search-box .result-header', "RESULT");

        }

        function listen() {
            var input = get('.user-search-box .search-input');

            input.addEventListener('input', function() {
                var value = input.value ? input.value.trim() : '';
                if (value.length < 3) {
                    params.funcs.clearResult();
                } else {
                    var searchResult = params.funcs.findInTree(params.data, value);
                    params.funcs.reflectResults(searchResult);
                }

            });
        }

        function searchUsers() {

            d3.selectAll('.user-search-box')
                .transition()
                .duration(250)
                .style('width', '350px')
        }

        function closeSearchBox() {
            d3.selectAll('.user-search-box')
                .transition()
                .duration(250)
                .style('width', '0px')
                .each("end", function() {
                    params.funcs.clearResult();
                    clear('.search-input');
                });

        }

        function findInTree(rootElement, searchText) {
            var result = [];
            // use regex to achieve case insensitive search and avoid string creation using toLowerCase method
            var regexSearchWord = new RegExp(searchText, "i");

            recursivelyFindIn(rootElement, searchText);

            return result;

            function recursivelyFindIn(user) {
                if (user.name.match(regexSearchWord) ||
                    user.tags.match(regexSearchWord)) {
                    result.push(user)
                }

                var childUsers = user.children ? user.children : user._children;
                if (childUsers) {
                    childUsers.forEach(function(childUser) {
                        recursivelyFindIn(childUser, searchText)
                    })
                }
            };
        }

        function back() {

            show(['.btn-action']);
            hide(['.customTooltip-wrapper', '.btn-action.btn-back', '.department-information'])
            clear(params.selector);

            params.mode = "full";
            params.data = deepClone(params.pristinaData)
            drawOrganizationChart(params);

        }

        function expandAll() {
            expand(root);
            update(root);
        }

        function expand(d) {
            if (d.children) {
                d.children.forEach(expand);
            }

            if (d._children) {
                d.children = d._children;
                d.children.forEach(expand);
                d._children = null;
            }

            if (d.children) {
                // if node has children and it's expanded, then  display -
                setToggleSymbol(d, attrs.COLLAPSE_SYMBOL);
            }
        }

        function collapse(d) {
            if (d._children) {
                d._children.forEach(collapse);
            }
            if (d.children) {
                d._children = d.children;
                d._children.forEach(collapse);
                d.children = null;
            }

            if (d._children) {
                // if node has children and it's collapsed, then  display +
                setToggleSymbol(d, attrs.EXPAND_SYMBOL);
            }
        }

        function setCollapsibleSymbolProperty(d) {
            if (d._children) {
                d.collapseText = attrs.EXPAND_SYMBOL;
            } else if (d.children) {
                d.collapseText = attrs.COLLAPSE_SYMBOL;
            }
        }

        function setToggleSymbol(d, symbol) {
            d.collapseText = symbol;
            d3.select("*[data-id='" + d.uniqueIdentifier + "']").select('text').text(symbol);
        }

        /* recursively find logged user in subtree */
        function findmySelf(d) {
            if (d.isLoggedUser) {
                expandParents(d);
            } else if (d._children) {
                d._children.forEach(function(ch) {
                    ch.parent = d;
                    findmySelf(ch);
                })
            } else if (d.children) {
                d.children.forEach(function(ch) {
                    ch.parent = d;
                    findmySelf(ch);
                });
            };

        }

        function locateRecursive(d,id) {
            if (d.uniqueIdentifier == id) {
                expandParents(d);
            } else if (d._children) {
                d._children.forEach(function(ch) {
                    ch.parent = d;
                    locateRecursive(ch,id);
                })
            } else if (d.children) {
                d.children.forEach(function(ch) {
                    ch.parent = d;
                    locateRecursive(ch,id);
                });
            };

        }

        /* expand current nodes collapsed parents */
        function expandParents(d) {
            while (d.parent) {
                d = d.parent;
                if (!d.children) {
                    d.children = d._children;
                    d._children = null;
                    setToggleSymbol(d, attrs.COLLAPSE_SYMBOL);
                }

            }
        }

        function toggleFullScreen() {

            if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                    document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                }
                d3.select(params.selector + ' svg').attr('width', screen.width).attr('height', screen.height);
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
                d3.select(params.selector + ' svg').attr('width', params.chartWidth).attr('height', params.chartHeight);
            }

        }



        function showMySelf() {
            /* collapse all and expand logged user nodes */
            if (!attrs.root.children) {
                if (!attrs.root.isLoggedUser) {
                    attrs.root.children = attrs.root._children;
                }
            }
            if (attrs.root.children) {
                attrs.root.children.forEach(collapse);
                attrs.root.children.forEach(findmySelf);
            }

            update(attrs.root, {centerMySelf:true});
        }

        //locateRecursive
        function locate(id){
            /* collapse all and expand logged user nodes */
            if (!attrs.root.children) {
                if (!attrs.root.uniqueIdentifier == id) {
                    attrs.root.children = attrs.root._children;
                }
            }
            if (attrs.root.children) {
                attrs.root.children.forEach(collapse);
                attrs.root.children.forEach(function(ch){
                    locateRecursive(ch,id)
                });
            }

            update(attrs.root, {locate:id});
        }

        function deepClone(item) {
            return JSON.parse(JSON.stringify(item));
        }

        function show(selectors) {
            display(selectors, 'initial')
        }

        function hide(selectors) {
            display(selectors, 'none')
        }

        function display(selectors, displayProp) {
            selectors.forEach(function(selector) {
                var elements = getAll(selector);
                elements.forEach(function(element) {
                    element.style.display = displayProp;
                })
            });
        }

        function set(selector, value) {
            var elements = getAll(selector);
            elements.forEach(function(element) {
                element.innerHTML = value;
                element.value = value;
            })
        }

        function clear(selector) {
            set(selector, '');
        }

        function get(selector) {
            return document.querySelector(selector);
        }

        function getAll(selector) {
            return document.querySelectorAll(selector);
        }


    }
</script>






</body>

</html>
 