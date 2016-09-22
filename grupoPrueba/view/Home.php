<?php




class Home extends TwigView {
    
    public function show() {
        
        echo self::getTwig()->render('backend.html.twig');
        
        
    }
    
}
