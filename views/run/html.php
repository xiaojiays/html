<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>新手教程-html在线工具</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/codemirror.min.js"></script>
<link rel="stylesheet" href="/css/codemirror.min.css">
<script src="/js/htmlmixed.js"></script>
<script src="/js/css.js"></script>
<script src="/js/javascript.js"></script>
<script src="/js/xml.js"></script>
<script src="/js/closetag.js"></script>
<script src="/js/closebrackets.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.min.js"></script>
<![endif]-->
<style>
  .CodeMirror {
      font-size:12px;
      height:450px;
  }
  #textareaCode {
      height: 450px;
  }
  #iframeResult {
      border: 0!important;
      min-width: 100px;
      width: 100%;
      height: 450px;
      background-color: #fff;
  }
  @media screen and (max-width: 768px) {
      #textareaCode {
          height: 300px;
      }
      .CodeMirror {
            font-size:12px;
            height:300px;
      }
    #iframeResult {
     height: 300px;
    }
    .form-inline {
            padding: 6px 0 2px 0;
    }
  }
  .ad {
          text-align: center;
  }
  </style>
          </head>
          <body>

          <div class="container" style="width:100%;height:100%; font-size:12px;">
          <div class="row" style="background-color: #75b9e6;">
          <div class="panel panel-default" style="margin-bottom:0;">


          <div class="panel-body" style="background-color: #75b9e6;border-color: #75b9e6;">
          <form autocomplete="off" role="form">

          <div class="row" >

          <div class="col-sm-6" id="LeftPane">

          <div class="row-fluid">
          <label class="inline" ><strong style="font-size: 16px;color:white;"> 源代码:</strong></label>
          <input id="submitBTN"  onclick="submitTryit()" type="button" class="pull-right inline" value="提交运行 &#187;" >
          <input type="hidden" id="bt" name="bt">
          <input type="hidden" name="code" id="code" />
          </div>
          <textarea class="form-control"  id="textareaCode" name="textareaCode" ><?=$content?></textarea>


          </div>
          <div class="col-sm-6" id="RightPane">

          <label><strong style="font-size: 16px;color:white;"> 运行结果：</strong></label>


          <div id="iframewrapper">


          </div>
          </div>
          </div>

          </div>


          </form>
          </div>
          </div>

          </div>
          </div>

          <script>
// Define an extended mixed-mode that understands vbscript and
// leaves mustache/handlebars embedded templates in html mode
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
                basepath = '<base href="/images/gggg/" target="_blank">';
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
submitTryit();

</script>
</body></html>
