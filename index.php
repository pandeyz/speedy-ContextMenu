<html>
<head>
<title>Menu</title>
<meta charset="utf-8">
<style type="text/css">
.show {
    z-index:1000;
    position: absolute;
    background:#fff;
    border-radius:5px ;
    padding: 2px;
    display: block;
    box-shadow:0px 3px 10px #999;
    -webkit-box-shadow:0px 3px 10px #999;
    -ms-box-shadow:0px 3px 10px #999;
    -moz-box-shadow:0px 3px 10px #999;
}
.show ul {
    margin:0px;
    padding: 0px;
    list-style: none;
    min-width: 100px; 
}
.gradient_cls {
    background: #fff;
    background: -webkit-linear-gradient(-45deg, rgba(160,207,244,0.7), rgba(255,255,255,0.7));
    background: -o-linear-gradient(-45deg, rgba(160,207,244,0.7), rgba(255,255,255,0.7));
    background: -moz-linear-gradient(-45deg, rgba(160,207,244,0.7), rgba(255,255,255,0.7));
    background: linear-gradient(-45deg, rgba(160,207,244,0.7), rgba(255,255,255,0.7));
}
.show ul li {
    display: block;
    padding: 1px 3px;
}
.show ul li.menu_separator {
    background: #eee;
    width: 100%;
    padding: 1px 0px;
}
.show ul li div {
    cursor: default;
    display: block;
    font-size: 13px;
    color: #666;
    text-decoration: none;
    font-family: arial;
    padding: 3px 5px;
    text-align: left;
    line-height: 1.4;
}
.show ul li div:hover {
    text-decoration: none;
    background: #fff;
    background: -webkit-linear-gradient(45deg, rgba(160,207,244,0.9), rgba(255,255,255,0.7));
    background: -o-linear-gradient(45deg, rgba(160,207,244,0.9), rgba(255,255,255,0.7));
    background: -moz-linear-gradient(45deg, rgba(160,207,244,0.9), rgba(255,255,255,0.7));
    background: linear-gradient(45deg, rgba(160,207,244,0.9), rgba(255,255,255,0.7));
}
.show ul li div span {
    float: right;
    text-align: right;
    font-size: 10px;
    color:#999;
    margin: 0 0 0 20px;
}
.hide {
    display: none;
}
</style>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>
    <!-- initially hidden right-click menu -->
    <div class="hide" id="rmenu">
        <ul class="gradient_cls">
            <li>
                <div><i class="fa fa-cut"></i> Cut <span>hello</span></div>
            </li>
            <li>
                <div><i class="fa fa-copy"></i> Copy <span>lello</span></div>
            </li>
            <li>
                <div><i class="fa fa-paste"></i> Paste <span> yo yo</span></div>
            </li>
            <li class="menu_separator"></li>
            <li>
                <div><i class="fa fa-commenting"></i> Compose <span>hello</span></div>
            </li>
            <li>
                <div><i class="fa fa-reply"></i> Reply <span>lello</span></div>
            </li>
            <li>
                <div><i class="fa fa-trash"></i> Delete <span> yo yo</span></div>
            </li>
        </ul>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function() {

    if (document.addEventListener) {
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            document.getElementById("rmenu").className = "show";  
            document.getElementById("rmenu").style.top =  mouseY(e) + "px";
            document.getElementById("rmenu").style.left = mouseX(e) + "px";
        },false);
    }
    else
    {
            $('body').on('contextmenu', document, function() {
            document.getElementById("rmenu").className = "show";  
            document.getElementById("rmenu").style.top =  mouseY(event) + "px";
            document.getElementById("rmenu").style.left = mouseX(event) + "px";
            window.event.returnValue = false;


        });
    }

});

    $(document).bind("click", function(event) {
        document.getElementById("rmenu").className = "hide";
    });



function mouseX(evt) {
    if (evt.pageX) {
        return evt.pageX;
    } else if (evt.clientX) {
       return evt.clientX + (document.documentElement.scrollLeft ?
           document.documentElement.scrollLeft :
           document.body.scrollLeft);
    } else {
        return null;
    }
}

function mouseY(evt) {
    if (evt.pageY) {
        return evt.pageY;
    } else if (evt.clientY) {
       return evt.clientY + (document.documentElement.scrollTop ?
       document.documentElement.scrollTop :
       document.body.scrollTop);
    } else {
        return null;
    }
}
</script>
</html>