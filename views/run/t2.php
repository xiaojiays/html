
<!DOCTYPE html>
<html lang="zh-CN">
<html>
<head>
<title>菜鸟教程在线编辑器</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/codemirror.css" />
<script src="/js/codemirror.js"></script>
<script src="/js/selection-pointer.js"></script>
<script src="/js/xml.js"></script>
<script src="/js/javascript.js"></script>
<script src="/js/css.js"></script>
<script src="/js/htmlmixed.js"></script>
<script>
(function() {
        if ( navigator.userAgent.match(/iPad/i) ) {
                document.getElementById('viewport').setAttribute("content", "width=device-width, initial-scale=0.9");
        }
}());
</script>
<link rel="stylesheet" type="text/css" href="/css/trycss.css">
<!--[if lt IE 8]>
<style>
.textareacontainer, .iframecontainer {width:48%;}
.textarea, .iframe {height:800px;}
#textareaCode, #iframeResult {height:700px;}
.menu img {display:none;}
</style>
<![endif]-->

<style>

   .resultHeader {
     padding-top:15px;
       }
         .textareacontainer, .iframecontainer {
           height:49%;
             float:none;
               width:98%;
                 margin: 0 1%;
                   }
                     .textarea, .iframe {
                       position:relative;
                         width:100%;
                           margin:0;
                             height:99%;
                               }
                                 .container {
                                   min-width:260px;
                                     }
                                     .CodeMirror {
                                         position:relative;
                                             width:100%;
                                                 margin:0;
                                                     height:99%;
                                                     }
                                                     </style>
                                                     </head>
                                                     <body>
<div class="container">
<?=$content?>
<script>
var mixedMode = {
name: "htmlmixed",
        scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
        mode: null},
        {matches: /(text|application)\/(x-)?vb(a|script)/i,
        mode: "vbscript"}]
                                                                          };
var editor = CodeMirror.fromTextArea(document.getElementById("textareaCode"), {
mode: mixedMode,
        selectionPointer: true,
        lineNumbers: false,
        matchBrackets: true,
        indentUnit: 4,
        indentWithTabs: true
                                                                          });
function submitTryit() {
        var text = editor.getValue();

        var patternHtml = /<html[^>]*>((.|[\n\r])*)<\/html>/im
                var patternHead = /<head[^>]*>((.|[\n\r])*)<\/head>/im
                var array_matches_head = patternHead.exec(text);

        var patternBody = /<body[^>]*>((.|[\n\r])*)<\/body>/im;
        var array_matches_body = patternBody.exec(text);

        var basepath_flag = 1;
        var basepath = '';
        if(basepath_flag) {
                basepath = '<base href="http://www.runoob.com/try/demo_source/" target="_blank">';
        }

        if(array_matches_head) {
                text = text.replace('<head>', '<head>' + basepath );
        } else if (patternHtml) {
                text = text.replace('<html>', '<head>' + basepath + '</head>');
        } else if (array_matches_body) {
                text = text.replace('<body>', '<body>' + basepath );
        } else {
                text = basepath + text;
        }



        var ifr = document.createElement("iframe");
        ifr.setAttribute("frameborder", "0");
        ifr.setAttribute("id", "iframeResult");
        document.getElementById("iframewrapper").innerHTML = "";
        document.getElementById("iframewrapper").appendChild(ifr);

        var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
        ifrw.document.open();
        ifrw.document.write(text);
        ifrw.document.close();
}

</script>
<script>submitTryit();</script>
        </body>
        </html>
