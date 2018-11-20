
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP  在线编辑器 | 菜鸟教程</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<script src="/js/codemirror.min.js"></script>
<link rel="stylesheet" href="/css/codemirror.min.css">
</script><script src="/js/htmlmixed.js"></script>
</script><script src="/js/xml.js"></script>
</script><script src="/js/javascript.js"></script>
</script><script src="/js/css.js"></script>
</script><script src="/js/clike.js"></script>
</script><script src="/js/php.js"></script>
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

                                                                                                         <body>
                                                                                                         <div class="container" style="width:100%;height:100%; font-size:12px;">

<div class="row" style="background-color: #75b9e6;">
<?=$content?>
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script>
var editor = CodeMirror.fromTextArea(document.getElementById("textareaCode"), {
lineNumbers: false,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true
});
var ifr = document.createElement("iframe");
ifr.setAttribute("frameborder", "0");
ifr.setAttribute("id", "iframeResult");
document.getElementById("iframewrapper").innerHTML = "";
document.getElementById("iframewrapper").appendChild(ifr);
var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
ifrw.document.open();
ifrw.document.write("<html><head><\/head><body><br> <br> <br><br>Hello World! <br><br> <br><\/body><\/html>");
ifrw.document.close();

$("#submitBTN").click(function() {
        code = editor.getValue();
        runcode = 3;
        loadingdata = '<img src="/images/loading.gif">';
        ifrw.document.open();
        ifrw.document.write(loadingdata);
        ifrw.document.close();
        $.post("/run/compile",{code:code,language:runcode},function(data){
                text = data.output.replace(/\r\n|\r|\n/g,"<br />")  + data.errors;
                ifrw.document.open();
                ifrw.document.write('<pre>' + text + '</pre>');
                ifrw.document.close();
        });
})
        </script>
</body>
</html>
