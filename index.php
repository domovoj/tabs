<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <style>
            *{margin: 0;padding: 0;}
            body{padding: 10px;}
            ul{list-style: none;}
            .tabs{float: left;border-right: 1px solid grey;}
            .tabs > li{float: left;border: 1px solid grey;border-right: 0;}
            .tabs > li > *{padding: 5px 15px;display: block;}
            .tabs > li.tab-active > button{background: #fff;}
            .tabs > li.tab-active > a{background: #eee;}
            .frame-tabs-ref{border: 1px solid grey;margin-bottom: 40px;clear: left;}
            .frame-tabs-ref > div, [data-id]{display: none;position: relative;}

            .firstClass #firstClass{display: block;}
            .secondClass #secondClass{display: block;}
            .thirdClass #thirdClass{display: block;}

            .firstClassCookie #firstClassCookie{display: block;}
            .secondClassCookie #secondClassCookie{display: block;}
            .thirdClassCookie #thirdClassCookie{display: block;}

            .preloader{background-color: rgba(255,255,255,.5);position: absolute;left: 0;top: 0;width: 100%;height: 100%;z-index: 1;}

            .frame-tabs-ref[class*="Class"] div{height: 50px;display: block;}
            .frame-tabs-ref[class*="first"] div{background-color: red;}
            .frame-tabs-ref[class*="second"] div{background-color: green;}
            .frame-tabs-ref[class*="third"] div{background-color: blue;}
        </style>
        <script src="jquery.js"></script>
        <script src="tabs.js"></script>
    </head>
    <body>
        <h1>Simple Tabs</h1>
        <ul class="tabs simple-tabs">
            <li>
                <button data-href="#firstST">firstST</button>
            </li>
            <li>
                <button data-href="#secondST">secondST</button>
            </li>
            <li>
                <button data-href="#thirdST">thirdST</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstST">
                firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST firstST 
            </div>
            <div id="secondST">
                secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST secondST 
            </div>
            <div id="thirdST">
                thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST thirdST 
            </div>
        </div>
        <!--------------------->
        <h1>Active Tab</h1>
        <ul class="tabs active-tabs">
            <li>
                <button data-href="#firstAT">firstAT</button>
            </li>
            <li class="active">
                <button data-href="#secondAT">secondAT</button>
            </li>
            <li>
                <button data-href="#thirdAT">thirdAT</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstAT">
                firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT firstAT 
            </div>
            <div id="secondAT">
                secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT secondAT 
            </div>
            <div id="thirdAT">
                thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT thirdAT 
            </div>
        </div>        
        <!--------------------->
        <h1>Cookie Tab</h1>
        <ul class="tabs cookie-tabs" data-cookie="cookieTab">
            <li>
                <button data-href="#firstCT">firstCT</button>
            </li>
            <li>
                <button data-href="#secondCT">secondCT</button>
            </li>
            <li>
                <button data-href="#thirdCT">thirdCT</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstCT">
                firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT firstСT 
            </div>
            <div id="secondCT">
                secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT secondСT
            </div>
            <div id="thirdCT">
                thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT thirdСT
            </div>
        </div>
        <!--------------------->
        <h1>Hash Tab</h1>
        <ul class="tabs hash-tabs">
            <li>
                <a href="#firstHT">firstHT</a>
            </li>
            <li>
                <a href="#secondHT">secondHT</a>
            </li>
            <li>
                <a href="#thirdHT">thirdHT</a>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstHT">
                firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT firstHT 
            </div>
            <div id="secondHT">
                secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT secondHT 
            </div>
            <div id="thirdHT">
                thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT thirdHT 
            </div>
        </div>
        <!--------------------->
        <h1>Tabs toogles</h1>
        <ul class="tabs toggle-tabs" data-toggle>
            <li>
                <button data-href="#firstToggle">firstToggle</button>
            </li>
            <li>
                <button data-href="#secondToggle">secondToggle</button>
            </li>
            <li>
                <button data-href="#thirdToggle">thirdToggle</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstToggle">
                firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle firstToggle 
            </div>
            <div id="secondToggle">
                secondToggle secondToggle secondToggle secondToggle secondToggle secondToggle secondToggle secondToggle secondToggle secondToggle secondToggle
            </div>
            <div id="thirdToggle">
                thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle thirdToggle 
            </div>
        </div>
        <!--------------------->
        <h1>Tabs toogles with non active on start</h1>
        <ul class="tabs toggle-tabs" data-toggle>
            <li>
                <button data-href="#firstToggleNA" data-non-start>firstToggleNA</button>
            </li>
            <li>
                <button data-href="#secondToggleNA">secondToggleNA</button>
            </li>
            <li>
                <button data-href="#thirdToggleNA">thirdToggleNA</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstToggleNA">
                firstToggleNA firstToggleNA firstToggleNA firstToggleNA firstToggleNA firstToggleNA firstToggleNA firstToggleNA firstToggleNA firstToggleNA 
            </div>
            <div id="secondToggleNA">
                secondToggleNA secondToggleNA secondToggleNA secondToggleNA secondToggleNA secondToggleNA secondToggleNA secondToggleNA secondToggleNA secondToggleNA 
            </div>
            <div id="thirdToggleNA">
                thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA thirdToggleNA 
            </div>
        </div>
        <!--------------------->
        <h1>Tabs toogles with cookie</h1>
        <ul class="tabs toggle-tabs-cookie" data-cookie="toggle" data-toggle>
            <li>
                <button data-href="#firstToggleCT">firstToggleCT</button>
            </li>
            <li>
                <button data-href="#secondToggleCT">secondToggleCT</button>
            </li>
            <li>
                <button data-href="#thirdToggleCT">thirdToggleCT</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstToggleCT">
                firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT 
            </div>
            <div id="secondToggleCT">
                secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCH 
            </div>
            <div id="thirdToggleCT">
                thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT 
            </div>
        </div>
        <!--------------------->
        <h1>Tabs toogles with hash</h1>
        <ul class="tabs toggle-tabs-hash" data-toggle>
            <li>
                <a href="#firstToggleTH">firstToggleTH</a>
            </li>
            <li>
                <a href="#secondToggleTH">secondToggleTH</a>
            </li>
            <li>
                <a href="#thirdToggleTH">thirdToggleTH</a>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstToggleTH">
                firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT firstToggleCT 
            </div>
            <div id="secondToggleTH">
                secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCT secondToggleCH 
            </div>
            <div id="thirdToggleTH">
                thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT thirdToggleCT 
            </div>
        </div>
        <!--------------------->
        <h1>Toggle class tab</h1>
        <ul class="tabs toggles-class-tabs" data-elchange="#chageClass">
            <li>
                <button data-href="#firstClass">firstClass</button>
            </li>
            <li>
                <button data-href="#secondClass">secondClass</button>
            </li>
            <li>
                <button data-href="#thirdClass">thirdClass</button>
            </li>
        </ul>
        <div class="frame-tabs-ref" id="chageClass">
            <div></div>
        </div>
        <!--------------------->
        <h1>Toggle class tab with cookie</h1>
        <ul class="tabs toggles-class-cookie-tabs" data-elchange="#chageClass2" data-cookie="chageClass2">
            <li>
                <button data-href="#firstClassCookie">firstClassCookie</button>
            </li>
            <li>
                <button data-href="#secondClassCookie">secondClassCookie</button>
            </li>
            <li>
                <button data-href="#thirdClassCookie">thirdClassCookie</button>
            </li>
        </ul>
        <div class="frame-tabs-ref" id="chageClass2">
            <div></div>
        </div>
        <!--------------------->
        <h1>Toggle class tab and cookie and toogle</h1>
        <ul class="tabs toggles-class-tabs" data-elchange="#chageClass3" data-toggle data-cookie="chageClass3">
            <li>
                <button data-href="#firstClassFULL">firstClassFULL</button>
            </li>
            <li>
                <button data-href="#secondClassFULL">secondClassFULL</button>
            </li>
            <li>
                <button data-href="#thirdClassFULL">thirdClassFULL</button>
            </li>
        </ul>
        <div class="frame-tabs-ref" id="chageClass3">
            <div></div>
        </div>
        <!--------------------->
        <h1>Addings blocks</h1>
        <ul class="tabs adding-tabs">
            <li>
                <button data-href="#firstAB">firstAB</button>
            </li>
            <li>
                <button data-href="#secondAB">secondAB</button>
            </li>
            <li>
                <button data-href="#thirdAB">thirdAB</button>
            </li>
        </ul>
        <div data-id="#firstAB" style="clear: left;">
            firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 firstAB2 
        </div>
        <div class="frame-tabs-ref">
            <div id="firstAB">
                firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB firstAB 
            </div>
            <div id="secondAB">
                secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB secondAB 
            </div>
            <div id="thirdAB">
                thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB thirdAB 
            </div>
        </div>
        <div data-id="#firstAB" style="margin: -40px 0 40px;">
            firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 firstAB3 
        </div>
        <!--------------------->
        <h1>Load content Tab</h1>
        <ul class="tabs load-tabs">
            <li>
                <button data-href="#firstLC" data-source="upload.php" data-data='{"id": 1}'>firstLC</button>
            </li>
            <li>
                <button data-href="#secondLC" data-source="upload.php" data-data='{"id": 2}'>secondLC</button>
            </li>
            <li>
                <button data-href="#thirdLC" data-source="upload.php" data-data='{"id": 3}'>thirdLC</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstLC">

            </div>
            <div id="secondLC">

            </div>
            <div id="thirdLC">

            </div>
        </div>
        <!--------------------->
        <h1>Load content Tab into check selector</h1>
        <ul class="tabs load-tabs-selector">
            <li>
                <button data-href="#firstLCS" data-source="upload.php" data-data='{"id": 1}' data-selector=".inside">firstLCS</button>
            </li>
            <li>
                <button data-href="#secondLCS" data-source="upload.php" data-data='{"id": 2}' data-selector=".inside">secondLCS</button>
            </li>
            <li>
                <button data-href="#thirdLCS" data-source="upload.php" data-data='{"id": 3}' data-selector=".inside">thirdLCS</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstLCS">
                this content was
                <div class="inside"></div>
            </div>
            <div id="secondLCS">
                this content was
                <div class="inside"></div>
            </div>
            <div id="thirdLCS">
                this content was
                <div class="inside"></div>
            </div>
        </div>
        <!--------------------->
        <h1>Load content Tab use before and after load</h1>
        <ul class="tabs load-tabs-callback">
            <li>
                <button data-href="#firstLCC" data-source="upload.php" data-data='{"id": 1}'>firstLCС</button>
            </li>
            <li>
                <button data-href="#secondLCC" data-source="upload.php" data-data='{"id": 2}'>secondLCС</button>
            </li>
            <li>
                <button data-href="#thirdLCC" data-source="upload.php" data-data='{"id": 3}'>thirdLCС</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstLCC">

            </div>
            <div id="secondLCC">

            </div>
            <div id="thirdLCC">

            </div>
        </div>
        <!--------------------->
        <h1>Load content Tab always</h1>
        <ul class="tabs load-tabs-always">
            <li>
                <button data-href="#firstLCA" data-source="upload.php" data-data='{"id": 1}'>firstLCA</button>
            </li>
            <li>
                <button data-href="#secondLCA" data-source="upload.php" data-data='{"id": 2}'>secondLCA</button>
            </li>
            <li>
                <button data-href="#thirdLCA" data-source="upload.php" data-data='{"id": 3}'>thirdLCA</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstLCA">

            </div>
            <div id="secondLCA">

            </div>
            <div id="thirdLCA">

            </div>
        </div>
        <!--------------------->
        <h1>Tab callbacks</h1>
        <ul class="tabs tabs-callback">
            <li>
                <button data-href="#firstCBT">firstCBT</button>
            </li>
            <li>
                <button data-href="#secondCBT">secondCBT</button>
            </li>
            <li>
                <button data-href="#thirdCBT">thirdCBT</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstCBT">
                firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT firstCBT
            </div>
            <div id="secondCBT">
                secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT secondCBT 
            </div>
            <div id="thirdCBT">
                thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT thirdLCBT 
            </div>
        </div>
        <!--------------------->
        <h1>Tab Effect</h1>
        <ul class="tabs tabs-effect">
            <li>
                <button data-href="#firstET">firstCBT</button>
            </li>
            <li>
                <button data-href="#secondET">secondCBT</button>
            </li>
            <li>
                <button data-href="#thirdET">thirdCBT</button>
            </li>
        </ul>
        <div class="frame-tabs-ref">
            <div id="firstET">
                firstET <br/>
                firstET <br/>
                firstET <br/>
                firstET <br/>
                firstET <br/>
                firstET <br/>
                firstET <br/>
            </div>
            <div id="secondET">
                secondET <br/>
                secondET <br/>
                secondET <br/>
                secondET <br/>
                secondET <br/>
                secondET <br/>
                secondET <br/>
                secondET <br/>
                secondET <br/>
            </div>
            <div id="thirdET">
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
                thirdET <br/>
            </div>
        </div>
        <!--------------------->
        <?php
        ?>
        <script type="text/javascript">
            $('.load-tabs-callback, .load-tabs-always').on('tabs.beforeload', function(e) {
                if (e.options.divOld)
                    e.options.divOld.append('<div class="preloader"></div>');
            }).on('tabs.afterload', function(e) {
                if (e.options.divOld)
                    e.options.divOld.find('.preloader').remove();
            });
            $('.load-tabs-always').on('tabs.beforeload', function(e) {
                if (e.options.elOld)
                    e.options.elOld.removeClass('tab-visited');
            });

            $('.tabs').tabs();
            $('.tabs-callback').tabs({
                before: function(el, div, start) {
                    if (!start)
                        return confirm('do you want?');
                },
                after: function() {
                    console.log(arguments)

                    alert('Do after!');
                }
            });
            $('.tabs-effect').tabs({
                before: function(btn, div, start) {
                    console.log(start)
                    div.show();
                    var height = div.height();

                    div.hide().parent().css('height', height);
                    console.log(arguments);
                },
                effectOn: 'slideDown',
                effectOff: 'slideUp',
                durationOn: 500,
                durationOff: 100
            });
        </script>
    </body>
</html>