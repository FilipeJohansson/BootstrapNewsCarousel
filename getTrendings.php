<?php

require_once("./Carousel.php");

$news[] = new Carousel(
    'http://placehold.it/760x400/55555/cccccc', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et finibus dolor. Mauris a felis ac ex pharetra interdum eu eget dui.'
);

$news[] = new Carousel(
    'http://placehold.it/760x400/5i5i5/cccccc', 
    'Fusce et finibus dolor. Mauris a felis ac ex pharetra interdum eu eget dui.', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et finibus dolor. Mauris a felis ac ex pharetra interdum eu eget dui.'
);

$news[] = new Carousel(
    'http://placehold.it/760x400/9a1j2o/cccccc', 
    'Nam eget interdum metus, et porttitor libero.', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et finibus dolor. Mauris a felis ac ex pharetra interdum eu eget dui.'
);

$news[] = new Carousel(
    'http://placehold.it/760x400/999999/cccccc', 
    'Aliquam blandit vel arcu quis ultrices. Sed pellentesque tincidunt velit, non tincidunt enim maximus quis.', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et finibus dolor. Mauris a felis ac ex pharetra interdum eu eget dui.'
);

$news[] = new Carousel(
    'http://placehold.it/760x400/dddddd/333333', 
    'Donec rhoncus, risus in convallis ultrices, metus mauris vulputate ante, nec laoreet enim ex a ante.', 
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et finibus dolor. Mauris a felis ac ex pharetra interdum eu eget dui.'
);

echo json_encode($news);