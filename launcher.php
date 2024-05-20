<?php
require_once 'CssGenerator.php';
require_once 'HtmlGenerator.php';


// HTML Generation
$htmlGenerator = new HtmlGenerator();
$htmlGenerator
    ->addHead()
    ->addMeta(['charset' => 'UTF-8'])
    ->addMeta(['name' => 'author', 'content' => 'HTML by Junto and Tuba | CSS by Basanal and Cena'])
    ->addTitle("Libretto Books")
    ->closeTitle()
    ->addStylesheet("libretto_styles.css")
    ->closeHead()
    ->addBody()
    ->addSection(['id' => 'header'])
    ->addSection(['id' => 'lefthead'])
    ->closeSection()
    ->addSection(['id' => 'righthead'])
    ->closeSection()
    ->closeSection()
    ->addSection(['id' => 'mainmenubar'])
    ->addUnorderedList(['<a href="#">Home</a>', '<a href="#">Reading</a> <ul class="sub1"> <li><a href="#">Novels</a></li> <li><a href="#">Hardbound</a></li> <li><a href="#">Paperback</a></li> <li><a href="#">Comics</a></li><li><a href="#">Categories</a></li> </ul>', '<a href="#">Featured</a>', '<a href="#">Orders</a>', '<a href="#">Deal &amp; Offers</a>'], ['id' => 'mainmenu'])
    ->closeSection()
    ->addSection(['id' => 'maincontainer'])
    ->addSection(['id' => 'headline'])
    ->addSection(['id' => 'headlleft'])
    ->addImage(['src' => 'images/hunger_games_trilogy.jpg', 'title' => 'The Hunger Games Trilogy', 'alt' => 'The Hunger Games Trilogy'])
    ->closeSection()
    ->addSection(['id' => 'headlright'])
    ->addLineBreak()
    ->addSpan("Special Offer!!!", ['class' => 'headlineimpact'])
    ->closeSpan()
    ->addLineBreak()
    ->addSpan("Limited stocks only!!!", ['class' => 'headlinetext'])
    ->closeSpan()
    ->addLineBreak()
    ->closeSection()
    ->closeSection()
    ->addSection(['id' => 'left'])
    ->closeSection()
    ->addSection(['id' => 'right'])
    ->addSpan("Book News", ['class' => 'blockheadings'])
    ->closeSpan()
    ->addSection(['id' => 'placeholder'])
    ->addSection(['class' => 'sections'])
    ->addParagraph('Literature')
    ->closeParagraph()
    ->addSpan(" &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;", ['class' => 'sectiontext'])
    ->closeSpan()
    ->closeSection()
    ->addSection(['class' => 'sections'])
    ->addParagraph('Arts')
    ->closeParagraph()
    ->addSpan(" &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;", ['class' => 'sectiontext'])
    ->closeSpan()
    ->closeSection()
    ->addLineBreak()
    ->addSection(['class' => 'sections'])
    ->addParagraph('Drama')
    ->closeParagraph()
    ->addSpan(" &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;", ['class' => 'sectiontext'])
    ->closeSpan()
    ->closeSection()
    ->addSection(['class' => 'sections'])
    ->addParagraph('Science Fiction')
    ->closeParagraph()
    ->addSpan(" &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;", ['class' => 'sectiontext'])
    ->closeSpan()
    ->closeSection()
    ->addLineBreak()
    ->addSection(['class' => 'sections'])
    ->addParagraph('Horror')
    ->closeParagraph()
    ->addSpan(" &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;", ['class' => 'sectiontext'])
    ->closeSpan()
    ->closeSection()
    ->addSection(['class' => 'sections'])
    ->addParagraph('Love Story')
    ->closeParagraph()
    ->addSpan(" &quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
    qui officia deserunt mollit anim id est laborum.&quot;", ['class' => 'sectiontext'])
    ->closeSpan()
    ->closeSection()
    ->closeSection()
    ->closeSection()
    ->closeSection()
    ->addSection(['id' => 'footer'])
    ->addSpan('Copyright &copy; International Web Development, All rights reserved 2013', ['id' => 'copyrighttext'])
    ->closeSpan()
    ->closeSection()
    ->addLineBreak()
    ->closeBody()
    ->endHTML();

$htmlGenerator->saveToFile('libretto.html');


// CSS Generation
$cssGenerator = new CSSGenerator();

// Universal selector
$cssGenerator->setMargin('*', '0px')
    ->setPadding('*', '0px');

// Body
$cssGenerator->setMarginTop('body', '20px')
    ->setBackgroundColor('body', '#ccc')
    ->setFontFamily('body', 'arial, verdana, tahoma, sans-serif');

// Section layouts
$cssGenerator->setMargin('#header', '0 auto')
    ->setWidth('#header', '1000px')
    ->setMinHeight('#header', '200px');

$cssGenerator->setHeight('#lefthead', '200px')
    ->setWidth('#lefthead', '200px')
    ->setBackground('#lefthead', '#fff url("images/libretto2_200px.png") no-repeat')
    ->setBorderRadius('#lefthead', '25px 0 0 0')
    ->setFloat('#lefthead', 'left');

$cssGenerator->setHeight('#righthead', '200px')
    ->setWidth('#righthead', '800px')
    ->setBackground('#righthead', '#fff url("images/libretto_banner.png") no-repeat')
    ->setBorderRadius('#righthead', '0 25px 0 0')
    ->setFloat('#righthead', 'left');

$cssGenerator->setMargin('#mainmenubar', '0 auto')
    ->setWidth('#mainmenubar', '1000px')
    ->setHeight('#mainmenubar', '35px')
    ->setBackgroundColor('#mainmenubar', '#fff')
    ->setBorderBottom('#mainmenubar', '2px solid black');

$cssGenerator->setOverflow('#maincontainer', 'hidden')
    ->setMargin('#maincontainer', '0 auto')
    ->setWidth('#maincontainer', '1000px')
    ->setHeight('#maincontainer', 'auto')
    ->setBackgroundColor('#maincontainer', '#fff')
    ->setBorderBottom('#maincontainer', '1px solid black');

$cssGenerator->setWidth('#headline', '1000px')
    ->setHeight('#headline', '350px');

$cssGenerator->setDisplay('#headlleft img', 'block')
    ->setPaddingTop('#headlleft img', '40px')
    ->setMargin('#headlleft img', '0 auto');

$cssGenerator->setWidth('#headlleft', '600px')
    ->setFloat('#headlleft', 'left');

$cssGenerator->setWidth('#headlright', '400px')
    ->setFloat('#headlright', 'left');

$cssGenerator->setWidth('#left', '300px')
    ->setMinHeight('#left', '200px')
    ->setHeight('#left', 'auto')
    ->setBackgroundColor('#left', '#fff')
    ->setFloat('#left', 'left');

$cssGenerator->setWidth('#right', '700px')
    ->setHeight('#right', 'auto')
    ->setBackgroundColor('#right', '#fff')
    ->setFloat('#right', 'left');

$cssGenerator->setDisplay('#right .blockheadings', 'block')
    ->setFontFamily('#right .blockheadings', '"Arial Narrow", arial, sans-serif')
    ->setFontSize('#right .blockheadings', '30px')
    ->setColor('#right .blockheadings', '#fff')
    ->setPaddingLeft('#right .blockheadings', '10px')
    ->setBackgroundColor('#right .blockheadings', '#65A9D6');

$cssGenerator->setMargin('#right #placeholder', '0 auto')
    ->setHeight('#right #placeholder', 'auto')
    ->setPaddingTop('#right #placeholder', '30px')
    ->setWidth('#right #placeholder', '600px');

$cssGenerator->setPadding('#right .sections', '2px')
    ->setFloat('#right .sections', 'left')
    ->setMarginRight('#right .sections', '50px')
    ->setMarginBottom('#right .sections', '50px')
    ->setWidth('#right .sections', '220px')
    ->setMinHeight('#right .sections', '50px')
    ->setBorderRadius('#right .sections', '10px 10px 0 0')
    ->setBorder('#right .sections', '1px solid #ccc')
    ->setFontSize('#right .sections', '12px');

$cssGenerator->setBorderRadius('#right .sections p', '10px 10px 0 0')
    ->setBackgroundColor('#right .sections p', '#65A9D6')
    ->setFontFamily('#right .sections p', '"Arial Narrow", arial, sans-serif')
    ->setFontSize('#right .sections p', '30px')
    ->setColor('#right .sections p', '#fff')
    ->setPaddingLeft('#right .sections p', '5px')
    ->setHeight('#right .sections p', '40px');

$cssGenerator->setTextAlign('#right .sectiontext', 'justify');

$cssGenerator->setMargin('#footer', '0 auto')
    ->setWidth('#footer', '1000px')
    ->setMinHeight('#footer', '200px')
    ->setBackgroundColor('#footer', '#000')
    ->setBorderRadius('#footer', '0 0 25px 25px')
    ->setPosition('#footer', 'relative');

$cssGenerator->setDisplay('#headlright .headlineimpact', 'block')
    ->setFontFamily('#headlright .headlineimpact', 'tahoma, sans-serif')
    ->setFontSize('#headlright .headlineimpact', '45px')
    ->setFontWeight('#headlright .headlineimpact', 'normal')
    ->setColor('#headlright .headlineimpact', '#00f')
    ->setTextAlign('#headlright .headlineimpact', 'center');

$cssGenerator->setDisplay('#headlright .headlinetext', 'block')
    ->setFontFamily('#headlright .headlinetext', 'arial, verdana, sans-serif')
    ->setFontSize('#headlright .headlinetext', '30px')
    ->setFontWeight('#headlright .headlinetext', 'normal')
    ->setColor('#headlright .headlinetext', '#f00')
    ->setTextAlign('#headlright .headlinetext', 'center');

$cssGenerator->setDisplay('#footer #copyrighttext', 'block')
    ->setTextAlign('#footer #copyrighttext', 'right')
    ->setFontSize('#footer #copyrighttext', '13px')
    ->setColor('#footer #copyrighttext', '#fff')
    ->setPosition('#footer #copyrighttext', 'absolute')
    ->setBottom('#footer #copyrighttext', '20px')
    ->setRight('#footer #copyrighttext', '10px');




// Main menu
$cssGenerator->setListStyle('#mainmenu, .sub1, .sub2', 'none');

$cssGenerator->setWidth('#mainmenu li', '125px')
    ->setPosition('#mainmenu li', 'relative')
    ->setFloat('#mainmenu li', 'left')
    ->setMarginRight('#mainmenu li', '4px')
    ->setTextAlign('#mainmenu li', 'center');

$cssGenerator->setFontWeight('#mainmenu a', 'bold')
    ->setBackgroundColor('#mainmenu a', '#fff')
    ->setColor('#mainmenu a', '#000')
    ->setTextDecoration('#mainmenu a', 'none')
    ->setDisplay('#mainmenu a', 'block')
    ->setWidth('#mainmenu a', '125px')
    ->setHeight('#mainmenu a', '35px')
    ->setLineHeight('#mainmenu a', '35px');

$cssGenerator->setFontSize('#mainmenu .sub1 a', '12px');

$cssGenerator->setBackgroundColor('#mainmenu li:hover > a', '#237291')
    ->setColor('#mainmenu li:hover > a', '#fff');

$cssGenerator->setHover('#mainmenu li:hover a', 'background-color', 'aqua')
    ->setHover('#mainmenu li:hover a', 'color', '#000');

$cssGenerator->setDisplay('#mainmenu .sub1', 'none')
    ->setPosition('#mainmenu .sub1', 'absolute');

$cssGenerator->setDisplay('#mainmenu .sub2', 'none')
    ->setPosition('#mainmenu .sub2', 'absolute')
    ->setTop('#mainmenu .sub2', '0px')
    ->setLeft('#mainmenu .sub2', '127px');

$cssGenerator->setDisplay('#mainmenu li:hover .sub1', 'block')
    ->setDisplay('#mainmenu .sub1 li:hover .sub2', 'block');

$cssGenerator->outputCSS('libretto_styles.css');


echo "HTML and CSS files have been generated.";
