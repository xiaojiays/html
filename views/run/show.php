<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Tryit Editor v1.8</title>
<style>
body
{
color:#000000;
background-color:#ffffff;
margin:4px;
margin-top:0px;
}

body, html
 {
 border:0px;
 margin:0px;
 padding: 0px;
 height:100%;
 position:relative;
 width:100%;
}

.maintable
{
width:100%;
background-color:#75b9e6;
color:#000000;
border:solid #c3c3c3 1px;
margin-left:0px;
}

.maintable td
{
padding-left:5px;
padding-right:5px;
}

.code_input, .result_output
{
border:1px solid #c3c3c3;
width:100%;
height:400px;
background-color:#ffffff;
color:#000000;
}

.toptext
{
color:#617f10;
font-family:verdana;
margin-top:0px;
margin-bottom:8px;
font-size:120%;
}

.result_header
{
color:#617f10;
margin-top:0px;
font-family:verdana;
font-size:90%;
}

.bottomtext_div
{
margin-right:3px;
}

.bottomtext
{
color:#617f10;
font-family:verdana;
margin-bottom:0px;
margin-top:6px;
font-size:90%;
}

.toprect_txt a:link,.toprect_txt a:visited {text-decoration:none;color:#900B09;background-color:transparent}
.toprect_txt a:hover,.toprect_txt a:active {text-decoration:underline;color:#FF0000;background-color:transparent}

div.toprect_txt
{
font-family:verdana,helvetica,arial,sans-serif;
position:absolute;
left:0px;top:0px;
width:225px;height:84px;
padding:0px;margin:0px;padding-top:4px;
border:1px solid #c3c3c3;
color:#606060;
text-align:center;
font-size:12px;
}
div.toprect_img
{
font-family:verdana,helvetica,arial,sans-serif;
position:absolute;
left:0px;top:0px;
width:227px;height:90px;
margin:0px;padding:0px;
color:#606060;
text-align:center;
font-size:12px;
}

#ads
{
 background-color: #ffffff;
  position:absolute;
   height: 104px;
    width:100%;
     top:0px;
      min-width:903px;
      }

      #footer
      {
       position:absolute;
        width:893px;
         height:20px;
          bottom:-20px;
           color:#617f10;
            font-family:verdana;
             font-size:90%;
              padding-left:10px;
               background-color: #75b9e6;
               }

               #content
               {
                background-color: #75b9e6;
                 position:absolute;
                  height:auto;
                   top:100px;
                    bottom:20px;
                     width:100%;
                      border-top:solid #c3c3c3 1px;
                       min-width:903px;
                        min-height:400px;
                        }

                        #sourcecode
                        {
                         position:absolute;
                          height:auto;
                           left:10px;
                            top:5px;
                             bottom:40px;
                              width:48%;
                              }

                              #textareaCode
                              {
                               position:absolute;
                                height:99%;
                                 width:99%;
                                  top:30px;
                                   bottom:10px;
                                    border:1px solid #d3d3d3;
                                     resize: none;
                                      min-width:400px;
                                       min-height:350px;
                                       }

                                       #result
                                       {
                                        position:absolute;
                                         height:auto;
                                          right:10px;
                                           top:5px;
                                            bottom:40px;
                                             width:48%;
                                             }

                                             #iframeResult
                                             {
                                              position:absolute;
                                               background-color: #ffffff;
                                                height:99%;
                                                 top:30px;
                                                  bottom:10px;
                                                   width:100%;
                                                    border:1px solid #d3d3d3;
                                                     min-width:400px;
                                                      min-height:350px;
                                                      }

                                                      .headerText
                                                      {
                                                      color:#617f10;
                                                      position:absolute;
                                                      font-family:verdana;
                                                      font-size:90%;
                                                      top:8px;
                                                      }

                                                      .footerText
                                                      {
                                                      color:#617f10;
                                                      font-family:verdana;
                                                      font-size:90%;
                                                      position:absolute;
                                                      }

                                                      #submitBTN
                                                      {
                                                       font-family:verdana;
                                                        right:5px;
                                                         position:absolute;
                                                          top:0px;
                                                           width:130px;
                                                           }
                                                           </style>


                                                           <body style="background-color:#75b9e6;" huaban_screen_capture_injected="true">

<div id="content">
<?=$content?>
</body></html>
