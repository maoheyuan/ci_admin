function setContentHeight(){
    contentHeight=$(".content").height();
    windowHeight=$(window).height()
    navHeight=$(".navbar").height()
    if(contentHeight>=(windowHeight-navHeight)){
        return;
    }
    $(".content").height((windowHeight-navHeight-52))
}
setContentHeight();


